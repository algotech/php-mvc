<?php

class View {

    function __construct() {
    }

    public function render($file, $params = Array()) {
        if (empty($params['header'])) require 'views/header.php';
        require 'views/' . $file . '.php';
        if (empty($params['footer'])) require 'views/footer.php';
    }
}