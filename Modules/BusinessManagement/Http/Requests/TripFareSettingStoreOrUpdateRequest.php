<?php

namespace Modules\BusinessManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TripFareSettingStoreOrUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'required',
            'idle_fee' => [Rule::requiredIf(function () {
                return $this->input('type') === TRIP_FARE_SETTINGS;
            }), 'gt:0'],
            'delay_fee' => [Rule::requiredIf(function () {
                return $this->input('type') === TRIP_FARE_SETTINGS;
            }), 'gt:0'],
            'add_intermediate_points' => [Rule::requiredIf(function () {
                return $this->input('type') === TRIP_SETTINGS;
            }), 'boolean'],
            'trip_request_active_time' => [Rule::requiredIf(function () {
                return $this->input('type') === TRIP_SETTINGS;
            }), 'gt:0', 'lte:30'],
            'trip_push_notification' => 'sometimes',
            'bidding_push_notification' => 'sometimes',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }
}
