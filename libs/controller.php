<?php

class Controller {

    function __construct() {
        $this->view = new View();
    }

    public function loadModel($name) {
        $file = 'models/' . $name . '.php';
        if (file_exists($file)) {
            require_once $file;
        } else {
            throw new Exception(sprintf('File "%s" not found', $file));
        }
    }
}