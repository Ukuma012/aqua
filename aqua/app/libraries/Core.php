<?php
    // @TODO: uri perser
    // @TODO: route controller

    class Core {
    protected $Controller;
    protected $Method;
        function __construct() {
        $this->getURI();
        }

    public function getURI(){
        // https://localhost/Controller/Method/params

        $uri = $_SERVER["REQUEST_URI"];
        $uri = explode("/", $uri);
    }

    }
    
    