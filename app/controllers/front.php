<?php
class front
{
    function home()
    {
        require(APP_ROOT . 'app/views/home.php');
    }
    
    function chapitres()
    {
        require(APP_ROOT . 'app/views/chapitres.php');
    }

    function chapitre()
    {
        require(APP_ROOT . 'app/views/chapitre.php');
    }
}

?>