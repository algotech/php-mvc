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
            $data = $login->login($_POST['login'], $_POST['password']);
            
            if (empty($data)) {
                $this->view->error = 'Login or Password wrong';
                $this->view->login = $_POST['login'];
            } else {
                $_SESSION['login'] = $data[0];
                header('Location: /');
                exit;
            }
        }
        
        $this->view->render('login/index');
    }
}