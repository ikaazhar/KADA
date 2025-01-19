<!DOCTYPE html>
<html lang="en">
    <head>
    <title> KADA Homepage </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body style="padding-top: 70px;">

    <div class="position-fixed top-0 start-0 w-100 h-100" style="z-index: -1;">
        <div class="bg-light" style="opacity: 0.8;">
            <img src="/assets_img/bgimageALK.png" alt="Background" class="img-fluid w-100 h-100" style="object-fit: cover;">
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-light fixed-top" style="background-color: rgb(145, 236, 165); padding: 0.3rem 1rem;">
        <div class="container-xxl d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="/homepageALK" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
                Koperasi Kakitangan KADA
            </a>

            <div class="d-flex align-items-center">
                <!-- Dropdown Button -->
                <div class="dropdown me-2">
                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#67ffb8ce; border-color:#17a66367; font-size: 20px; color: black;">
                        Pilihan
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/listReviewedLoan">Pengesahan Permohonan Pinjaman</a></li>
                        <li><a class="dropdown-item" href="/approveMembershipForm">Pengesahan Permohonan Ahli</a></li>
                        <li><a class="dropdown-item" href="/calendar">Laporan Tahunan</a></li>
                    </ul>
                </div>

                <!-- Logout Button -->
                <a href="/logout" class="btn btn-sm text-dark" style="background-color: #67ffb8ce; border-color: #17a66367; font-weight: bold;">
                    <i class="bi bi-box-arrow-right" style="font-size: 20px;"></i> DAFTAR KELUAR
                </a>
            </div>
        </div>
    </nav>

        <div class="container my-4">
        <br><br><br><br><h1 style="font-family: 'Times New Roman', Times, serif; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(186, 240, 198); font-size: 50px" class="text-center mb-4">SENARAI PERMOHONAN AHLI</h1>
        <table class="table table-bordered table-striped text-center">
            <thead style="background-color: #4CAF50; color: white;">
                <tr>
                    <th>Nama</th>
                    <th>No. KP</th>
                    <th>Dokumen Permohonan Ahli</th>
                    <th>Status Permohonan</th>
                    <th>Simpan Maklumat</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($viewMembershipFormList)): ?>
            <?php foreach ($viewMembershipFormList as $form): ?>
                <tr>
                    <td><?= htmlspecialchars($form['name']) ?></td>
                    <td><?= htmlspecialchars($form['id_number']) ?></td>
                    <td><a href="/viewMembershipForm?id_number=<?= $form['id_number'] ?>">Dokumen_Permohonan_Ahli_<?= htmlspecialchars($form['name']) ?></a></td>
                    <td>
                    <form action="/updateMembershipFormStatusALK" method="POST">
                        <label for="approval" class="form-label"></label>
                        <input type="hidden" name="id_number" value="<?= $form['id_number'] ?>">
                        <select class="form-select" id="approval" name="approval" required>
                            <option value="Reviewed" <?= $form['approval'] === 'Reviewed' ? 'selected' : '' ?>>Disemak</option>
                            <option value="Approved" <?= $form['approval'] === 'Approved' ? 'selected' : '' ?>>Disahkan</option>
                            <option value="Disapproved" <?= $form['approval'] === 'Disapproved' ? 'selected' : '' ?>>Ditolak</option>
                        </select>
                        </td>
                        <td>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Kemaskini</button>
                            </div>
                        </td>
                    </form>
                </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        </div>
        <div class="text-center">
            <a href="/homepageAdmin" class="btn btn-info btn-lg shadow">Kembali</a>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>