<?php

abstract class UserGuard {
    
    public static function isLoggedIn() {
        return Session::exists('user_guard');
    }
    
    public static function login($data) {
        Session::set('user_guard', $data);
    }
    
    public static function logout() {
        Session::destroy('user_guard');
    }

    public static function getData() {
        if (self::isLoggedIn()) {
            return Session::get('user_guard');
        }
    }
    
    public static function getUserLogin() {
        $data = self::getData();
        return $data['login'];
    }
}