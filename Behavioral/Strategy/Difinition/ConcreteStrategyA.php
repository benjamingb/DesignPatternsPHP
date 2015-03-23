<?php

namespace Behavioral\Strategy\Difinition;

use Behavioral\Strategy\Difinition\StratageyInterface;

class ConcreteStrategyA implements StratageyInterface
{

    public function algorithmInterface()
    {
        echo "Called ConcreteStrategyA->algorithmInterface()";
    }

}
