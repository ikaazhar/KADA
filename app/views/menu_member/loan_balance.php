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

        <br><br><br><h2 class="fw-bold" style="text-align:center;"> Baki Pinjaman </h2>
        <br><br><h3 class="fw-bold" style="text-align:center; color:red;">RM <?= htmlspecialchars($loanDetails['OutstandingAmount']) ?></h3>

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><strong>Jenis Pinjaman: </strong><?= htmlspecialchars($loanDetails['LoanType']) ?></p>
                    <p class="card-text"><strong>Ansuran Bulanan: </strong>RM <?= htmlspecialchars($loanDetails['MonthlyInstallment']) ?></p>
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
                            <?php if (!empty($transactionDetails)) : ?>
                                <?php foreach ($transactionDetails as $transaction) : ?>
                                    <tr>
                                        <th><?= htmlspecialchars($transaction['PaymentDate']) ?></th>
                                        <td>RM <?= htmlspecialchars($transaction['PaymentAmount']) ?></td>
                                        <td><?= htmlspecialchars($transaction['PaymentReference']) ?></td>
                                        <td><?= htmlspecialchars($transaction['PaymentMethod']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>      
                    </table> 
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>