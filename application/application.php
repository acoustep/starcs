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

/* Setup ActiveRecord */
ActiveRecord\Config::initialize(function($cfg) {
    $cfg->set_model_directory(__DIR__.'/models');
    $cfg->set_connections(array(
        'development' => 'mysql://'.DB_USERNAME.':'.DB_PASSWORD.'@'.DB_HOST.'/'.DB_DATABASE
    ));
});
