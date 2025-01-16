<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <title>Senarai Permohonan Ahli</title>

        <style>
            section
            {
                padding: 60px 0;
            }
        </style>
    </head>

    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary w-100">
            <div class="container">
                <a href="/homepageAdmin" class="navbar-brand">
                    <span class="fw-bold text-white">
                        Koperasi Kakitangan KADA         
                    </span>
                </a>

                <!-- Toggle Button for Mobile Navigation -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" 
                        aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--Navigation Bar Links-->
                <div class="collapse navbar-collapse justify-content-end align-center" id = "main-nav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/logout" class="btn btn-info btn-sm text-dark">
                                <i class="bi bi-box-arrow-right" style="font-size: 19px;"></i>
                                DAFTAR KELUAR 
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark ms-2">
                                <i class="bi bi-person-circle" style="font-size: 20px;"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <div class="container my-5">
            <h1 class="text-center mb-5">Senarai Permohonan Ahli</h1>

            <!-- Responsive table -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">No. Kad Pengenalan</th>
                            <th scope="col">Dokumen Permohonan Ahli</th>
                            <th scope="col">Status Permohonan</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($viewMembershipFormList)): ?>
                            <?php foreach ($viewMembershipFormList as $form): ?>
                                <tr>
                                    <td><?= htmlspecialchars($form['name']) ?></td>
                                    <td><?= htmlspecialchars($form['id_number']) ?></td>
                                    <td>
                                        <a href="/viewMembershipForm?id_number=<?= urlencode($form['id_number']) ?>" 
                                           class="btn btn-link" 
                                           data-bs-toggle="tooltip" 
                                           data-bs-placement="top" 
                                           title="Lihat Dokumen">
                                            <i class="bi bi-file-earmark-text"></i> Dokumen Permohonan
                                        </a>
                                    </td>
                                    <td>
                                        <!-- Form for updating status -->
                                        <form action="/storeMembershipFormStatus" method="POST">
                                            <input type="hidden" name="id_number" value="<?= htmlspecialchars($form['id_number']) ?>">
                                            <select class="form-select" name="approval" required>
                                                <option value="Pending" <?= $form['approval'] === 'Pending' ? 'selected' : '' ?>>Belum Selesai </option>
                                                <option value="Reviewed" <?= $form['approval'] === 'Reviewed' ? 'selected' : '' ?>>Telah Disemak</option>
                                                <option value="Disapproved" <?= $form['approval'] === 'Disapproved' ? 'selected' : '' ?>>Tidak Lulus</option>
                                            </select>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-success w-100">
                                            <i class="bi bi-save"></i> Kemas Kini 
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-muted">Tiada permohonan ahli buat masa ini.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
    
            <!-- Back button -->
            <div class="text-center mt-4">
                <a href="/homepageAdmin" class="btn btn-info">
                    <i class="bi bi-arrow-left-circle"></i> Kembali Semula
                </a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>