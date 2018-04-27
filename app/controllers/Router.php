<?php

class Router {

    private $url; // Contiendra l'URL sur laquelle on souhaite se rendre
    private $routes = []; // Contiendra la liste des routes

    public function __construct($url){
        $this->url = $url;
    }

    public function route($path, $callable){
        $route = new Route($path, $callable);
        $this->routes[] = $route;
        return $route; // On retourne la route pour "enchainer" les méthodes
    }

    public function run(){
        foreach($this->routes as $route){
            if($route->match($this->url)){
                return $route->call();
            }
        }
        throw new RouterException('No matching routes');
    }

}