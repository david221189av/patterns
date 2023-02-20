<?php
namespace App\Patterns\Strategy;

class Context
{
    private Strategy $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy(int $num1, int $num2): int
    {
        return $this->strategy->doOperation($num1, $num2);
    }
}
