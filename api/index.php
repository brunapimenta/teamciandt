<?php

use Phalcon\Mvc\Micro;
use Phalcon\Loader;

// Creates the autoloader
$loader = new Loader();

// Register some namespaces
$loader->registerNamespaces(['Api\Classes' => 'classes/']);

// Register autoloader
$loader->register();

$app = new Micro();

// Retrieves all users
$app->get('/users', [new Api\Classes\Users(), 'all']);

// Deletes a user based on email
$app->delete('/users/delete/{email}', [new Api\Classes\Users(), 'delete']);

// Adds a new user
$app->post('/users/create', [new Api\Classes\Users(), 'create']);

// Updates a user based on primary key
$app->put('/users/update/{id:[0-9]+}', [new Api\Classes\Users(), 'update']);

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, 'Not Found')->sendHeaders();
});

$app->handle();
