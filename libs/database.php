<?php

class Database extends PDO {

    function __construct() {
        parent::__construct(sprintf("%s:host=%s;dbname=%s", DB_TYPE, DB_HOST, DB_NAME), DB_USER, DB_PASS);
    }

}