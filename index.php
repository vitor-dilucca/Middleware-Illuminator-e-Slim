<?php
require './vendor/autoload.php';
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
 
 
$app = new \Slim\App;
$app->get('/postagens/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
 
    return $response;
});
 
$app->run();
