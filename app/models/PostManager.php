<?php
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
        return $req->fetch();
    }
    function getPosts($from, $to) {
        $this->initConnection();
        $req = $this->bdd->prepare('SELECT id, title, content, date FROM billets LIMIT ?, ?');
        $req->bindParam(1, $from, PDO::PARAM_INT);
        $req->bindParam(2, $to, PDO::PARAM_INT);
        $req->execute();
        return $req;
    }

    function countPosts() {
        $this->initConnection();
        $req = $this->bdd->prepare('SELECT COUNT(id) FROM billets');
        $req->execute();
        return $req->fetch();
    }
}

?>