<?php
require __DIR__ . '/vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

// Route แบบง่าย
$app->get('/', function ($request, $response, $args) {
     $html = file_get_contents(__DIR__ . '/views/welcome_message.php');
    $response->getBody()->write($html);
    return $response;
});



// Run app
$app->run();
