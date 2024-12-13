<?php
session_start();
require 'database.php'; // Include your database connection

$role = $_GET['role'] ?? null;
if (!$role || !in_array($role, ['ahli', 'staff', 'alk'])) {
    header('Location: /'); // Redirect to the home page if the role is invalid
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identifier = $_POST['identifier']; // This can be nombor_ahli, nombor_staff, or nombor_alk
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE role = ? AND identifier = ? AND password = ?");
    $stmt->execute([$role, $identifier, $password]);

    if ($stmt->rowCount() > 0) {
        $_SESSION['user_id'] = $stmt->fetch()['id'];
        header("Location: /dashboard?role=$role");
        exit;
    } else {
        $error = "Invalid credentials.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login <?php echo ucfirst($role); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-5 shadow-lg">
            <h4 class="mb-4">Login <?php echo ucfirst($role); ?></h4>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            <form method="POST">
                <div class="mb-3">
                    <label for="identifier" class="form-label">
                        <?php echo "Nombor " . ucfirst($role); ?>
                    </label>
                    <input type="text" name="identifier" id="identifier" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Laluan</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Daftar Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>
