<?php

interface PaymentMethod
{
    public function pay();
}

interface LoginMethod
{
    public function LoginFirst();
}



class Paypal implements PaymentMethod, LoginMethod
{
    public function LoginFirst()
    {
    }
    public function pay()
    {
    }
    public function paymentProcess()
    {
        $this->LoginFirst();
        $this->pay();
    }
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

class Cash implements PaymentMethod
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


$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->payNow($paymentType);
