<?php

require_once 'modules/default/controllers/error.php';

class Bootstrap {

    function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : DEFAULT_MODULE;
        $url = explode('/', trim($url, '/'));

        // Module
        $moduleName = $url[0];
        $modulePath = 'modules/' . $moduleName;
        array_shift($url);
        
        if (!file_exists($modulePath)) {
            return new ErrorController();
        }
        
        // Controller
        if (empty($url)) $url[] = DEFAULT_CONTROLLER;
        
        $controllerName = $url[0];
        array_shift($url);
        
        $controllerClass = $controllerName . 'Controller';
        $controllerFile = $modulePath . '/controllers/' . $controllerName . '.php';

        if (!file_exists($controllerFile)) {
            
            return new ErrorController();
        }
        
        // Action
        if (empty($url)) $url[] = DEFAULT_ACTION;
        
        $action = $url[0];
        array_shift($url);
        
        // Call
        require_once $controllerFile;
        $controller = new $controllerClass;
        
        $controller->setModule($moduleName);
        $controller->setController($controllerName);
        $controller->setAction($action);

        if (method_exists($controller, $action)) {
            $controller->{$action}($url);
        } else {
            return new ErrorController();
        }
    }

}