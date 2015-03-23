<?php

namespace Behavioral\Strategy\Difinition;

class Context
{

    private $strategy;

    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function contextInterface()
    {
        $this->strategy->algorithmInterface();
    }

}
