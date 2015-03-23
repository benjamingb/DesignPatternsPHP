<?php

namespace Behavioral\Strategy\Difinition;

use Behavioral\Strategy\Difinition\StratageyInterface;

class ConcreteStrategyB implements StratageyInterface
{

    public function algorithmInterface()
    {
        echo "Called ConcreteStrategyB->algorithmInterface()";
    }

}
