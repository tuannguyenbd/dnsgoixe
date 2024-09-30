<?php

namespace Modules\TripManagement\Lib;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Modules\PromotionManagement\Entities\DiscountSetup;
use Modules\PromotionManagement\Service\Interface\DiscountSetupServiceInterface;
use Modules\TripManagement\Service\Interface\TripRequestServiceInterface;

trait DiscountCalculationTrait
{

    public function getEstimatedDiscount($user, $zoneId, $tripType, $vehicleCategoryId, $estimatedAmount, $beforeCreate = false)
    {
        $discountSetupService = app(DiscountSetupServiceInterface::class);
        $tripRequestService = app(TripRequestServiceInterface::class);

        $tripAmountWithoutVatTaxAndTips = $estimatedAmount;
        $criteria = [
            'user_id' => $user->id,
            'level_id' => $user->user_level_id,
            'zone_id' => $zoneId,
            'is_active' => 1,
            'date' => date('Y-m-d'),
            'fare' => $tripAmountWithoutVatTaxAndTips
        ];
        $userTripApplicableDiscounts = $discountSetupService->getUserTripApplicableDiscountList(tripType: $tripType, vehicleCategoryId: $vehicleCategoryId, data: $criteria);
        $adminDiscount = null;
        if ($userTripApplicableDiscounts->isNotEmpty()) {
            $discounts = [];
            foreach ($userTripApplicableDiscounts as $userTripApplicableDiscount) {
                $userAppliedDiscountCountCriteria = [
                    'customer_id' => $user->id,
                    'discount_id' => $userTripApplicableDiscount->id,
                    'payment_status' => PAID,
                ];
                $userAppliedDiscountCount = $tripRequestService->getBy(criteria: $userAppliedDiscountCountCriteria)->count();
                if ($userTripApplicableDiscount->limit_per_user > $userAppliedDiscountCount) {
                    $discounts[] = [
                        'discount' => $userTripApplicableDiscount,
                        'discount_id' => $userTripApplicableDiscount->id,
                        'discount_amount' => $this->getDiscountAmount($userTripApplicableDiscount, $tripAmountWithoutVatTaxAndTips)
                    ];
                }
            }
            if (count($discounts) > 0) {
                $discountsCollection = collect($discounts);
                $adminDiscount = $discountsCollection->sortByDesc('discount_amount')->first();
            }
        }
        $referralDiscountAmount = 0;
        $totalTrips = $beforeCreate ? (count($user->customerTrips) + 1) : count($user->customerTrips);
        if (referralEarningSetting('referral_earning_status', CUSTOMER)?->value &&
            $user?->referralCustomerDetails && $user?->referralCustomerDetails?->is_used == 0 && $totalTrips == 1
            && $user?->referralCustomerDetails->customer_discount_amount > 0) {
            if ($user?->referralCustomerDetails?->customer_discount_validity == null || $user?->referralCustomerDetails?->customer_discount_validity == 0 || $user?->referralCustomerDetails->customer_discount_validity_type == null) {
                $referralDiscountAmount = $this->getReferralCustomerDiscountAmount($user, $tripAmountWithoutVatTaxAndTips);
            }
            if ($user?->referralCustomerDetails->customer_discount_validity > 0 && $user?->referralCustomerDetails->customer_discount_validity_type != null) {
                $validityTime = Carbon::create($user->created_at);
                if ($user?->referralCustomerDetails->customer_discount_validity_type === 'hour') {
                    $validityTime = $validityTime->addHours((int)$user?->referralCustomerDetails->customer_discount_validity);
                } else {
                    $validityTime = $validityTime->addDays((int)$user?->referralCustomerDetails->customer_discount_validity);
                }
                if ($validityTime >= Carbon::now()) {
                    $referralDiscountAmount = $this->getReferralCustomerDiscountAmount($user, $tripAmountWithoutVatTaxAndTips);
                }
            }
        }

        if ($adminDiscount && $referralDiscountAmount) {
            if ($adminDiscount['discount_amount'] > $referralDiscountAmount) {
                return $adminDiscount;
            }
            return collect([
                'discount' => null,
                'discount_id' => null,
                'discount_amount' => $referralDiscountAmount
            ]);
        }
        if ($adminDiscount) {
            return $adminDiscount;
        }
        if ($referralDiscountAmount) {
            return collect([
                'discount' => null,
                'discount_id' => null,
                'discount_amount' => $referralDiscountAmount
            ]);
        }

        return collect([
            'discount' => null,
            'discount_id' => null,
            'discount_amount' => 0
        ]);
    }

