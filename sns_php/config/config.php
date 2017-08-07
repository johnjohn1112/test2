<?php

ini_set('display_erros', 1);

define('DSN', 'mysql:host=localhost;dbname=sns_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', '');
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

require(__DIR__ . '/../lib/functions.php');
require(__DIR__ . '/autoload.php');

session_start();
