<?php

class LoginModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getUserByLogin($login, $pass) {
        $db = $this->db->prepare("SELECT * FROM users
            WHERE login = :login AND password = :password");
        
        $db->execute(Array(
            'login' => $login,
            'password' => md5($pass),
        ));
        
        $res = $db->fetchAll();
        if (!empty($res)) {
            return $res[0];
        }
        
        return Array();
    }
}