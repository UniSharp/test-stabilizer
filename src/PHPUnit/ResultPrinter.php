<?php

namespace UniSharp\PHPUnit;

use PHPUnit\Framework\Test;

class ResultPrinter extends \PHPUnit\TextUI\ResultPrinter
{
    public function startTest(Test $test)
    {
        parent::startTest($test);

        echo file_get_contents(__DIR__ . '/stubs/seafood.txt', true) . PHP_EOL;
    }
}
