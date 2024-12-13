<?php
require_once 'app/core/Autoload.php';

use App\Core\Controller;

session_start();
$controller = new Controller();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alk_number = $_POST['alk_number'];
    $password = $_POST['password'];

    // Authenticate ALK user
    $user = $controller->authenticate('alk', $alk_number, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['role'] = 'alk';
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid ALK number or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ALK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="mb-4">Login ALK</h1>
        <form method="POST" class="border p-4 bg-white shadow-sm rounded">
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="alk_number" class="form-label">Nombor ALK:</label>
                <input type="text" name="alk_number" id="alk_number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Laluan:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Log Masuk</button>
        </form>
    </div>
</body>
</html>
