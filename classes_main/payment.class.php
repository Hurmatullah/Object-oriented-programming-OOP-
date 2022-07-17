<?php

interface PaymentMethod
{
    public function pay();
}

interface LoginMethod
{
    public function LoginFirst();
}

class Visa implements PaymentMethod
{
    public function pay()
    {
    }
    public function paymentProcess()
    {
        $this->pay();
    }
}

class BuyProduct
{
    public function payNow(PaymentMethod $paymentType)
    {
        $paymentType->paymentProcess();
    }
}
