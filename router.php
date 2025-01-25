<?php

$routes = require basePath('routes.php');

if (array_key_exists($uri, $routes)) {
    require(basePath($routes[$uri]));
} else {
    //http response will get a 200 unless you set it 
    http_response_code(404);
    require basePath($routes['404']);
}
