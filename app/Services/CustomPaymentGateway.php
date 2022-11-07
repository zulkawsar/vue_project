<?php

namespace App\Services;

use App\Services\PaymentService;

class CustomPaymentGateway implements PaymentService
{
    protected $screctKey;

    function __construct(string $screctKey)
    {
        $this->screctKey = $screctKey;
    }

    public function execute()
    {
        return 'paypal executed';
    }
}