<?php
require('../../config.php');
require(APP_ROOT . 'app/controllers/front.php');

$front = new front;
$front->postComment($_GET, $_POST);
?>