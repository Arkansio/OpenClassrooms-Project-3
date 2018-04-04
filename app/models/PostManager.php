<?php
class PostManager
{
    private $bdd;
    function __construct() {
        $this->bdd = new PDO('mysql:host=localhost;dbname=b_alaska;charset=utf8', 'root', '');
    }
    function getPostByID($id)
    {
        $req = $this->bdd->prepare('SELECT * FROM billets WHERE id = ? LIMIT 1');
        $req->execute(array($id));
        return $req->fetch();
    }
}

?>