<?php

    require_once "src/Coin.php";

    class CoinTest extends PHPUnit_Framework_TestCase
    {
        /*
        input: 1
        output: [1, 0, 0, 0]
        Spec: Input an amount and output that number of pennies.
        */
        function test_coinAmount_pennies()
        {
            //Arrange
            $test_CoinAmount = new Coin;
            $input = 1;

            //Act
            $result = $test_CoinAmount->coinAmount($input);

            //Assert
            $this->assertEquals([1, 0, 0, 0], $result);
        }
        /*
        input: 5
        output:[0, 1, 0, 0]
        Spec: Input an amount and output the number of nickels.
        */
        function test_coinAmount_nickels()
        {
            //Arrange
            $test_CoinAmount = new Coin;
            $input = 5;

            //Act
            $result = $test_CoinAmount->coinAmount($input);

            //Assert
            $this->assertEquals([0, 1, 0, 0], $result);
        }

        /*
        input: 6
        output: [1, 1, 0, 0]
        Spec: input an amount and output the minimum number of nickels and pennies
        */
        function test_coinAmount_nickelPenny()
        {
            //Arrange
            $test_Coin = new Coin;
            $input = 6;

            //Act
            $result = $test_Coin->coinAmount($input);

            //Assert
            $this->assertEquals([1, 1, 0, 0], $result);
        }

        /*
        input: 10
        output: [0, 0, 1, 0]
        Spec: input an amount and output the minimum number of dimes
        */
        function test_coinAmount_dime()
        {
            //Arrange
            $test_Coin = new Coin;
            $input = 10;

            //Act
            $result = $test_Coin->coinAmount($input);

            //Assert
            $this->assertEquals([0, 0, 1, 0], $result);
        }

        /*
        input: 16
        output: [1, 1, 1, 0]
        Spec: input an amount and output the minimum number of dimes, nickels and pennies
        */
        function test_coinAmount_dimeNickelPenny()
        {
            //arrange
            $test_Coin = new Coin;
            $input = 16;

            //act
            $result = $test_Coin->coinAmount($input);

            //assert
            $this->assertEquals([1, 1, 1, 0], $result);
        }

        /*
        input: 25
        output: [0, 0, 0, 1]
        Spec: input an amount and output the minimum number of quarters
        */
        function test_coinAmount_quarters()
        {
            //arrange
            $test_Coin = new Coin;
            $input = 25;

            //act
            $result = $test_Coin->coinAmount($input);

            //assert
            $this->assertEquals([0, 0, 0, 1], $result);
        }

    }
