<?php

include "payment_method_interface.class.php";

class Visa implements PaymentMethod
{
    public function pay()
    {
    }

    public function PaymentProcess()
    {
        $this->pay();
        echo "Hey this is visa";
    }
}
