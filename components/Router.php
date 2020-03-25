<?php
class Router{
    public $routes;

    public function __construct()
    {
        $this->routes = include (ROOT.'/config/routes.php');
        include ROOT.'/components/Autoload.php';
        $autoload = new Autoload();
        $autoload ->loadFiles();
    }


    public function run(){
        $params = $this->currentController();
        $new_params =  explode('/',$params);
        if (isset($new_params[0],$new_params[1])){
            $controller = ucfirst($new_params[0]).'Controller';
            $action = 'action'.ucfirst($new_params[1]);
            $class = new $controller;
            $class->$action();
        }
    }

    public function uri(){
        return strtok($_SERVER['REQUEST_URI'],'?');
    }

    public function currentController(){
        if(isset($this->routes[$this->uri()])){
            return $this->routes[$this->uri()];
        }
    }

}
?>