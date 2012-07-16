<?php

class Database extends PDO {

    function __construct() {
        parent::__construct(sprintf("%s:host=%s;dbname=%s", DB_TYPE, DB_HOST, DB_NAME), DB_USER, DB_PASS);
    }

    function exec($statement) {
        throw new Exception('Permission denied');
    }
    
    function prepare($statement, $driver_options = array()) {
        
        $stack = debug_backtrace();
        if (count($stack) < 2 || empty($stack[0]['file']) || empty($stack[1]['class'])
                || !preg_match('/models/', $stack[0]['file'])
                || !preg_match('/Model/', $stack[1]['class'])) {
            throw new Exception('Permission denied');
        }
        
        return parent::prepare($statement, $driver_options);
    }
}