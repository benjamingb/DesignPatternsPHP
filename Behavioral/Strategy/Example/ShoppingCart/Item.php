<?php

namespace Behavioral\Strategy\Example\ShoppingCart;

class Item
{

    private $id;
    private $upcCode;
    private $price;

    public function __construct($id, $upc, $cost)
    {
        $this->id      = $id;
        $this->upcCode = $upc;
        $this->price   = $cost;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUpcCode()
    {
        return $this->upcCode;
    }

    public function getPrice()
    {
        return $this->price;
    }

}
