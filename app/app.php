<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/LetterValue.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.twig');

    });

    $app->get("/return", function() use ($app) {
        $score_My_Word = new LetterValue;
        $result = $score_My_Word->assignLetterValue($_GET['input']);

        return $app['twig']->render('return.twig', array('your_score' => $result));

    });

    return $app;

?>
