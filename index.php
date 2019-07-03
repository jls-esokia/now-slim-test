<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->get('/about-us', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("About us test page");

    return $response;
});
$app->run();
