<?php

require_once 'models/help.php';

class HelpController extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    public function index($args = false) {
        $this->view->msg = 'We are inside help/index';
        $this->view->render('help/index');
    }
    
    public function other($args = false) {
        $this->view->model = new HelpModel();
        $this->view->render('help/other');
    }

}