<?php

namespace Modules\UserManagement\Service;

use App\Repository\EloquentRepositoryInterface;
use App\Service\BaseService;
use Modules\UserManagement\Repository\ReferralCustomerRepositoryInterface;
use Modules\UserManagement\Service\Interface\ReferralCustomerServiceInterface;

class ReferralCustomerService extends BaseService implements Interface\ReferralCustomerServiceInterface
{
    protected $referralCustomerRepository;

    public function __construct(ReferralCustomerRepositoryInterface $referralCustomerRepository)
    {
        parent::__construct($referralCustomerRepository);
        $this->referralCustomerRepository = $referralCustomerRepository;
    }
}
