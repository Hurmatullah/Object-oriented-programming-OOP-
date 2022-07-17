<?php


include "payment_method_interface.class.php";
include "login_interface.class.php";

class Paypal implements PaymentMethod, LoginFirst
{

    public function loginFirst()
    {

        echo "Hey this login first";
    }

    public function pay()
    {
        echo "Hey this is paypal";
    }

    public function paymentProcess()
    {
        $this->loginFirst();
        $this->pay();
    }
}
