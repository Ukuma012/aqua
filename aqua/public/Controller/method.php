<?php
echo "Hello from test" . "\n";
$uri = $_SERVER["REQUEST_URI"]; //string
$uri = explode("/", $uri);
echo gettype($uri);
var_dump($uri);