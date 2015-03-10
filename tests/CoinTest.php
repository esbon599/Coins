<?php

    require_once "src/Coin.php";

    class CoinTest extends PHPUnit_Framework_TestCase
    {
        function test_coinAmount_pennies()
        {
            //Arrange
            $test_CoinAmount = new Coin;
            $input = 1;

            //Act
            $result = $test_CoinAmount->coinAmount($input);

            //Assert
            $this->assertEquals([1], $result);
        }
    }
