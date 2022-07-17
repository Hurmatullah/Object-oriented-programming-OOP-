<?php


include "payment_method_interface.class.php";

class Cash implements PaymentMethod
{

    public function pay()
    {
        echo "Hey this is cash";
    }

    public function paymentProcess()
    {

        $this->pay();
    }
}
