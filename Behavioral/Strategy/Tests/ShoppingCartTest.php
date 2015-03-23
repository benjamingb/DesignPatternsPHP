<?php

Namespace Behavioral\Strategy\Tests;

use Behavioral\Strategy\Example\ShoppingCart\Item;
use Behavioral\Strategy\Example\ShoppingCart\ShoppingCart;
use Behavioral\Strategy\Example\ShoppingCart\CreditCardPayment;
use Behavioral\Strategy\Example\ShoppingCart\PaypalPayment;

class ShoppingCartTest extends \PHPUnit_Framework_TestCase
{

    protected $cart;

    protected function setUp()
    {
        $this->cart = new ShoppingCart();

        $item1 = new Item(1, '124', 10);
        $item2 = new Item(2, '14', 40);

        $this->cart->addItem($item1);
        $this->cart->addItem($item2);
    }

    public function testPayByCreditCard()
    {

        $this->cart->pay(new CreditCardPayment("Jhon Williams", "1234567890123456", "786", "12/15"));

        $this->expectOutputString("50 paid with credit/debit card");
    }

    public function testPayByPayPal()
    {

        $this->cart->pay(new PaypalPayment("my_email@example.com", "my_password"));

        $this->expectOutputString("50 paid using Paypal");
    }

    public function testGetItems()
    {
        $items = $this->cart->getItems();

        $this->assertTrue(is_array($items));

        if (count($items)) {
            $firstElement = reset($items);
            $this->assertTrue(is_object($firstElement));
            $this->assertEquals("Behavioral\Strategy\Example\ShoppingCart\Item", get_class($firstElement));
        } else {
            $this->assertEquals(0, count($items));
        }
    }

    public function testRemoveItem()
    {
        $this->cart->removeItem(1);
        $items = $this->cart->getItems();

        $this->assertFalse(isset($items[1]));
    }

}
