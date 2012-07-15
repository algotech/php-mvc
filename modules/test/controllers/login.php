<?php

class LoginController extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->loadModel('login');
        $login = new LoginModel();
        
        $this->view->login = '';
        
        if (isset($_POST['login'], $_POST['password'])) {
            $user = $login->getUserByLogin($_POST['login'], $_POST['password']);
            
            if (empty($user)) {
                $this->view->error = 'Login or Password wrong';
                $this->view->login = $_POST['login'];
            } else {
                UserGuard::login($user);
                header('Location: /');
                exit;
            }
        }
        
        $this->view->render('login/index');
    }
}