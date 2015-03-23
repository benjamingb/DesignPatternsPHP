<?php

Namespace Behavioral\Strategy\Tests;

use Behavioral\Strategy\Difinition\Context;
use Behavioral\Strategy\Difinition\ConcreteStrategyA;
use Behavioral\Strategy\Difinition\ConcreteStrategyB;

class StrategyDifinitionTest extends \PHPUnit_Framework_TestCase
{

    public function testContextA()
    {

        $contextA = new Context(new ConcreteStrategyA());
        $contextA->contextInterface();

        $this->expectOutputString("Called ConcreteStrategyA->algorithmInterface()");
    }

    public function testContextB()
    {
        $contextB = new Context(new ConcreteStrategyB());
        $contextB->contextInterface();

        $this->expectOutputString("Called ConcreteStrategyB->algorithmInterface()");
    }

}
