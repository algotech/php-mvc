<?php

class HomeController {

    function __construct() {
        echo 'Home Controller <br />';
    }

    public function index($args) {
        echo 'Index action <br />';
        print_r($args);
    }
}