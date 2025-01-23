<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Loan Applications</title>
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

<div class="container mt-5">
    <h1 style="font-family: 'Times New Roman', Times, serif; font-weight: bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(186, 240, 198); font-size: 50px" class="text-center mb-4">PENGESAHAN PERMOHONAN PINJAMAN</h1>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-striped text-center">
                    <thead style="background-color: #4CAF50; color: white;">
                        <tr>
                            <th>Loan ID</th>
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
                                        <form action="/updateLoanApproval" method="post" class="d-inline">
                                            <input type="hidden" name="loan_id" value="<?= $user['LoanID'] ?>">
                                            <select name="new_status" class="form-select d-inline w-auto">
                                                <option value="Reviewed" <?= $user['approval'] === 'Reviewed' ? 'selected' : '' ?>>Telah Disemak</option>
                                                <option value="Approved">Lulus</option>
                                                <option value="Disapproved">Ditolak</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary btn-sm">Kemaskini</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="/viewLoanApplication?loan_id=<?= $user['LoanID'] ?>" class="btn btn-outline-info">Permohonan Lengkap</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" class="text-center">Tiada permohonan pinjaman yang disahkan</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>