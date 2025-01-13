<!DOCTYPE html>
<html lang="en">
    <head>
    <title> KADA Homepage </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-warning">
            <div class="container-xxl">
                <a href="/homepageAhli" class="navbar-brand">
                    <span class="fw-bold text-dark">
                        Koperasi Kakitangan KADA         
                    </span>
                </a>

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