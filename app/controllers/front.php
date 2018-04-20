<?php
require(APP_ROOT . 'app/models/PostManager.php');
require(APP_ROOT . 'app/models/Post.php');
require(APP_ROOT . 'app/models/CommentManager.php');
require(APP_ROOT . 'app/models/Comment.php');

class Front
{
    private $postManager;
    private $commentManager;
    function __construct() {
        session_start();
        $this->postManager = new PostManager();
        $this->commentManager = new CommentManager();
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
        $posts = $this->postManager->getPosts($actualIndex * 6, 6);
        require(APP_ROOT . 'app/views/chapitres.php');
    }

    function chapitre($GET)
    {
        $post = $this->postManager->getPostByID($GET['id']);
        $comments = $this->commentManager->getCommentsByPostID($GET['id']);
        require(APP_ROOT . 'app/views/chapitre.php');
    }

    function postComment($GET, $POST) {
        if(isset($POST['name']) && isset($POST['content']) && isset($POST['postID'])) {
            print_r($POST);
            $comment = new Comment(null, $POST['postID'], $POST['name'], $POST['content'], null);
            $this->commentManager->addComment($comment);
            header('Location: ' . WEB_ROOT . 'chapitres/chapitre?id=' . $POST['postID']);
        } else {
            
        }
    }
}

?>