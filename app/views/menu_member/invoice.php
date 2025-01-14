<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyata Kewangan</title>
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

    <!-- Main Content -->
    <div class="container text-center mt-5">
        <h1 class="text-dark" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">PENYATA KEWANGAN</h1>

        <!-- Member Details Card -->
        <div class="card" style="background-color: rgb(238, 213, 146);">
            <div class="card-body">
            <p class="card-text"><strong>Nama: </strong><?php echo $data['memberDetails']['name']; ?></p>
                <p class="card-text"><strong>No. IC: </strong><?php echo $data['memberDetails']['id_number']; ?></p>
                <p class="card-text"><strong>No. Ahli: </strong><?php echo $data['memberDetails']['membership_number']; ?></p>
            </div>
        </div>
         
        <br>
        <!-- Transaction Table -->
        <div class="card"  style="background-color: rgb(238, 213, 146);">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th rowspan="2"> Transaksi </th>
                            <th rowspan="2"> Tarikh </th>
                            <th rowspan="2"> Jumlah (RM) </th>
                            <th rowspan="2"> Catatan</th>
                            <th rowspan="2"> Cara Bayaran</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if ($invoice): ?>
                            <?php foreach ($invoice as $invoices): ?>
                                <tr>
                                    <td><?= $invoices['TransactionD']; ?></td>
                                    <td><?= $invoices['PaymentDate']; ?></td>
                                    <td><?= $invoices['PaymentAmount']; ?></td>
                                    <td><?= $invoices['PaymentReference']; ?></td>
                                    <td><?= $invoices['PaymentMethod']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">Tiada data disimpan.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
