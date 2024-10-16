<?php
require 'core/Db.php'
require 'core/RequestPage.php';
require 'controllers/RoutesController.php';

//Defined routes
$routes = require 'routes.php';


$redirect = RequestPage::connect($_SERVER, $routes);

$page = new $redirect[0];
$method =  $redirect[1];
$page->$method();
