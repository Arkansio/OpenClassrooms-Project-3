<?php
require(APP_ROOT . 'app/models/PostManager.php');

class Backend
{
    private $postManager;
    function __construct() {
        session_start();
        $this->postManager = new PostManager();
    }
    function login($GET, $POST)
    {
        if(isset($POST['password']))
            $this->testLogin($POST['password']);
        else
            $this->showLogin();
    }

    private function showLogin() {
        require(APP_ROOT . 'app/views/login.php');
    }

    private function testLogin($password) {
        if($password === 'mdp') {
            $_SESSION['isLogged'] = 1;
            header('Location: /projet3/');
        } else {
            $this->showLogin();
        }
    }
}

?>