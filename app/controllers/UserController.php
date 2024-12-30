<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class UserController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
         // Fetch all users from the database
         $users = $this->user->all();

         // Pass the data to the 'users/index' view
         $this->view('users/index', compact('users'));
    }

    public function buttonpage()
    {
        $this->view('auth/buttonpage');
    }

    public function homepage()
    {
        $this->view('auth/homepage');
    }

    // public function store()
    // {
    //     $this->user->create($_POST);
    //     header('Location: /');
    // }

    // public function edit($id)
    // {
    //     // Fetch the user data using the ID
    //     $user = $this->user->find($id);

    //     // Pass the user data to the 'users/edit' view
    //     $this->view('users/edit', compact('user'));
    // }
    //public function store()
    //{
       // $this->user->create($_POST);
       // header('Location: /');
    //}

    //public function edit($id)
    //{
        // Fetch the user data using the ID
       // $user = $this->user->find($id);

        // Pass the user data to the 'users/edit' view
        //$this->view('users/edit', compact('user'));
   // }

    public function register()
    {
        $this->view('auth/register');
    }

    public function loginMember()
    {
        $this->view('auth/login_ahli');
    }

    public function loginStaff()
    {
        $this->view('auth/login_staff');
    }

    public function loginALK()
    {
        $this->view('auth/login_alk');
    }

    public function authenticateMember()
    {
        $member_id = $_POST['member_id'];
        $password = $_POST['password'];
    
        $user = $this->user->findByMemberID($member_id);
    
        if ($user && $password === $user['password']) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            header('Location: /homepageMember');
        } else {
            echo "<h3 style='color: red;'>Invalid email or password. Please try again.</h3>";
            echo "<a href='/login' style='color: blue; text-decoration: underline;'>Back to Login</a>";
        }
    }

    public function authenticateStaff()
    {
        $staff_ID = $_POST['staff_ID'];
        $password = $_POST['password'];
    
        $user = $this->user->findByStaffID($staff_ID);
    
        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header('Location: /');
        } else {
            echo "<h3 style='color: red;'>Invalid email or password. Please try again.</h3>";
            echo "<a href='/login' style='color: blue; text-decoration: underline;'>Back to Login</a>";
        }
    }

    public function authenticateALK()
    {
        $alk_ID = $_POST['alk_ID'];
        $password = $_POST['password'];
    
        $user = $this->user->findByALKID($alk_ID);
    
        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header('Location: /');
        } else {
            echo "<h3 style='color: red;'>Invalid email or password. Please try again.</h3>";
            echo "<a href='/login' style='color: blue; text-decoration: underline;'>Back to Login</a>";
        }
    }

    public function create()
    {
        $this->view('users/member_form');
    }

    public function store() {
        $stmt = $this->user->create($_POST);
        $applicantId = $this->user->getLastInsertedId(); // Retrieve the last inserted ID
        header("Location: /createFamilyDetails?applicant_id=$applicantId");
        exit;
    }

    //utk form family detail
    public function createFamilyDetails()
    {
        $applicantId = $_GET['applicant_id'] ?? null;
        if (!$applicantId) {
            die('Applicant ID is required');
        }

        $familyDetails = $this->user->getFamilyDetails($applicantId);
        $this->view('users/family_details', ['applicant_id' => $applicantId, 'familyDetails' => $familyDetails]);
    }

    
    public function storeFamilyDetails()
    {
        if (empty($_POST['applicant_id'])) {
            die('Applicant ID is required');
        }
    
        $this->user->createFamilyDetails($_POST);
    
        // Redirect to show the family details for the specific applicant_id
        $applicantId = $_POST['applicant_id'];
        header("Location: /createFamilyDetails?applicant_id=$applicantId");
        exit;
    }

    //utk yuran
    public function createYuran()
    {
        $applicantId = $_GET['applicant_id'] ?? null;
        if (!$applicantId) {
            die('Applicant ID is required');
        }

        $yuran = $this->user->getYuran($applicantId);
        $this->view('users/yuran', ['applicant_id' => $applicantId, 'yuran' => $yuran]);
    }

    public function storeYuran()
    {
        if (empty($_POST['applicant_id'])) {
            die('Applicant ID is required');
        }
    
        $this->user->createYuran($_POST);
    }


    public function edit($id)
    {
        // Fetch the user data using the ID
        $user = $this->user->find($id);

        // Pass the user data to the 'users/edit' view
        $this->view('users/edit', compact('user'));
    }

    public function update($id)
    {
        $this->user->update($id, $_POST);
        header('Location: /');
    }

    public function delete($id)
    {
        $this->user->delete($id);
        header('Location: /');
    }
    
    public function homepageMember()
    {
        $this->view('menu/homepage_ahli');
    }

    public function viewInvoice()
    {
        $this->view('menu/invoice');
    }

    public function viewSaving()
    {
        $this->view('menu/saving');
    }

    public function loanInfo()
    {
        $this->view('menu/loan_info');
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /homepage');
    }
    
}


