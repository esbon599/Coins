<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Coin.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->post("/change", function() use ($app) {
        $coin = new Coin();
        $coin_array = $coin->coinAmount($_POST['change']);
        return $app['twig']->render('result.twig', array('coins' => $coin_array));

    });

    return $app;









?>
