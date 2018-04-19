<?php
require('../../config.php');
require(APP_ROOT . 'app/controllers/backend.php');

$backend = new backend;
$backend->editPostPage($_GET, $_POST);
?>