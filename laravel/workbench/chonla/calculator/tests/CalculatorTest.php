<?php

use Chonla\Calculator\Calculator;

class CalculatorTest extends TestCase {

  function testZeroPlusZeroShouldBeZero() {
    $expected = 0;
    $result = Calculator::add(0, 0);

    $this->assertEquals($expected, $result);
  }

}