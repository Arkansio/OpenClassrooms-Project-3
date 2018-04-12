<?php
require(APP_ROOT . 'app/models/PostManager.php');

class Backend
{
    private $postManager;
    function __construct() {
        $this->postManager = new PostManager();
    }
    function login()
    {
        require(APP_ROOT . 'app/views/login.php');
    }
}

?>