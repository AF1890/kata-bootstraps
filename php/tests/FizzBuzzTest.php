<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use swkberlin\FizzBuzz;
use swkberlin\Kata;

require __DIR__ . '/../vendor/autoload.php';

class FizzBuzzTest extends TestCase
{
    public function testDummy()
    {
        $kata = new Kata();
        $this->assertTrue(true);
    }

    public function testNotFailing()
    {
        $this->assertTrue(true);
    }
}