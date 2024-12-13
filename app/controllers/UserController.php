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

    public function create()
    {
        $this->view('users/member_form');
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

    public function loginForm()
    {
        $this->view('auth/login');
    }
    
    public function registerForm()
    {
        $this->view('auth/register');
    }
    
    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $user = $this->user->findByEmail($email);
    
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
    
    public function register()
    {
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],  // Ensure the password is included in the POST data
        ];
    
        $this->user->make($data);  // Call the modified make method to store the account
        header('Location: /login');  // Redirect to the login page after successful registration
    }

    
    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login');
    }
    
}
