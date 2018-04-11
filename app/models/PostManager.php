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
}

?>