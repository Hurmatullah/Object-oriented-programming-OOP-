<?php

interface PaymentMethod
{
    public function pay();
}



class Paypal implements PaymentMethod
{
    public function pay()
    {
    }
}

class Visa implements PaymentMethod
{
    public function pay()
    {
    }
}

class Cash implements PaymentMethod
{
    public function pay()
    {
    }
}

class BuyProduct
{
    public function pay(Cash $paymentType)
    {
    }
}


$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->paymentType;
