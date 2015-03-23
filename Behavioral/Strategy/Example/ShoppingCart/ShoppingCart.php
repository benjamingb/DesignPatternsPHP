<?php

namespace Behavioral\Strategy\Example\ShoppingCart;

use Behavioral\Strategy\Example\ShoppingCart\Item;
use Behavioral\Strategy\Example\ShoppingCart\PaymentInterface;

class ShoppingCart
{

    private $items = [];

    public function addItem(Item $item)
    {
        $this->items[$item->getId()] = $item;
    }

    public function removeItem($itemId)
    {
        if (isset($this->items[$itemId])) {
            unset($this->items[$itemId]);
        }
    }

    public function getItems()
    {
        return $this->items;
    }

    public function calculateTotal()
    {
        $sum = 0;
        foreach ($this->items as $items) {
            $sum += $items->getPrice();
        }
        return $sum;
    }

    public function pay(PaymentInterface $paymentMethod)
    {
        $amount = $this->calculateTotal();
        $paymentMethod->pay($amount);
    }

}

////
class cart
{

    protected $payInfo;

    public function addItem()
    {
        //add items 
    }

    public function pay($type, array $info = [])
    {

        switch ($type) {
            case 'Paypal':
                $this->payInfo = $info;
                break;
            case 'CreditCart':
                $this->payInfo = $info;
                break;
            default:
            // etc
        }

        return $this->payInfo;
    }

}
