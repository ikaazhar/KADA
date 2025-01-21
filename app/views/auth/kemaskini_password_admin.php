<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemaskini Kata Laluan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg w-50">
        <div class="card-header bg-info text-white text-center">
            <h2>Kemaskini Kata Laluan</h2>
        </div>
        <div class="card-body text-center">
            <?php if (isset($success) && $success): ?>
                <div class="alert alert-success" role="alert">
                    Kata laluan anda telah berjaya dikemaskini!
                </div>
            <?php elseif (isset($success) && !$success): ?>
                <div class="alert alert-danger" role="alert">
                    Maaf, kemaskini kata laluan anda gagal. Sila cuba lagi.
                </div>
            <?php else: ?>
                <div class="alert alert-warning" role="alert">
                    Tiada data dihantar. Sila cuba lagi.
                </div>
            <?php endif; ?>
        </div>
        <div class="card-footer text-center">
            <a href="/homepage" class="btn btn-secondary">Kembali ke Laman Utama</a>
            <a href="/newPasswordAdmin" class="btn btn-warning">Tukar Kata Laluan Lagi</a>
        </div>
    </div>
</div>
</body>
</html>
