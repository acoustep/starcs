<?php

define('APP_FOLDER', 'application/');

/* define environment */
$_ENV['SLIM_MODE'] = 'development';

/* Configuration */
require_once APP_FOLDER.'config/'.$_ENV['SLIM_MODE'].'.php';