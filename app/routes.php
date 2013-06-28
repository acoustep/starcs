<?php


/* Home page */
$app->get('/', function () use ($app, $data) { 
	
	$data['seo_title'] = 'Home'; /* page specific title for the head tags */
	$data['seo_keywords'] = 'Homepage'; /* page specific keywords for the head tags */
	$data['seo_description'] = 'Description of homepage'; /* page specific description for the head tags */
  
  $app->render('default.twig.html', $data); 

})->name('home'); 

/* 404 not found */
$app->notFound(function () use ($app, $data) {

	$data['seo_title'] = 'Page Not Found'; /* page specific title for the head tags */
	$data['seo_keywords'] = 'Page Not Found'; /* page specific keywords for the head tags */
	$data['seo_description'] = 'Page could not be found.'; /* page specific description for the head tags */
  
  $app->render('404.twig.html', $data);

});

/* Code error - production only */
$app->error(function (\Exception $e) use ($app, $data) {

	$data['seo_title'] = 'Error'; /* page specific title for the head tags */
	$data['seo_keywords'] = 'Error'; /* page specific keywords for the head tags */
	$data['seo_description'] = 'An internal server error occured'; /* page specific description for the head tags */

  $app->render('error.twig.html', $data);

});
