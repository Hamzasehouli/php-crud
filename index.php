<?php

require_once './vendor/autoload.php';

use app\config\Database;
use app\controllers\UserControllers;
use app\controllers\ViewControllers;
use app\Router;

Database::connect();

$router = new Router();


if (str_starts_with($_SERVER['REQUEST_URI'], '/api/v1/users')) {
    $router->get('/api/v1/users', [UserControllers::class, 'getAllUsers']);
    $router->post('/api/v1/users', [UserControllers::class, 'addUser']);
    $router->get('/api/v1/users/getuser', [UserControllers::class, 'getUser']);
    $router->update('/api/v1/users/updateuser', [UserControllers::class, 'updateUser']);
    $router->delete('/api/v1/users/deleteuser', [UserControllers::class, 'deleteUser']);
    $router->run();
}



$router->get('/', [ViewControllers::class, 'overview']);
$router->get('/adduser', [ViewControllers::class, 'addUser']);
$router->post('/adduser', [ViewControllers::class, 'addUser']);
$router->get('/updateuser', [ViewControllers::class, 'updateUser']);
$router->run();