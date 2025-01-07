<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login STAFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-warning">
            <div class="container-xxl">
                <a href="/homepage" class="navbar-brand">
                    <span class="fw-bold text-dark">
                        Koperasi Kakitangan KADA         
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="register.php"> Daftar Sekarang&nbsp;&nbsp;&nbsp;&nbsp; </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    <div class="container py-5">
        <h1 class="mb-4">Login STAFF</h1>
        <form action="/authenticateStaff" method="POST" class="border p-4 bg-white shadow-sm rounded">
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="staff_number" class="form-label">Nombor STAFF:</label>
                <input type="text" name="admin_id" id="admin_id" class="form-control" required>
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
