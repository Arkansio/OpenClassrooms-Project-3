<?php

class UserManager
{
    private $bdd;
    function initConnection() {
        if (!$this->bdd)
            $this->bdd = new PDO('mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME . ';charset=utf8', BDD_USER, BDD_PASSWORD);
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