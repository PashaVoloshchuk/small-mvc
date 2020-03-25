<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('ROOT',__DIR__);
try {
    require ROOT . '/components/Router.php';
    $router = new Router();
    $router->run();
}
catch (Exception $e){
    require ROOT.'/components/Log.php';
    Log::add('Application not run - '.$e->getMessage());
}
?>