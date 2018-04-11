<?php
require(APP_ROOT . 'app/models/PostManager.php');

class Front
{
    private $postManager;
    function __construct() {
        $this->postManager = new PostManager();
    }
    function home()
    {
        require(APP_ROOT . 'app/views/home.php');
    }
    
    function chapitres($GET)
    {
        $actualIndex = 0;
        if(isset($_GET['i']))
            $actualIndex = $_GET['i'] - 1;
        $totalPosts = $this->postManager->countPosts()['COUNT(id)'];
        $totalPages = ceil($totalPosts / 6);
        $data = $this->postManager->getPosts($actualIndex * 6, $actualIndex * 6 + 6);
        require(APP_ROOT . 'app/views/chapitres.php');
    }

    function chapitre($GET)
    {
        $data = $this->postManager->getPostByID($GET['id']);
        require(APP_ROOT . 'app/views/chapitre.php');
    }
}

?>