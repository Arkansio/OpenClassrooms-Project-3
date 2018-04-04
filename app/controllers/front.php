<?php
require(APP_ROOT . 'app/models/PostManager.php');

class front
{
    private $postManager;
    function __construct() {
        $this->postManager = new PostManager();
    }
    function home()
    {
        require(APP_ROOT . 'app/views/home.php');
    }
    
    function chapitres()
    {
        require(APP_ROOT . 'app/views/chapitres.php');
    }

    function chapitre($GET)
    {
        $data = $this->postManager->getPostByID($GET['id']);
        require(APP_ROOT . 'app/views/chapitre.php');
    }
}

?>