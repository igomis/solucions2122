<?php
// load filp/whoops

require_once(dirname(__FILE__) . "/vendor/autoload.php");
require_once(dirname(__FILE__) . "/myHelpers/myHelpers.php");
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

// routes
$route_views = $_SERVER['DOCUMENT_ROOT'].'/../views/';
