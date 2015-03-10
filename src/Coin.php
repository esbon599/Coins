<?php

    class Coin
    {
        function coinAmount($change)
        {
            $change_array = array(0,0,0,0);

            $quarters = floor($change/25);
            $change_array[3] = $quarters;
            $change -= ($quarters * 25);

            $dimes = floor($change/10);
            $change_array[2] = $dimes;
            $change -= ($dimes * 10);

            $nickles = floor($change / 5);
            $change_array[1] = $nickles;
            $change -= ($nickles * 5);

            $change_array[0] = $change;



            return $change_array;
        }
    }
?>
