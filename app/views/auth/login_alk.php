<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ALK</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="padding-top: 70px;">

    <!-- Background Image Container -->
    <div class="position-fixed top-0 start-0 w-100 h-100" style="z-index: -1;">
        <div class="bg-light" style="opacity: 0.8;">
            <img src="/assets_img/bgimageauth.jpg" alt="Background" class="img-fluid w-100 h-100" style="object-fit: cover;">
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-light fixed-top" style="background-color: rgb(145, 215, 236); padding: 0.3rem 1rem;">
        <div class="container-xxl">
            <a class="navbar-brand" href="/homepage" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
                Koperasi Kakitangan KADA
            </a>
    
            <!-- Profile, Dropdown, and Logout Button Group -->
            <div class="d-flex align-items-center">
                <a href="/createMembershipForm/" class="btn btn-info btn-sm text-dark" style="background-color:#c7dfffe8; border-color:#1750a667; font-weight: bold;">
                    <i class="bi bi-r-square-fill" style="font-size: 20px;"></i> DAFTAR SEKARANG
                </a>

            </div>
        </div>
    </nav>

<!-- Main Content -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <!-- Card Design for Login Form -->
    <div class="card shadow-lg" style="max-width: 400px; width: 100%; border-radius: 15px;">
        <div class="card-body">
            <h1 class="text-center mb-4 text-dark">Daftar Masuk ALK</h1>
            
            <!-- Form Action -->
            <form action="/authenticateALK" method="POST">
                <!-- Error Message (if any) -->
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>
                
                <!-- Form Fields -->
                <div class="mb-3">
                    <label for="alk_id" class="form-label text-dark">Nombor ALK:</label>
                    <input type="text" name="alk_id" id="alk_id" class="form-control" placeholder="Masukkan nombor ALK" required>
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
        </div>
    </div>
</div>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
