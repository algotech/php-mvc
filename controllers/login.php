<?php

class LoginController extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render('login/index');
    }
}