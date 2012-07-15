<?php

class HomeController extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index($args) {
        $this->view->msg = 'We are inside home/index';
        $this->view->render('home/index');
    }
}