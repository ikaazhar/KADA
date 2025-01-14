<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Account Details</h1>
        <?php if ($accountDetails): ?>
            <p class="mt-4">Member ID: <strong><?= htmlspecialchars($accountDetails['member_id']); ?></strong></p>
            <p>Password: <strong>1234<strong></p>
        <?php else: ?>
            <p class="text-danger mt-4">No account found for the provided ID number.</p>
        <?php endif; ?>
        <a href="/homepage" class="btn btn-secondary mt-3">Back</a>
    </div>
</body>
</html>