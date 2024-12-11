<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <?php if (isset($_SESSION['user_id'])): ?>
            <p class="text-middle">Welcome, <?= htmlspecialchars($_SESSION['user_name']); ?>! 
                <div class="text-end">
                    <a href="/logout" class="btn btn-danger">Logout</a>
                </div>
            </p>
        <?php else: ?>
            <p class="text-end"><a href="/login" class="btn btn-link">Login</a> <a href="/register" class="btn btn-link">Register</a></p>
        <?php endif; ?>
        
        <h1 class="mb-4">Users</h1>
        <a href="/create" class="btn btn-success mb-3">Add User</a>
        <table class="table table-bordered bg-white">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td>
                        <a href="/edit/<?= $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/delete/<?= $user['id']; ?>" method="POST" class="d-inline">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>