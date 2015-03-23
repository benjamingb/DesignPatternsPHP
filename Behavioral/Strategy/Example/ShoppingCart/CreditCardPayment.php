<?php

namespace Behavioral\Strategy\Example\ShoppingCart;

use Behavioral\Strategy\Example\ShoppingCart\PaymentInterface;

class CreditCardPayment implements PaymentInterface
{

    private $name;
    private $cardNumber;
    private $cvv;
    private $dateOfExpiry;

    public function __construct($name, $cardNumber, $cvv, $dateOfExpiry)
    {
        $this->name         = $name;
        $this->cardNumber   = $cardNumber;
        $this->cvv          = $cvv;
        $this->dateOfExpiry = $dateOfExpiry;
    }

    public function pay($amount)
    {
        echo $amount . " paid with credit/debit card";
    }

}
