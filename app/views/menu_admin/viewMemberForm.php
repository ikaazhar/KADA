<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <title>Dokumen Permohonan Ahli</title>

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

        <div class="container mt-5">
            <h1 class="text-center mb-4">Laporan Maklumat Pemohon</h1>

            <?php if (!empty($memberDetails)): ?>
            <!-- Personal Details -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4 class="mb-3">Maklumat Peribadi</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Nama: </strong> <?= htmlspecialchars($memberDetails['name']) ?></li>
                        <li class="list-group-item"><strong>No. Kad Pengenalan: </strong> <?= htmlspecialchars($memberDetails['id_number']) ?></li>
                        <li class="list-group-item"><strong>Email: </strong> <?= htmlspecialchars($memberDetails['email']) ?></li>
                        <li class="list-group-item"><strong>Taraf Perkahwinan: </strong> <?= htmlspecialchars($memberDetails['marital_status']) ?></li>
                        <li class="list-group-item"><strong>Jantina: </strong> <?= htmlspecialchars($memberDetails['gender']) ?></li>
                        <li class="list-group-item"><strong>Umur: </strong> <?= htmlspecialchars($memberDetails['age']) ?></li>
                        <li class="list-group-item"><strong>Agama: </strong> <?= htmlspecialchars($memberDetails['religion']) ?></li>
                        <li class="list-group-item"><strong>Bangsa: </strong> <?= htmlspecialchars($memberDetails['ethnicity']) ?></li>
                        <li class="list-group-item"><strong>Alamat Rumah: </strong> <?= htmlspecialchars($memberDetails['home_address']) ?></li>
                        <li class="list-group-item"><strong>Poskod: </strong> <?= htmlspecialchars($memberDetails['postcode']) ?></li>
                        <li class="list-group-item"><strong>Negeri: </strong> <?= htmlspecialchars($memberDetails['state']) ?></li>
                        <li class="list-group-item"><strong>Bandar: </strong> <?= htmlspecialchars($memberDetails['city']) ?></li>
                    </ul>
                </div>
            </div>
            
            <!-- Office Details -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4 class="mb-3">Maklumat Pejabat</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>No. Anggota: </strong> <?= htmlspecialchars($memberDetails['membership_number']) ?></li>
                        <li class="list-group-item"><strong>No. PF: </strong> <?= htmlspecialchars($memberDetails['pf_number']) ?></li>
                        <li class="list-group-item"><strong>Jawatan & Gred: </strong> <?= htmlspecialchars($memberDetails['position_grade']) ?></li>
                        <li class="list-group-item"><strong>Alamat Pejabat: </strong> <?= htmlspecialchars($memberDetails['office_address']) ?></li>
                        <li class="list-group-item"><strong>Poskod: </strong> <?= htmlspecialchars($memberDetails['office_postcode']) ?></li>
                        <li class="list-group-item"><strong>No. Tel/Fax: </strong> <?= htmlspecialchars($memberDetails['phone_office']) ?></li>
                    </ul>
                </div>
            </div>
            
            <!-- Contact Details -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4 class="mb-3">Maklumat Perhubungan</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>No. Tel Bimbit: </strong> <?= htmlspecialchars($memberDetails['phone_mobile']) ?></li>
                        <li class="list-group-item"><strong>No. Tel Rumah: </strong> <?= htmlspecialchars($memberDetails['phone_home']) ?></li>
                    </ul>
                </div>
            </div>
            
            <!-- Family Details -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4 class="mb-3">Maklumat Keluarga</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Ahli Keluarga 1:</strong> <?= htmlspecialchars($memberDetails['famName1']) ?> (<?= htmlspecialchars($memberDetails['famRelationship1']) ?>, <?= htmlspecialchars($memberDetails['famIC1']) ?>)</li>
                        <li class="list-group-item"><strong>Ahli Keluarga 2:</strong> <?= htmlspecialchars($memberDetails['famName2']) ?> (<?= htmlspecialchars($memberDetails['famRelationship2']) ?>, <?= htmlspecialchars($memberDetails['famIC2']) ?>)</li>
                    </ul>
                </div>
            </div>
            
            <!-- Salary and Contributions -->
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="mb-3">Maklumat Kewangan</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Gaji Bulanan: </strong> <?= htmlspecialchars($memberDetails['monthly_salary']) ?></li>
                    </ul>
            
                    <br>
            
                    <h5 class="mb-3">Butiran Yuran & Sumbangan</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Perkara</th>
                                <th>RM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Yuran Masuk</td>
                                <td><?= htmlspecialchars($memberDetails['yuran_masuk_value']) ?></td>
                            </tr>
                            <tr>
                                <td>Modal Syer</td>
                                <td><?= htmlspecialchars($memberDetails['modal_syer_value']) ?></td>
                            </tr>
                            <tr>
                                <td>Modal Yuran</td>
                                <td><?= htmlspecialchars($memberDetails['modal_yuran_value']) ?></td>
                            </tr>
                            <tr>
                                <td>Wang Deposit Anggota</td>
                                <td><?= htmlspecialchars($memberDetails['wang_deposit_value']) ?></td>
                            </tr>
                            <tr>
                                <td>Sumbangan Tabung Kebajikan (Al-Abrar)</td>
                                <td><?= htmlspecialchars($memberDetails['sumbangan_kebajikan_value']) ?></td>
                            </tr>
                            <tr>
                                <td>Simpanan Tetap</td>
                                <td><?= htmlspecialchars($memberDetails['simpanan_tetap_value']) ?></td>
                            </tr>
                            <tr>
                                <td>Lain-lain</td>
                                <td><?= htmlspecialchars($memberDetails['lain_lain_value']) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php else: ?>
            <div class="alert alert-warning text-center mt-5">
                Maklumat pemohon tidak tersedia.
            </div>
            <?php endif; ?>
        </div>
            
        <!-- Back button -->
        <div class="text-center mt-4">
            <a href="/reviewMembershipForm" class="btn btn-info">
                <i class="bi bi-arrow-left-circle"></i> Kembali Semula
            </a>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

