<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Coin.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "hay hay hay";
    });

    return $app;









?>
