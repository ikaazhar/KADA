<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <title>Senarai Pemohon Pinjaman</title>
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
        <div class="container mt-5">
            <h1 class="text-center mb-4">Laporan Permohonan Pinjaman</h1>
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="mb-3">Butiran Pembiayaan Anggota</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Jenis Pembiayaan: </strong> <?= $loanDetails['LoanType'] ?></li>
                        <li class="list-group-item"><strong>Jenis Pembiayaan Lain-lain: </strong> <?= $loanDetails['OtherLoanType'] !== null ? $loanDetails['OtherLoanType'] : 'Tiada' ?></li>
                        <li class="list-group-item"><strong>Amaun Dipohon: </strong> <?= $loanDetails['LoanAmount'] ?></li>
                        <li class="list-group-item"><strong>Tempoh Pembiayaan (Bulan):</strong> <?= $loanDetails['RepaymentPeriodMonths'] ?></li>
                        <li class="list-group-item"><strong>Ansuran Bulanan: RM </strong> <?= $loanDetails['MonthlyInstallment'] ?></li>
                        <li class="list-group-item">
                            <strong>Dokumen Pengesahan:</strong> 
                            <?php if ($loanDetails['UploadedFilePath']): ?>
                                <a href="<?= $loanDetails['UploadedFilePath'] ?>" class="btn btn-outline-primary btn-sm" download>Muat Turun Dokumen</a>
                            <?php else: ?>
                                <span class="text-danger">Tiada File Dimuat Naik</span>
                            <?php endif; ?>
                        </li>
                        <li class="list-group-item"><strong>Nama Bank / Cawangan: </strong> <?= $loanDetails['BankName'] ?></li>
                        <li class="list-group-item"><strong>No. Akaun Bank: </strong> <?= $loanDetails['AccountNumber'] ?></li>
                    </ul>
                </div>
            </div>

            <?php if (!empty($memberDetails)): ?>
            <div class="card shadow mt-5">
                <div class="card-body">
                    <h4 class="mb-3">Butiran Peribadi</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Nama: </strong> <?= htmlspecialchars($memberDetails['name']) ?></li>
                        <li class="list-group-item"><strong>No. Kad Pengenalan:</strong> <?= htmlspecialchars($memberDetails['id_number']) ?></li>
                        <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($memberDetails['email']) ?></li>
                        <li class="list-group-item"><strong>Taraf perkahwinan: </strong> <?= htmlspecialchars($memberDetails['marital_status']) ?></li>
                        <li class="list-group-item"><strong>Jantina: </strong> <?= htmlspecialchars($memberDetails['gender']) ?></li>
                        <li class="list-group-item"><strong>Agama: </strong> <?= htmlspecialchars($memberDetails['religion']) ?></li>
                        <li class="list-group-item"><strong>Bangsa: </strong> <?= htmlspecialchars($memberDetails['ethnicity']) ?></li>
                        <li class="list-group-item"><strong>Alamat Rumah: </strong> <?= htmlspecialchars($memberDetails['home_address']) ?></li>
                        <li class="list-group-item"><strong>Poskod: </strong> <?= htmlspecialchars($memberDetails['postcode']) ?></li>
                        <li class="list-group-item"><strong>Negeri: </strong> <?= htmlspecialchars($memberDetails['state']) ?></li>
                        <li class="list-group-item"><strong>Bandar: </strong> <?= htmlspecialchars($memberDetails['city']) ?></li>
                    </ul>

                    <h4 class="mb-3">Butiran Pejabat</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>No. Anggota:</strong> <?= htmlspecialchars($memberDetails['membership_number']) ?></li>
                        <li class="list-group-item"><strong>No. PF:</strong> <?= htmlspecialchars($memberDetails['pf_number']) ?></li>
                        <li class="list-group-item"><strong>Jawatan & Gred:</strong> <?= htmlspecialchars($memberDetails['position_grade']) ?></li>
                        <li class="list-group-item"><strong>Alamat Pejabat: </strong> <?= htmlspecialchars($memberDetails['office_address']) ?></li>
                        <li class="list-group-item"><strong>Poskod:</strong> <?= htmlspecialchars($memberDetails['office_postcode']) ?></li>
                        <li class="list-group-item"><strong>No. Tel/Fax:</strong> <?= htmlspecialchars($memberDetails['phone_office']) ?></li>
                    </ul>

                    <h4 class="mb-3">Butiran Perhubungan</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Mobile Phone:</strong> <?= htmlspecialchars($memberDetails['phone_mobile']) ?></li>
                        <li class="list-group-item"><strong>Home Phone:</strong> <?= htmlspecialchars($memberDetails['phone_home']) ?></li>
                    </ul>
                </div>
            </div>
            <?php else: ?>
            <div class="alert alert-warning text-center mt-5">
                Butiran peribadi tidak ditemui untuk pemohon ini.
            </div>
            <?php endif; ?>
        </div>

        <!-- Back button -->
            <div class="text-center mt-4">
                <a href="/listPendingForm" class="btn btn-info">
                    <i class="bi bi-arrow-left-circle"></i> Kembali Semula
                </a>
            </div>
</body>
</html>
