<!DOCTYPE html>
<html lang="en">
    <head>
    <title> KADA Homepage </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Added Bootstrap Icons -->
    
    <style>
        .bg-overlay {
            position: relative;
            background-image: url('bgimage2.jpeg');
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            height: 100vh;
        }

        .bg-overlay .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.2); /* Change opacity here (0.2 for 20%) */
            z-index: 1;
        }


        .bg-overlay .content {
            position: relative;
            z-index: 2;
        }
    </style>

    </head>
    <body class="bg-cover" style="background-image: url('bgimage2.jpeg'); background-position: center center; background-attachment: fixed; background-size: cover; padding-top: 70px;">


            <div class="bg-overlay">
            <div class="overlay"></div> <!-- Overlay to reduce opacity -->
            <div class="content">

        <nav class="navbar navbar-light fixed-top" style="background-color: rgb(236, 215, 145); padding: 0.3rem 1rem;">
            <div class="container-xxl">
                <a class="navbar-brand" href="/homepageAhli" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
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

        <div class="container mt-5">
        <?php if ($loanApplication): ?>
            <?php if ($loanApplication['approval'] === 'Approved'): ?>
                <?php if ($applicantDetails): ?>
                    <div class="card">
                        <div class="card-body">
                            <h2 class="fw-bold" style="text-align:center;"> SEMAK KELULUSAN PINJAMAN </h2><br>
                            <h4 class="fw-bold text-success text-center">Permohonan Anda Berjaya!</h4>
                            <p class="card-text"><strong>No. ID Member: </strong><?= htmlspecialchars($applicantDetails['member_id']) ?></p>
                            <p class="card-text"><strong>Nama Bank: </strong><?= htmlspecialchars($applicantDetails['BankName']) ?></p>
                            <p class="card-text"><strong>No. Akaun Bank: </strong><?= htmlspecialchars($applicantDetails['AccountNumber']) ?></p>
                            <p class="card-text"><strong>Jenis Pinjaman: </strong><?= htmlspecialchars($applicantDetails['LoanType']) ?></p>
                            <p class="card-text"><strong>Jumlah Pinjaman: </strong><?= htmlspecialchars($applicantDetails['LoanAmount']) ?></p>
                            <p class="card-text"><strong>Tempoh Pembayaran Pinjaman: </strong><?= htmlspecialchars($applicantDetails['RepaymentPeriodMonths']) ?></p>
                            <p class="card-text"><strong>Ansuran Bulanan: </strong><?= htmlspecialchars($applicantDetails['MonthlyInstallment']) ?></p>
                        </div>
                    </div>
                    
                <?php else: ?>
                    <div class="alert alert-danger text-center">
                        <h4 class="fw-bold">Maklumat Tidak Ditemui</h4>
                        <p>Maklumat pemohon tidak dijumpai.</p>
                    </div>
                <?php endif; ?>
            <?php elseif ($loanApplication['approval'] === 'Pending'): ?>
                <div class="alert alert-warning text-center">
                    <h4 class="fw-bold">Permohonan Anda Sedang Diproses</h4>
                    <p>Sila tunggu keputusan kelulusan.</p>
                </div>
            <?php elseif ($loanApplication['approval'] === 'Reviewed'): ?>
                <div class="alert alert-info text-center">
                    <h4 class="fw-bold">Permohonan Anda Dalam Penilaian</h4>
                    <p>Pihak kami sedang menilai permohonan anda. Sila semak semula kemudian.</p>
                </div>
            <?php elseif ($loanApplication['approval'] === 'Disapproved'): ?>
                <div class="alert alert-danger text-center">
                    <h4 class="fw-bold">Permohonan Anda Ditolak</h4>
                    <p>Sila hubungi pihak kami untuk maklumat lanjut.</p>
                </div>
            <?php endif; ?>
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