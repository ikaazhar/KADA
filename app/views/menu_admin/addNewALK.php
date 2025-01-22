<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Admin</title>
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
    
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg w-50">
            <div class="card-header bg-primary text-white text-center">
                <h2>Tambah Akaun Ahli Lembaga Koperasi</h2>
                <h2>Sila masukkan no ic admin baharu</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/createALK">
                    <div class="mb-3">
                        <label for="id_number" class="form-label">No. KP</label>
                        <label for="id_number" class="form-label">Nombor ID</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="id_number" 
                            name="id_number" 
                            placeholder="Sila masukkan No. KP anda" 
                            placeholder="Masukkan nombor ID anda" 
                            required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-secondary w-50">Tambah ALK</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <small class="text-muted">Sila pastikan nombor KP anda ialah betul.</small>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>

