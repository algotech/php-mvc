<?php

class View {

    protected $controller;
    
    function __construct($controller) {
        $this->controller = $controller;
    }

    public function render($file, $params = Array()) {
        
        if (!isset($params['module'])) {
            $params['module'] = $this->controller->getModule();
        }
        
        if (empty($params['header'])) {
            $moduleHeaderFile = 'modules/' . $params['module'] . '/views/header.php';
            if (file_exists($moduleHeaderFile)) {
                require $moduleHeaderFile;
            }
        }
        
        require 'modules/' . $params['module'] . '/views/' . $file . '.php';
        
        if (empty($params['footer'])) {
            $moduleFooterFile = 'modules/' . $params['module'] . '/views/footer.php';
            if (file_exists($moduleFooterFile)) {
                require $moduleFooterFile;
            }
        }
    }
    
    public function urlTo($link, $module = null) {
        if (is_null($module)) $module = $this->controller->getModule();
        return '/' . $module . '/' . $link;
    }
}