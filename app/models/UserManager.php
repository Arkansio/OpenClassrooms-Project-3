<?php

class UserManager
{
    private $bdd;
    function initConnection() {
        if (!$this->bdd)
            $this->bdd = new PDO('mysql:host=localhost;dbname=b_alaska;charset=utf8', 'root', '');
    }
    function isUserValid($username, $password)
    {
        $this->initConnection();
        $req = $this->bdd->prepare('SELECT id FROM users WHERE username = ? AND password = ?');
        $req->execute(array($username, $password));
        return $req->fetch();
    }
}

?>