<?php

class CommentManager
{
    private $bdd;
    function initConnection() {
        if (!$this->bdd)
            $this->bdd = new PDO('mysql:host=localhost;dbname=b_alaska;charset=utf8', 'root', '');
    }
    function getCommentsByPostID($PostID)
    {
        $this->initConnection();
        $req = $this->bdd->prepare('SELECT * FROM commentaires WHERE postID = ?');
        $req->execute(array($PostID));
        $comments = array();
        while ($element = $req->fetch()) {
            $comment = new Comment($element['id'], $element['postID'], $element['name'], $element['content'], $element['date']);
            array_push($comments, $comment);
        }
        return $comments;
    }
}

?>