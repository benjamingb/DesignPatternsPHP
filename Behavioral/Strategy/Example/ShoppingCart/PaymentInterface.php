<?php

namespace Behavioral\Strategy\Example\ShoppingCart;

interface PaymentInterface
{
     public function pay($amount);
}
