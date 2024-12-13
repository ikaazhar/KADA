<?php
namespace App\Core;

class Controller
{
    protected function view($view, $data = [])
    {
        extract($data);
        $file = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            die("View file not found: " . $file);
        }
    }

    protected function authenticate($role, $userId, $password)
    {
        $db = (new Database())->connect();
        $stmt = $db->prepare("SELECT * FROM users WHERE role = :role AND user_id = :userId AND password = :password");
        $stmt->execute([
            ':role' => $role,
            ':userId' => $userId,
            ':password' => $password,
        ]);
        return $stmt->fetch();
    }
}


