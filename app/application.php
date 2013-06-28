<?php
use Illuminate\Database\Capsule\Manager as Capsule;

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

/* Connect to Eloquent ORM */
$capsule = new Capsule;
$capsule->addConnection(array(
                            'driver' => DB_DRIVER,
                            'host' => DB_HOST,
                            'database' => DB_DATABASE,
                            'username' => DB_USERNAME,
                            'password' => DB_PASSWORD,
                            'collation' => DB_COLLATION,
                            'charset' => DB_CHARSET,
                            'prefix' => DB_PREFIX));
$capsule->bootEloquent();
$capsule->setAsGlobal();

// $connFactory = new \Illuminate\Database\Connectors\ConnectionFactory(new Illuminate\Container\Container);
// $conn = $connFactory->make(array('driver' => DB_DRIVER,
//                                  'host' => DB_HOST,
//                                  'database' => DB_DATABASE,
//                                  'username' => DB_USERNAME,
//                                  'password' => DB_PASSWORD,
//                                  'collation' => DB_COLLATION,
//                                  'charset' => DB_CHARSET,
//                                  'prefix' => DB_PREFIX));
// $resolver = new \Illuminate\Database\ConnectionResolver();
// $resolver->addConnection('default', $conn);
// $resolver->setDefaultConnection('default');
// \Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);
