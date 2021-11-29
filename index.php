<?php

require_once './vendor/autoload.php';

use app\config\Database;
use app\controllers\UserControllers;
use app\Router;

Database::connect();

$router = new Router();

$router->get('/api/v1/users', [UserControllers::class, 'getAllUsers']);
$router->post('/api/v1/users', [UserControllers::class, 'addUser']);
$router->get('/api/v1/users/getuser', [UserControllers::class, 'getUser']);
$router->update('/api/v1/users/updateuser', [UserControllers::class, 'updateUser']);
$router->delete('/api/v1/users/deleteuser', [UserControllers::class, 'deleteUser']);