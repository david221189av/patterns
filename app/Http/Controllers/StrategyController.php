<?php

namespace App\Http\Controllers;

use App\Patterns\Strategy\Context;
use App\Patterns\Strategy\OperationAdd;
use App\Patterns\Strategy\OperationMultiply;
use App\Patterns\Strategy\OperationSubstract;
use Illuminate\Http\Request;

class StrategyController extends Controller
{
    public function handle(): string
    {
        $num1 = 5;
        $num2 = 10;

        echo 'num1: ' . $num1 . ' - ' . 'num2: ' . $num2;

        $context = new Context(new OperationAdd());
        echo '<br/>OperationAdd: <b>' . $context->executeStrategy($num1, $num2) . '</b><br/>';

        $context = new Context(new OperationSubstract());
        echo '<br/>OperationSubstract: <b>' . $context->executeStrategy($num1, $num2) . '</b><br/>';


        $context = new Context(new OperationMultiply());
        echo '<br/>OperationMultiply: <b>' . $context->executeStrategy($num1, $num2) . '</b><br/>';

        return 'test';
    }
}
