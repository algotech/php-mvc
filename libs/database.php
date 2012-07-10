<?php

class Database extends PDO {

    function __construct() {
        parent::__construct("mysql:host=localhost;dbname=mvc", 'mvc', 'mvc');
    }

}