<?php

    class Coin
    {
        function coinAmount($change)
        {
            $change_array = array();

            $nickles = floor($change / 5);
            array_push($change_array, $nickles);
            $change -= ($nickles * 5);

            array_push($change_array, $change / 1);



            return $change_array;
        }
    }
?>
