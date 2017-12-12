<?php

namespace UniSharp\PHPUnit;

use PHPUnit\Framework\TestSuite;

class ResultPrinter extends \PHPUnit\TextUI\ResultPrinter
{
    protected $printed = false;

    public function startTestSuite(TestSuite $suite)
    {
        parent::startTestSuite($suite);

        if (!$this->printed) {
            echo file_get_contents(__DIR__ . '/stubs/seafood.txt', true) . PHP_EOL;

            $this->printed = true;
        }
    }
}
