
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Ahli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="mb-4">Login Ahli</h1>
        <form action="/loginMember" method="POST" class="border p-4 bg-white shadow-sm rounded">
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="ahli_number" class="form-label">Nombor Ahli:</label>
                <input type="text" name="member_ID" id="member_ID" class="form-control" required>
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
