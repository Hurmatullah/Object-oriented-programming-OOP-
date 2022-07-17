<?php

class Service
{

    public function payNow(PaymentMethod $paymentType)
    {
        $paymentType->paymentProcess();
    }
}
