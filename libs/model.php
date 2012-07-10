<?php

class Model {

    private $db;
    
    function __construct() {
        $this->db = new Database();
    }

}