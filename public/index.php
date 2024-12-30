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
        header('Location: /homepage');
    }
} elseif ($uri === 'homepage' && $method === 'GET') {
    $controller->homepage();
} elseif ($uri === 'buttonpage' && $method === 'GET') {
    $controller->buttonpage();
} elseif ($uri === 'register' && $method === 'POST') {
    $controller->register();
} elseif ($uri === 'loginMember' && $method === 'GET') {
    $controller->loginMember();
} elseif ($uri === 'loginStaff' && $method === 'GET') {
    $controller->loginStaff();
} elseif ($uri === 'loginALK' && $method === 'GET') {
    $controller->loginALK();
} elseif ($uri === 'authenticateMember' && $method === 'POST') {
    $controller->authenticateMember();
} elseif ($uri === 'authenticateStaff' && $method === 'POST') {
    $controller->authenticateStaff();
} elseif ($uri === 'authenticateALK' && $method === 'POST') {
    $controller->authenticateALK();
} elseif ($uri === 'logout' && $method === 'GET') {
    $controller->logout();
} elseif ($uri === 'back' && $method === 'GET') {
    $controller->index();
} elseif ($uri === 'create' && $method === 'GET') {
    $controller->create();
} elseif ($uri === 'createFamilyDetails' && $method === 'GET') {
    $controller->createFamilyDetails();
} elseif ($uri === 'storeFamilyDetails' && $method === 'POST') {
    $controller->storeFamilyDetails();
}
//ni aq dh update router 
elseif ($uri === 'createYuran' && $method === 'GET') {
    $controller->createYuran();
} elseif ($uri === 'storeYuran' && $method === 'GET') {
    $controller->storeYuran();
} elseif ($uri === 'store' && $method === 'POST') {
    if (isAuthenticated()) {
        $controller->store();
    } else {
        $controller->homepage();
    }
} elseif (preg_match('/edit\/(\d+)/', $uri, $matches) && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->edit($matches[1]);
    } else {
        $controller->homepage();
    }
} elseif (preg_match('/update\/(\d+)/', $uri, $matches) && $method === 'POST') {
    if (isAuthenticated()) {
        $controller->update($matches[1]);
    } else {
        $controller->homepage();
    }
} elseif (preg_match('/delete\/(\d+)/', $uri, $matches) && $method === 'POST') {
    if (isAuthenticated()) {
        $controller->delete($matches[1]);
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'homepageMember' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->homepageMember();
    } else {
        $controller->homepage();
    }
} 
else {
    http_response_code(404);
    echo "Page not found.";
}
