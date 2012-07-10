<?php

class LoginModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function login($login, $pass) {
        $db = $this->db->prepare("SELECT * FROM users
            WHERE login = :login AND password = :password");
        
        $db->execute(Array(
            'login' => $login,
            'password' => md5($pass),
        ));
        
        return $db->fetchAll();
    }
}