<?php

abstract class Session {

    public static function init() {
        session_start();
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }
    
    public static function exists($key) {
        return isset($_SESSION[$key]);
    }
    
    public static function get($key) {
        if (self::exists($key)) {
            return $_SESSION[$key];
        }
    }
    
    public static function destroy($key) {
        if (self::exists($key)) {
            unset($_SESSION[$key]);
        }
    }
}