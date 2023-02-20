<?php

namespace App\Patterns\Strategy;

class OperationAdd implements Strategy
{
    public function doOperation(int $num1, int $num2): int
    {
        return $num1 + $num2;
    }
}
