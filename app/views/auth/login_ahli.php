<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Ahli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('bgimage_buttonpage.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .navbar {
            background-color: rgba(0, 102, 204, 0.8); /* Semi-transparent blue */
        }
        .navbar-brand {
            color: white !important;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
        }
        .navbar-nav .nav-link:hover {
            color: #00cc66 !important; /* Green hover effect */
        }
        .form-container {
            margin-top: 100px;
            background-color: rgba(255, 255, 255, 0.9); /* Light background for form */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            color: #333;
        }
        .btn-primary {
            background-color: #0066cc;
            border: none;
        }
        .btn-primary:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top navbar-light">
        <div class="container-xxl">
            <a href="/homepage" class="navbar-brand">
                <span class="fw-bold">Koperasi Kakitangan KADA</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Daftar Sekarang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="form-container">
            <h1 class="text-center mb-4 text-dark">Daftar Masuk Ahli</h1>
            <form action="/authenticateMember" method="POST">
                <!-- Error Message (if any) -->
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>
                <!-- Form Fields -->
                <div class="mb-3">
                    <label for="ahli_number" class="form-label text-dark">Nombor Ahli:</label>
                    <input type="text" name="member_id" id="member_id" class="form-control" placeholder="Masukkan Nombor Ahli" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-dark">Kata Laluan:</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Kata Laluan" required>
                </div>
                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Log Masuk</button>
                </div>
            </form>
            <a href="/newPasswordMember" class="btn btn-warning">Tukar Kata Laluan</a>
        </div>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
