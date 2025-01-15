<!DOCTYPE html>
<html lang="en">
    <head>
    <title> KADA Homepage </title>
             <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Added Bootstrap Icons -->  
</head>
<body style="padding-top: 70px;">

    <!-- Navbar -->
    <nav class="navbar navbar-light fixed-top" style="background-color: rgb(236, 215, 145); padding: 0.3rem 1rem;">
        <div class="container-xxl">
            <a class="navbar-brand" href="/homepageMember" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
                Koperasi Kakitangan KADA
            </a>
    
            <!-- Profile, Dropdown, and Logout Button Group -->
            <div class="d-flex align-items-center">
                <!-- Dropdown Menu -->
                <div class="dropdown me-3">
                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#c8781cce; border-color:#a6801767; font-size: 20px; color: black;">
                        Pilihan
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/viewLoanForm">Mohon Pinjaman</a></li>
                            <li><a class="dropdown-item" href="/loanStatus">Semak Kelulusan Pinjaman</a></li>
                            <li><a class="dropdown-item" href="/showSaving">Semak Simpanan</a></li>
                            <li><a class="dropdown-item" href="/loanBalance">Baki Pinjaman</a></li>
                            <li><a class="dropdown-item" href="/viewInvoice">Semak Penyata</a></li>
                        </ul>
                    </div>
        
                    <!-- Logout Button -->
                    <a href="/logout" class="btn btn-info btn-sm text-dark" style="background-color:#c8781cce; border-color:#a6801767; font-weight: bold;">
                        <i class="bi bi-box-arrow-right" style="font-size: 20px;"></i> DAFTAR KELUAR
                    </a>
        
                    <!-- Profile Icon -->
                    <a href="#" class="nav-link text-dark ms-2">
                        <i class="bi bi-person-circle" style="font-size: 30px;"></i>
                    </a>
                </div>
            </div>
        </nav>

        <br><br><br><br><h2 class="fw-bold" style="text-align:center;"> Semak Kelulusan Pinjaman </h2>

        <div class="container mt-5">
        <?php if (!empty($loanApplication)): ?>
            <?php foreach ($loanApplication as $index => $LoanID): ?>
                <?php $deets = isset($applicantDetails[$index]) ? $applicantDetails[$index] : null; ?>
                <?php if ($LoanID['approval'] === 'Approved' && $deets !== null): ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="fw-bold text-success text-center">Permohonan Anda Berjaya!</h4>
                                <p class="card-text"><strong>No. ID Member: </strong><?= htmlspecialchars($deets['member_id']) ?></p>
                                <p class="card-text"><strong>Nama Bank: </strong><?= htmlspecialchars($deets['BankName']) ?></p>
                                <p class="card-text"><strong>No. Akaun Bank: </strong><?= htmlspecialchars($deets['AccountNumber']) ?></p>
                                <p class="card-text"><strong>Jenis Pinjaman: </strong><?= htmlspecialchars($deets['LoanType']) ?></p>
                                <p class="card-text"><strong>Jumlah Pinjaman: </strong><?= htmlspecialchars($deets['LoanAmount']) ?></p>
                                <p class="card-text"><strong>Tempoh Pembayaran Pinjaman: </strong><?= htmlspecialchars($deets['RepaymentPeriodMonths']) ?></p>
                                <p class="card-text"><strong>Ansuran Bulanan: </strong><?= htmlspecialchars($deets['MonthlyInstallment']) ?></p>
                            </div>
                        </div>
                <?php elseif ($LoanID['approval'] === 'Pending'): ?>
                    <div class="alert alert-warning text-center">
                        <h4 class="fw-bold">Permohonan Anda Sedang Diproses</h4>
                        <p>Sila tunggu keputusan kelulusan.</p>
                    </div>
                <?php elseif ($LoanID['approval'] === 'Reviewed'): ?>
                    <div class="alert alert-info text-center">
                        <h4 class="fw-bold">Permohonan Anda Dalam Penilaian</h4>
                        <p>Pihak kami sedang menilai permohonan anda. Sila semak semula kemudian.</p>
                    </div>
                <?php elseif ($LoanID['approval'] === 'Disapproved'): ?>
                    <div class="alert alert-danger text-center">
                        <h4 class="fw-bold">Permohonan Anda Ditolak</h4>
                        <p>Sila hubungi pihak kami untuk maklumat lanjut.</p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-danger text-center">
                <h4 class="fw-bold">Tiada Rekod Ditemui</h4>
                <p>Rekod pinjaman tidak dijumpai untuk akaun anda.</p>
            </div>
        <?php endif; ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>