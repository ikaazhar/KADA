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
$uri = explode('?', trim($_SERVER['REQUEST_URI'], '/'))[0];
$action = isset($_GET['action']) ? $_GET['action'] : 'calendar';
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === '' && $method === 'GET') {
    $controller->homepage();
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
} elseif ($uri === 'createMember' && $method === 'GET') {
    $controller->createMember();
} elseif ($uri === 'createAdmin' && $method === 'GET') {
    $controller->createAdmin();
} elseif ($uri === 'createALK' && $method === 'GET') {
    $controller->createALK();
} elseif ($uri === 'authenticateMember' && $method === 'POST') {
    $controller->authenticateMember();
} elseif ($uri === 'authenticateStaff' && $method === 'POST') {
    $controller->authenticateStaff();
} elseif ($uri === 'authenticateALK' && $method === 'POST') {
    $controller->authenticateALK();
} elseif ($uri === 'logout' && $method === 'GET') {
    $controller->logout();
} elseif ($uri === 'create' && $method === 'GET') {
    $controller->create();
} elseif ($uri === 'createMembershipForm' && $method === 'GET') {
    $controller->createMembershipForm();
} elseif ($uri === 'storeMembershipForm' && $method === 'POST') {
    $controller->storeMembershipForm(); 
} elseif ($uri === 'store' && $method === 'POST') {
    $controller->store();
} elseif ($uri === 'checkAcc' && $method === 'GET') {
    $controller->showCheckAccountForm();
} elseif ($uri === 'getAccInfo' && $method === 'POST') {
    $controller->checkAccount();
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
} elseif ($uri === 'homepageAdmin' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->homepageAdmin();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'homepageALK' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->homepageALK();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'viewInvoice' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->showInvoice();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'loanInfo' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->loanInfo();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'viewSaving' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->viewSaving();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'viewLoanForm' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->viewLoanForm();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'download_loan_template' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->downloadLoanTemplate();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'submitLoanApp' && $method === 'POST') {
    if (isAuthenticated()) {
        $controller->submitLoanApplication($_POST);
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'loanStatus' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->loanStatus();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'loanBalance' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->loanBalance();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'listPendingForm' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->listPendingApplications();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'updateLoanStatus' && $method === 'POST') {
    if (isAuthenticated()) {
        $controller->updateLoanStatus();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'viewLoanApplication' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->viewLoanApplication($_GET['loan_id']);
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'reviewMembershipForm' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->reviewMembershipForm();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'storeMembershipFormStatus' && $method === 'POST') {
    if (isAuthenticated()) {
        $controller->storeMembershipFormStatus($_POST);
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'viewMembershipForm' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->viewMembershipForm($_GET['id_number']);
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'approveMembershipForm' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->approveMembershipForm();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'updateMembershipFormStatusALK' && $method === 'POST') {
    if (isAuthenticated()) {
        $controller->updateMembershipFormStatusALK($_POST);
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'listReviewedLoan' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->listReviewedLoanApp();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'updateLoanApproval' && $method === 'POST') {
    if (isAuthenticated()) {
        $controller->LoanApproval();
    } else {
        $controller->homepage();
    }
} elseif ($uri === 'showSaving' && $method === 'GET') {
    if (isAuthenticated()) {
        $controller->showSavings();
    } else {
        $controller->homepage();
    }
} elseif ($action == 'calendar') {
     if (isAuthenticated()) {
         $controller->calendar();
     } else {
         $controller->homepage();
     }
} else {
    http_response_code(404);
    echo "Page not found.";
}
