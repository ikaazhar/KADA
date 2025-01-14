<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Check Your Account</h1>
        <form method="POST" action="/getAccInfo" class="mt-4">
            <div class="mb-3">
                <label for="id_number" class="form-label">ID Number</label>
                <input type="text" class="form-control" id="id_number" name="id_number" placeholder="Enter your ID number" required>
            </div>
            <button type="submit" class="btn btn-primary">Check Account</button>
        </form>
    </div>
</body>
</html>
