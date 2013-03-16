<?php

/* home page, loop through all blogs */
$app->get('/', function () use ($app) { 
  $app->render('default.twig.html'); 
})->name('home'); 