<?php
// load filp/whoops
dd('s');
require_once(dirname(__FILE__) . "/vendor/autoload.php");

//use Dotenv\Dotenv;
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();
//$dotenv = Dotenv::createImmutable(__DIR__);
//$dotenv->load();

// routes
$route_views = $_SERVER['DOCUMENT_ROOT'].'/../views/';
