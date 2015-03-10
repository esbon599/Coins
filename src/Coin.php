<?php

    class Coin
    {
        function coinAmount($change)
        {
            $change_array = array();


                array_push($change_array, $change / 1);
            
            return $change_array;
        }
    }
?>
