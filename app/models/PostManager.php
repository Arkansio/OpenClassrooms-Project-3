<?php
require(APP_ROOT . 'app/models/Post.php');

class PostManager
{
    private $bdd;
    function initConnection() {
        if (!$this->bdd)
            $this->bdd = new PDO('mysql:host=localhost;dbname=b_alaska;charset=utf8', 'root', '');
    }
    function getPostByID($id)
    {
        $this->initConnection();
        $req = $this->bdd->prepare('SELECT * FROM billets WHERE id = ? LIMIT 1');
        $req->execute(array($id));
        $data = $req->fetch();
        return new Post($data['id'], $data['title'], $data['content'], $data['date']);
    }
    function getPosts($from, $to) {
        $this->initConnection();
        $req = $this->bdd->prepare('SELECT id, title, SUBSTRING(content, 1, 120), date FROM billets ORDER BY date DESC LIMIT ?, ?');
        $req->bindParam(1, $from, PDO::PARAM_INT);
        $req->bindParam(2, $to, PDO::PARAM_INT);
        $req->execute();
        return $req;
    }

    function getPostsWithoutDesc() {
        $this->initConnection();
        $req = $this->bdd->prepare('SELECT id, title, date FROM billets ORDER BY date DESC');
        $req->execute();
        return $req;
    }

    function countPosts() {
        $this->initConnection();
        $req = $this->bdd->prepare('SELECT COUNT(id) FROM billets');
        $req->execute();
        return $req->fetch();
    }

    function createPost($title, $content) {
        $this->initConnection();
        $req = $this->bdd->prepare('INSERT INTO billets(title, content) VALUES(?, ?)');
        $req->execute(array($title, $content));
        return;
    }
}

?>