    public function getFinalDiscount($user, $trip)
    {
        $discountSetupService = app(DiscountSetupServiceInterface::class);
        $tripRequestService = app(TripRequestServiceInterface::class);

        $tripAmountWithoutVatTaxAndTips = $trip->paid_fare - $trip->fee->tips - $trip->fee->vat_tax;
        $criteria = [
            'user_id' => $trip->customer_id,
            'level_id' => $trip->customer->user_level_id,
            'zone_id' => $trip->zone_id,
            'is_active' => 1,
            'date' => date('Y-m-d'),
            'fare' => $tripAmountWithoutVatTaxAndTips
        ];
        $userTripApplicableDiscounts = $discountSetupService->getUserTripApplicableDiscountList(tripType: $trip->type, vehicleCategoryId: $trip->vehicle_category_id, data: $criteria);
        $adminDiscount = null;
        if ($userTripApplicableDiscounts->isNotEmpty()) {
            $discounts = [];
            foreach ($userTripApplicableDiscounts as $userTripApplicableDiscount) {
                $userAppliedDiscountCountCriteria = [
                    'customer_id' => $user->id,
                    'discount_id' => $userTripApplicableDiscount->id,
                    'payment_status' => PAID,
                ];
                $userAppliedDiscountCount = $tripRequestService->getBy(criteria: $userAppliedDiscountCountCriteria)->count();
                if ($userTripApplicableDiscount->limit_per_user > $userAppliedDiscountCount) {
                    $discounts[] = [
                        'discount' => $userTripApplicableDiscount,
                        'discount_id' => $userTripApplicableDiscount->id,
                        'discount_amount' => $this->getDiscountAmount($userTripApplicableDiscount, $tripAmountWithoutVatTaxAndTips)
                    ];
                }
            }
            if (count($discounts) > 0) {
                $discountsCollection = collect($discounts);
                $adminDiscount = $discountsCollection->sortByDesc('discount_amount')->first();
            }
        }
        $referralDiscountAmount = 0;
        if (referralEarningSetting('referral_earning_status', CUSTOMER)?->value &&
            $user?->referralCustomerDetails && $user?->referralCustomerDetails?->is_used == 0 && count($user->customerTrips) == 1
            && ($user?->referralCustomerDetails->customer_discount_amount > 0)) {
            if ($user?->referralCustomerDetails->customer_discount_validity == 0 && $user?->referralCustomerDetails->customer_discount_validity_type == null) {
                $referralDiscountAmount = $this->getReferralCustomerDiscountAmount($user, $tripAmountWithoutVatTaxAndTips);
            }
            if ($user?->referralCustomerDetails->customer_discount_validity > 0 && $user?->referralCustomerDetails->customer_discount_validity_type != null) {
                $validityTime = Carbon::create($user->created_at);
                if ($user?->referralCustomerDetails->customer_discount_validity_type === 'hour') {
                    $validityTime = $validityTime->addHours((int)$user?->referralCustomerDetails->customer_discount_validity);
                } else {
                    $validityTime = $validityTime->addDays((int)$user?->referralCustomerDetails->customer_discount_validity);
                }
                if ($validityTime >= Carbon::now()) {
                    $referralDiscountAmount = $this->getReferralCustomerDiscountAmount($user, $tripAmountWithoutVatTaxAndTips);
                }
            }
        }
        if ($adminDiscount && $referralDiscountAmount) {
            if ($adminDiscount['discount_amount'] > $referralDiscountAmount) {
                return $adminDiscount;
            }
            return collect([
                'discount' => null,
                'discount_id' => null,
                'discount_amount' => $referralDiscountAmount
            ]);
        }
        if ($adminDiscount) {
            return $adminDiscount;
        }
        if ($referralDiscountAmount) {
            return collect([
                'discount' => null,
                'discount_id' => null,
                'discount_amount' => $referralDiscountAmount
            ]);
        }
        return collect([
            'discount' => null,
            'discount_id' => null,
            'discount_amount' => 0
        ]);
    }

    private function getDiscountAmount($discount, $tripAmountWithoutVatTaxAndTips)
    {
        if ($discount->discount_amount_type == PERCENTAGE) {
            $discountAmount = ($discount->discount_amount * $tripAmountWithoutVatTaxAndTips) / 100;
            //if calculated discount exceeds coupon max discount amount
            if ($discountAmount > $discount->max_discount_amount) {
                return round($discount->max_discount_amount, 2);
            }
            return round($discountAmount, 2);
        }
        $amount = $tripAmountWithoutVatTaxAndTips;
        if ($discount->discount_amount > $amount) {
            return round(min($discount->discount_amount, $amount), 2);
        }
        return round($discount->discount_amount);
    }

    private function getReferralCustomerDiscountAmount($user, $tripAmountWithoutVatTaxAndTips)
    {
        if ($user?->referralCustomerDetails?->customer_discount_amount_type == PERCENTAGE) {
            $discountAmount = ($user?->referralCustomerDetails?->customer_discount_amount * $tripAmountWithoutVatTaxAndTips) / 100;
            return round($discountAmount, 2);
        }
        $amount = $tripAmountWithoutVatTaxAndTips;
        if ($user?->referralCustomerDetails?->customer_discount_amount > $amount) {
            return round(min($user?->referralCustomerDetails?->customer_discount_amount, $amount), 2);
        }
        return round((double)$user?->referralCustomerDetails?->customer_discount_amount);
    }

    public function updateDiscountCount($discountId, $amount)
    {
        $discount = DiscountSetup::find($discountId);
        $discount->total_amount += $amount;
        $discount->increment('total_used');
        $discount->save();

    }
}
