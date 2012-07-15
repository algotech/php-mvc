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
    
    public function loadPartial($view, $params = array()) {
        
        $view = array_reverse(explode('/', $view));
        $view[0] = '_' . $view[0];
        
        if(empty($view[1])) $view[1] = $this->controller->getController();
        if(empty($view[2])) $view[2] = $this->controller->getModule();
        
        $view[1] = 'views/' . $view[1];
        
        $viewFilePath = implode('/', array_reverse($view));
        
        extract($params, EXTR_SKIP);
        
        require 'modules/' . $viewFilePath . '.php';
    }
    
    public function getUrl($link, $module = null) {
        if (is_null($module)) $module = $this->controller->getModule();
        return '/' . $module . '/' . $link;
    }
}