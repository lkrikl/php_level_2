<?php
include_once "../services/Autoloader.php";
spl_autoload_register([new Autoloader(),'loadClass']);

header("Content-type: text/html;charset=utf-8");
/*
echo '<pre>';
$product = new app\models\Product();
var_dump($product->getById(1));
$orders = new app\models\Orders();
var_dump($orders->getAll());
echo '</pre>';
*/
$controllerName = $_REQUEST['c'];
$actionName = $_REQUEST['a'];
$controllerName =  sprintf('app\controllers\%sController',ucfirst($controllerName));

$controller = new $controllerName();
$controller->run($actionName);