<?php

/* Project Title */
define('TITLE', 'Starcs');

/* App folder */
define('APP_FOLDER', 'application/');
/* define environment */
$_ENV['SLIM_MODE'] = 'development';

/* Configuration */
require_once APP_FOLDER.'config/'.$_ENV['SLIM_MODE'].'.php';

/* All variables you wish to pass to the template must go in the $data array */
$data['title'] = TITLE; /* For Branding */

$data['default_seo_title'] = ''; /* if seo_title is not set then this will show */
$data['default_seo_keywords'] = ''; /* if seo_keywords is not set then this will show */
$data['default_seo_description'] = ''; /* if seo_description is not set then this will show */
