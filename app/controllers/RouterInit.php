<?php
require(APP_ROOT . 'app/controllers/Route.php');
require(APP_ROOT . 'app/controllers/Router.php');
require(APP_ROOT . 'app/controllers/Front.php');
require(APP_ROOT . 'app/controllers/Backend.php');

class RouterInit {
    public function init() {
        $router = new Router($_GET['url']); 
        $router->route('/', function($GET, $POST) {
            $front = new Front();
            $front->home();
        });

        $router->route('/chapitres', function($GET, $POST) {
            $front = new Front();
            $front->chapitres($GET);
        });

        $router->route('/login', function($GET, $POST) {
            $backend = new Backend();
            $backend->login($GET, $POST);
        });

        $router->route('/admin', function($GET, $POST) {
            $backend = new Backend();
            $backend->admin($GET, $POST);
        });

        $router->route('/chapitres/chapitre', function($GET, $POST) {
            $front = new Front();
            $front->chapitre($GET);
        });

        $router->route('/chapitres/comment', function($GET, $POST) {
            $front = new Front();
            $front->postComment($_GET, $_POST);
        });

        $router->route('/chapitres/flagComment/', function($GET, $POST) {
            $front = new Front();
            $front->flagComment($_GET);
        });
        
        $router->route('/admin/createPost/', function($GET, $POST) {
            $backend = new Backend();
            $backend->createPostPage($_GET, $_POST);
        });

        $router->route('/admin/deleteComment/', function($GET, $POST) {
            $backend = new Backend();
            $backend->deleteComment($_GET);
        });

        $router->route('/admin/deletePost/', function($GET, $POST) {
            $backend = new Backend();
            $backend->deletePost($_GET, $_POST);
        });

        $router->route('/admin/editPost/', function($GET, $POST) {
            $backend = new Backend();
            $backend->editPostPage($_GET, $_POST);
        });

        $router->route('/admin/flagComments/', function($GET, $POST) {
            $backend = new Backend();
            $backend->flagComments($_GET, $_POST);
        });

        $router->route('/admin/flagComments/approve', function($GET, $POST) {
            $backend = new Backend();
            $backend->approveComment($_GET);
        });

        $router->route('/admin/listComments/', function($GET, $POST) {
            $backend = new Backend();
            $backend->listComments($_GET, $_POST);
        });
        
        $router->route('/admin/listPosts/', function($GET, $POST) {
            $backend = new Backend();
            $backend->listPosts();
        });

        $router->route('/logout', function($GET, $POST) {
            $backend = new Backend();
            $backend->logout();
        });

        $router->run();
    }
}