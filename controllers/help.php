<?php

class HelpController {

    function __construct() {
        echo 'Help controller<br />';
    }
    
    public function index($args = false) {
        echo 'We are inside other<br />';
    }
    
    public function other($args = false) {
        echo 'We are inside other<br />';
    }

}