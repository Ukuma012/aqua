<?php
    // @TODO: uri perser
    // @TODO: route controller

    class Core {
    protected $Controller;
    protected $Method;
        function __construct() {
        $uri = $this->getURI();
        $this->Controller = $uri[1];

        require_once '../app/controller' . $this->Controller . '.php';
        $this->Controller = new $this->Controller;

        echo $Controller . $Method . "Hello";
        }

    public function getURI(){
        // https://localhost/Controller/Method/params

        $uri = parse_url($_SERVER["REQUEST_URI"]);
        $uri = explode("/", $uri["path"]);
        return $uri;
    }

    }
    
    