<?php

class ErrorController extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->msg = 'This page doesn\'t exist.';
        $this->view->render('error/index');
    }

}