<?php

class HomeController extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index($args) {
        echo 'Index action <br />';
        print_r($args);
    }
}