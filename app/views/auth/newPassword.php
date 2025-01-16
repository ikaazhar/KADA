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
                <h2>Tukar Kata Laluan</h2>
            </div>
            <form action="/changePassword" method="POST">
                <div class="card-body">
                    <div class="col-md-6">
                        <label for="name" class="form-label">No. ID</label>
                        <input type="text" class="form-control" id="member_id" name="member_id" required>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Kata Laluan Baharu</label>
                        <input type="text" class="form-control" id="new_password" name="new_password" required>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan Maklumat</button>
                    </div>
            </form>
</body>
</html>