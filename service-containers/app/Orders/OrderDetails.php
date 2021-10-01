<?php

namespace App\Orders;

use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    private $paymentGateway;

    public function __construct(PaymentGatewayContract $paymentGateway){
        $this->paymentGateway = $paymentGateway;
    }

    public function all(){

        $this->paymentGateway->setDiscount('500');

        return([
           'name' => 'Iqbal',
           'address' => '123 street no.2'
        ]);
    }

}
