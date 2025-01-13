<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100" style="background: url('bgimage_buttonpage.jpg') no-repeat center center fixed; background-size: cover;">
    <div class="card text-center p-4 shadow-lg" style="max-width: 700px; width: 100%; border-radius: 15px; background: rgba(255, 255, 255, 0.9);">
       <!-- Logos Container -->
     <div class="d-flex justify-content-center align-items-center mb-3 gap-3">
          <img src="LOGO_KOPERASI_KADA-removebg-preview.png" alt="Koperasi KADA Logo" class="img-fluid" style="height: 120px; object-fit: contain;">
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
