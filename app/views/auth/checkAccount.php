<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg w-50">
            <div class="card-header bg-primary text-white text-center">
                <h2>Semak Permohonan</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/getAccInfo">
                    <div class="mb-3">
                        <label for="id_number" class="form-label">No. KP</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="id_number" 
                            name="id_number" 
                            placeholder="Sila masukkan No. KP anda" 
                            required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-secondary w-50">Semak Akaun</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <small class="text-muted">Sila pastikan nombor KP anda ialah betul.</small>
            </div>
        </div>
    </div>
</body>
</html>

