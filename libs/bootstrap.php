<?php

require_once 'controllers/error.php';

class Bootstrap {

    function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        $url = explode('/', trim($url, '/'));

        $controller = $url[0];
        $controllerClass = $controller . 'Controller';
        $controllerFile = 'controllers/' . $controller . '.php';
        array_shift($url);

        if (!file_exists($controllerFile)) {
            return new ErrorController();
        }
        
        require_once $controllerFile;
        $controller = new $controllerClass;

        if(!empty($url)) {
            $action = $url[0];
            array_shift($url);
        } else $action = 'index';

        if (method_exists($controller, $action)) {
            $controller->{$action}($url);
        } else {
            return new ErrorController();
        }
    }

}