<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg w-50">
            <div class="card-header bg-info text-white text-center">
                <h2>Maklumat Akaun</h2>
            </div>
            <div class="card-body">
                <?php if ($accountDetails): ?>
                    <div class="mb-3">
                        <p class="fw-bold">No. ID:</p>
                        <p class="text-muted"><?= htmlspecialchars($accountDetails['member_id']); ?></p>
                    </div>
                    <div class="mb-3">
                        <p class="fw-bold">Kata Laluan:</p>
                        <p class="text-muted">1234</p>
                    </div>
                <?php elseif ($application): ?>
                    <div class="alert alert-warning text-center" role="alert">
                        <p class="text-muted"><?= htmlspecialchars($message); ?></p>
                    </div>
                <?php endif; ?>
                    <?php if ($adminID): ?>
                    <div class="mb-3">
                        <p class="fw-bold">No. ID:</p>
                        <p class="text-muted"><?= htmlspecialchars($adminID); ?></p>
                    </div>
                    <div class="mb-3">
                        <p class="fw-bold">Kata Laluan:</p>
                        <p class="text-muted">1234</p>
                    </div>
                    <?php elseif (!$application): ?>
                        <?php if ($alkID): ?>
                    <div class="mb-3">
                        <p class="fw-bold">No. ID:</p>
                        <p class="text-muted"><?= htmlspecialchars($alkID); ?></p>
                    </div>
                    <div class="mb-3">
                        <p class="fw-bold">Kata Laluan:</p>
                        <p class="text-muted">1234</p>
                    </div>
                    <?php else: ?>
                        <div class="alert alert-warning text-center" role="alert">
                        <p class="text-muted">Tiada akaun atau permohonan ditemui untuk nombor KP yang diberikan.</p>
                    </div>
                    <?php endif; ?>
                    <?php else: ?>
                        <div class="alert alert-warning text-center" role="alert">
                        <p class="text-muted">Tiada akaun atau permohonan ditemui untuk nombor KP yang diberikan.</p>
                    </div>
                    <?php endif; ?>

            </div>
            <div class="card-footer text-center">
                <a href="/homepage" class="btn btn-secondary">Kembali</a>
                <?php if ($accountDetails): ?>
                    <a href="/newPasswordMember" class="btn btn-warning">Tukar Kata Laluan</a>
                <?php endif; ?>
            </div>
        </div>
</body>
</html>