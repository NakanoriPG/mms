<?php
ini_set('display_errors',1);
define('DSN','mysql:host=192.168.56.10;charset=utf8;dbname=pastry_mms');
define('DB_USERNAME','pastry_user');
define('DB_PASSWORD',']lrgh32w(Q8BDG]i');
define('SITE_URL_C', 'http://' . $_SERVER['HTTP_HOST'] . '/mms/public_html/customer');
define('SITE_URL_M', 'http://' . $_SERVER['HTTP_HOST'] . '/mms/public_html/management');
require_once(__DIR__ .'/../lib/Controller/functions.php');
require_once(__DIR__ . '/autoload.php');
session_start();