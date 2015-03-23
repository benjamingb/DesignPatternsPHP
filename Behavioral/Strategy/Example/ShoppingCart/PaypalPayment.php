<?php

namespace Behavioral\Strategy\Example\ShoppingCart;

use Behavioral\Strategy\Example\ShoppingCart\PaymentInterface;

class PaypalPayment implements PaymentInterface
{

    private $emailId;
    private $password;

    public function __construct($email, $password)
    {
        $this->emailId  = $email;
        $this->password = $password;
    }

    public function pay($amount)
    {
        echo $amount . " paid using Paypal";
    }

}
