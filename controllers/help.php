<?php

require_once 'models/help.php';

class HelpController extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    public function index($args = false) {
        echo 'We are inside other<br />';
    }
    
    public function other($args = false) {
        $model = new HelpModel();
        echo 'We are inside other<br />';
    }

}