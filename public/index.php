<?php
require_once'./app/core/Router.php';
use App\Core\Router;

$router = new Router(); 

//Register routes
$router->add('GET', '/Students', 'StudentsController', 'index');    
$router->add('GET', '/Students/create', 'StudentsController', 'create');    
$router->add('GET', '/Students/{id}', 'StudentsController', 'show');    

$router->run();

?>