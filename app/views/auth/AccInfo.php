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
                <h2>Account Details</h2>
            </div>
            <div class="card-body">
                <?php if ($accountDetails): ?>
                    <div class="mb-3">
                        <p class="fw-bold">Member ID:</p>
                        <p class="text-muted"><?= htmlspecialchars($accountDetails['member_id']); ?></p>
                    </div>
                    <div class="mb-3">
                        <p class="fw-bold">Password:</p>
                        <p class="text-muted">1234</p>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger text-center" role="alert">
                        No account found for the provided ID number.
                    </div>
                <?php endif; ?>
            </div>
            <div class="card-footer text-center">
                <a href="/homepage" class="btn btn-secondary">Back</a>
            </div>
        </div>
    <div class="container mt-5">
        <h1 class="text-center">Account Details</h1>
        <?php if ($accountDetails): ?>
            <p class="mt-4">Member ID: <strong><?= htmlspecialchars($accountDetails['member_id']); ?></strong></p>
            <p>Password: <strong>1234<strong></p>
            <?php elseif ($message): ?>
            <p class="text-danger mt-4"><?= htmlspecialchars($message); ?></p>
        <?php endif; ?>
        <a href="/homepage" class="btn btn-secondary mt-3">Back</a>
    </div>
</body>
</html>