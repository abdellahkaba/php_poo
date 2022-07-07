<?php

use Controllers\HomeController;
use Controllers\ProduitController;
use Exceptions\RouteNotFound;
use Router\Router;

require './../vendor/autoload.php';

define('BASE_VIEWS_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR) ;

$router = new Router() ;

$router->register('/',[HomeController::class,'index']);
$router->register('/produits',[ProduitController::class,'index']);

try{
   echo $router->resolve($_SERVER['REQUEST_URI']);

}catch(RouteNotFound $ex){
    echo $ex->getMessage();
}