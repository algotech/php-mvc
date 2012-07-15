<?php

class HelpModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function getCustomMessage() {
        return 'Help / Other (Custom Message)';
    }

}