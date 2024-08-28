<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->post('/users', function (Request $request, Response $response) {
    $response->getBody()->write("POST => users => create");
    return $response;
});

$app->get('/users', function (Request $request, Response $response) {
    $response->getBody()->write("GET => users => list");
    return $response;
});

$app->get('/users/:id', function (Request $request, Response $response) {
    $response->getBody()->write("GET => users => index");
    return $response;
});

$app->patch('/users/:id', function (Request $request, Response $response) {
    $response->getBody()->write("PATCH => users => update");
    return $response;
});

$app->put('/users', function (Request $request, Response $response) {
    $response->getBody()->write("PUT => users => replace");
    return $response;
});

$app->delete('/users', function (Request $request, Response $response) {
    $response->getBody()->write("DELETEE => users => destroy");
    return $response;
});


$app->run();