<?php

class ErrorController extends Controller {

    function __construct($msg = null) {
        
        parent::__construct();
        
        if (is_null($msg)) $msg = 'This page does not exist!';
        
        $this->setModule('default');
        $this->setController('error');
        
        $this->view->msg = $msg;
        $this->view->render('error/index');
    }

}