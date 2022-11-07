<?php

namespace App\Services;

use App\Services\PaymentService;

class PaypalGateway implements PaymentService
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