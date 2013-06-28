<?php

/* Setup Slim with Twig */
$app = new Slim(array(
		 'mode' => $_ENV['SLIM_MODE'],
    'templates.path' => __DIR__.'/views/',
));

// Only invoked if mode is "production"
$app->configureMode('production', function () use ($app) {
    $app->config(array(
        'log.enable' => true,
        'debug' => false
    ));
});

// Only invoked if mode is "development"
$app->configureMode('development', function () use ($app) {
    $app->config(array(
        'log.enable' => false,
        'debug' => true
    ));
});

require __DIR__.'/../vendor/slim/extras/Views/TwigView.php';
    TwigView::$twigExtensions = array('Twig_Extensions_Slim',);

$app->view('TwigView');

