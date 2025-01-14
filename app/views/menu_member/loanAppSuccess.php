<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application Submitted</title>
    <!-- Bootstrap CSS -->
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


    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%;">
            <div class="card-body text-center">
                <h2 class="card-title text-success mb-4">Permohonan Dihantar!</h2>
                <p class="card-text text-muted">
                    Permohonan pinjaman anda telah berjaya dihantar untuk disemak and diluluskan. Semakan ini mengambil masa selama  
                    <strong>30 hari</strong> untuk memproses & maklumkan keputusan permohonan.
                </p>
                <div class="mt-4">
                    <a href="/homepageMember" class="btn btn-primary btn-lg">Balik ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
