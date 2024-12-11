<?php
// Start session
session_start();

// Middleware to check if user is authenticated
function isAuthenticated()
{
    return isset($_SESSION['user_id']);
}

// Include required files
require_once '../app/core/Controller.php';
require_once '../app/core/Model.php';
require_once '../app/core/Database.php';
require_once '../app/controllers/UserController.php';
require_once '../app/models/User.php';
require_once '../app/core/Autoload.php';

use App\Controllers\UserController;

$controller = new UserController();

// Basic routing logic
$uri = trim($_SERVER['REQUEST_URI'], '/');
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === '' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->index();
    } else {
        header('Location: /login');
    }
} elseif ($uri === 'login' && $method === 'GET') {
    $controller->loginForm();
} elseif ($uri === 'login' && $method === 'POST') {
    $controller->login();
} elseif ($uri === 'register' && $method === 'GET') {
    $controller->registerForm();
} elseif ($uri === 'register' && $method === 'POST') {
    $controller->register();
} elseif ($uri === 'logout' && $method === 'GET') {
    $controller->logout();
} elseif ($uri === 'back' && $method === 'GET') {
    $controller->index();
} elseif ($uri === 'create' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->create();
    } else {
        header('Location: /login');
    }
} elseif ($uri === 'store' && $method === 'POST') {
    if (isAuthenticated()) {
        $controller->store();
    } else {
        header('Location: /login');
    }
} elseif (preg_match('/edit\/(\d+)/', $uri, $matches) && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->edit($matches[1]);
    } else {
        header('Location: /login');
    }
} elseif (preg_match('/update\/(\d+)/', $uri, $matches) && $method === 'POST') {
    if (isAuthenticated()) {
        $controller->update($matches[1]);
    } else {
        header('Location: /login');
    }
} elseif (preg_match('/delete\/(\d+)/', $uri, $matches) && $method === 'POST') {
    if (isAuthenticated()) {
        $controller->delete($matches[1]);
    } else {
        header('Location: /login');
    }
} 
else {
    http_response_code(404);
    echo "Page not found.";
}
