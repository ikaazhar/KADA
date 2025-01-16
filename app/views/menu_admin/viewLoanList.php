<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <title>Senarai Pemohon Pinjaman</title>

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

        
        <!-- Main Content -->
        <div class="container d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 70vh;">
            <div class="bg-white p-5 rounded shadow">
                <h1 class="text-center mb-4">Senarai Pemohon Pinjaman Yang Perlu Disemak</h1>
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID Pinjaman</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($users)): ?>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $user['LoanID'] ?></td>
                                    <td>
                                        <form action="/updateLoanStatus" method="post" class="d-inline">
                                            <input type="hidden" name="loan_id" value="<?= $user['LoanID'] ?>">
                                            <select name="new_status" class="form-select d-inline w-auto">
                                                <option value="Pending" <?= $user['approval'] === 'Pending' ? 'selected' : '' ?>>Belum selesai</option>
                                                <option value="Reviewed">Telah Disemak</option>
                                                <option value="Disapproved">Tidak Lulus</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary btn-sm">Kemaskini </button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="/viewLoanApplication?loan_id=<?= $user['LoanID'] ?>" class="btn btn-outline-info">Dokumen Permohonan Pinjaman</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" class="text-center">Tiada Permohonan Pinjaman Untuk Disemak</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
