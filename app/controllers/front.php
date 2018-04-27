<?php
include_once(APP_ROOT . 'app/models/PostManager.php');
include_once(APP_ROOT . 'app/models/Post.php');
include_once(APP_ROOT . 'app/models/CommentManager.php');
include_once(APP_ROOT . 'app/models/Comment.php');

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
            $comment = new Comment(null, $POST['postID'], $POST['name'], $POST['content'], null);
            if ($this->testComment($comment))
                $this->commentManager->addComment($comment); 
            print($this->testComment($comment));
        }
        header('Location: ' . WEB_ROOT . 'chapitres/chapitre?id=' . $POST['postID']);
    }

    public function testComment($comment) {
        $content = $comment->content;
        $name = $comment->name;
        if(!(strlen($content) > 10 && strlen($content) < 1000))
            return false;
        if(!(strlen($name) > 5 && strlen($name) < 20))
            return false;
        return true;
    }

    function flagComment($GET) {
        if(isset($GET['id'])) {
            $this->commentManager->flagComment($GET['id']);
        }
        header('Location: ' . WEB_ROOT . 'chapitres');
    }
}

?>