<?php
require('config.php');
require(APP_ROOT . 'app/controllers/RouterInit.php');

$routerInit = new RouterInit();
$routerInit->init();
?>