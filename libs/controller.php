<?php

class Controller {

    protected $module;
    protected $controller;
    protected $action;
    
    function __construct() {
        $this->view = new View($this);
    }

    public function loadModel($name, $module = null) {
        
        if (is_null($module)) $module = $this->getModule();
        $file = 'modules/' . $module . '/models/' . $name . '.php';
        
        if (file_exists($file)) {
            require_once $file;
        } else {
            throw new Exception(sprintf('File "%s" not found', $file));
        }
    }
    
    public function setModule($m) {
        $this->module = $m;
    }
    
    public function getModule() {
        return $this->module;
    }
    
    public function setController($c) {
        $this->controller = $c;
    }
    
    public function getController() {
        return $this->controller;
    }
    
    public function setAction($a) {
        $this->action = $a;
    }
    
    public function getAction() {
        return $this->action;
    }
}