<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KADA Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Added Bootstrap Icons -->  
</head>
<body style="padding-top: 70px;">

    <!-- Navbar -->
    <nav class="navbar navbar-light fixed-top" style="background-color: rgb(236, 215, 145); padding: 0.3rem 1rem;">
        <div class="container-xxl">
            <a class="navbar-brand" href="/homepageAhli" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
                Koperasi Kakitangan KADA
            </a>
    
            <!-- Profile, Dropdown, and Logout Button Group -->
            <div class="d-flex align-items-center">
              
        
                    <!-- Logout Button -->
                    <a href="/logout" class="btn btn-info btn-sm text-dark" style="background-color:#c8781cce; border-color:#a6801767; font-weight: bold;">
                        <i class="bi bi-box-arrow-right" style="font-size: 20px;"></i> DAFTAR KELUAR
                    </a>
        
                    <!-- Profile Icon -->
                    <a href="showProfile" class="nav-link text-dark ms-2">
                        <i class="bi bi-person-circle" style="font-size: 30px;"></i>
                    </a>
                </div>
            </div>
        </nav>


    <!-- Main Content -->
    <div class="container py-5 text-center">
        <h1>Selamat Datang ke Koperasi KADA</h1>
        <p class="lead" style="font-size: 30px;">Akses pelbagai perkhidmatan koperasi dengan mudah</p>

        <!-- Button Container with Flexbox -->
        <div class="button-container">
            <a href="/viewLoanForm" class="btn btn-primary mb-2">
                <span class="btn-text">Mohon Pinjaman</span>
            </a>
            <a href="/loanStatus" class="btn btn-primary mb-2">
                <span class="btn-text">Semak Kelulusan Pinjaman</span>
            </a>
            <a href="/showSaving" class="btn btn-primary mb-2">
                <span class="btn-text">Semak Simpanan</span>
            </a>
            <a href="/loanBalance" class="btn btn-primary mb-2">
                <span class="btn-text">Baki Pinjaman</span>
            </a>
            <a href="/viewInvoice" class="btn btn-primary mb-2">
                <span class="btn-text">Semak Penyata</span>
            </a>
        </div>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0h4F63Gp6R26F6VZmO3y1v7jcF/fyFkjAC7ZGfbfl0B7/W5U" crossorigin="anonymous"></script>
</body>
</html>
