<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Bootstrap Icons -->
</head>
<body style="padding-top: 70px;">

    <!-- Background -->
    <div class="position-fixed top-0 start-0 w-100 h-100" style="z-index: -1;">
        <div class="bg-light" style="opacity: 0.8;">
            <img src="/assets_img/bgimageauth.jpg" alt="Background" class="img-fluid w-100 h-100" style="object-fit: cover;">
        </div>
    </div>

    <!-- Centered Card Container -->
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center p-4 shadow-lg" style="max-width: 700px; width: 100%; border-radius: 15px; background: rgba(255, 255, 255, 0.9);">
            <!-- Logos Container -->
            <div class="d-flex justify-content-center align-items-center mb-3 gap-3">
                <img src="/assets_img/LOGO_KOPERASI_KADA-removebg-preview.png" alt="Koperasi KADA Logo" class="img-fluid" style="height: 120px; object-fit: contain;">
            </div>

            <!-- Koperasi KADA Name -->
            <h1 class="text-primary mb-3">KOPERASI KADA</h1>
            
            <!-- Subtitle -->
            <p class="text-muted mb-4">Sila Pilih Jawatan Anda:</p>
            
            <!-- Buttons -->
            <div class="d-flex flex-column align-items-center w-100">
                <a href="/loginMember" class="btn btn-primary btn-lg w-75 mb-2">Ahli Koperasi</a>
                <a href="/loginStaff" class="btn btn-success btn-lg w-75 mb-2">Admin Koperasi</a>
                <a href="/loginALK" class="btn btn-primary btn-lg w-75 mb-2">Ahli Lembaga Koperasi</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
