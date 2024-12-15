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

    public function register()
    {
        $this->view('auth/register');
    }

    public function loginForMember()
    {
        $this->view('auth/login_ahli');
        $this->user->loginMember();
    }

    public function loginForStaff()
    {
        $this->view('auth/login_staff');
        $this->user->loginStaff();
    }

    public function loginForALK()
    {
        $this->view('auth/login_alk');
        $this->user->loginALK();
    }

    public function loginMember()
    {
        $member_ID = $_POST['member_ID'];
        $password = $_POST['password'];
    
        $user = $this->user->findByMemberID($member_ID);
    
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

    public function loginStaff()
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

    public function loginALK()
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
        $this->view('users/create');
    }

    public function store()
    {
        $this->user->create($_POST);
        header('Location: /');
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
    
    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login');
    }
    
}
