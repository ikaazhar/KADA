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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="register.php"> Mohon Pinjaman&nbsp;&nbsp;&nbsp;&nbsp; </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/loanStatus"> Semak Kelulusan Pinjaman&nbsp;&nbsp;&nbsp;&nbsp; </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/viewSaving"> Semak Simpanan&nbsp;&nbsp;&nbsp;&nbsp; </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/loanBalance"> Baki Pinjaman&nbsp;&nbsp;&nbsp;&nbsp; </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/viewInvoice"> Semak Penyata&nbsp;&nbsp;&nbsp;&nbsp; </a>
                        </li>
                        <li class="nav-item d-md-none">
                            <a href="/logout" class="nav-link text-dark"> Logout </a>
                        </li>
                        <li class="nav-item m-2 d-none d-md-inline">
                            <a href="/logout" class="btn btn-sm btn-info text-dark"> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <br><br><br><h2 class="fw-bold" style="text-align:center;"> Baki Pinjaman </h2>
        <?php if (!empty($loanDetails)): ?>
            <?php foreach ($loanDetails as $index => $loan): ?>
                <?php $loanID = $loan['LoanID']; ?>
                <?php $deets = isset($transactionDetails[$loanID]) ? $transactionDetails[$loanID] : null; ?>
                    <br><br><h3 class="fw-bold" style="text-align:center; color:red;">RM <?= htmlspecialchars($loan['OutstandingAmount']) ?></h3>

                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text"><strong>Jenis Pinjaman: </strong><?= htmlspecialchars($loan['LoanType']) ?></p>
                                <p class="card-text"><strong>Ansuran Bulanan: </strong>RM <?= htmlspecialchars($loan['MonthlyInstallment']) ?></p>
                                <table class="table table-bordered table-striped text-center">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Tarikh</th>
                                            <th>Bayaran</th>
                                            <th>No. Rujukan</th>
                                            <th>Kaedah Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($deets)) : ?>
                                            <?php foreach ($deets as $transaction) : ?>
                                                <tr>
                                                    <th><?= htmlspecialchars($transaction['PaymentDate']) ?></th>
                                                    <td>RM <?= htmlspecialchars($transaction['PaymentAmount']) ?></td>
                                                    <td><?= htmlspecialchars($transaction['PaymentReference']) ?></td>
                                                    <td><?= htmlspecialchars($transaction['PaymentMethod']) ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                        <tr>
                                            <td colspan="4">Tiada transaksi tersedia.</td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>      
                                </table> 
                            </div>
                        </div>
                    </div>
        <?php endforeach; ?>
    <?php else: ?>
        <br><br><h3 class="fw-bold text-center text-danger">Permohonan pinjaman anda belum diluluskan.</h3>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>