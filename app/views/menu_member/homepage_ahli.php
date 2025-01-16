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

    <!-- Background Image Container -->
    <div class="position-fixed top-0 start-0 w-100 h-100" style="z-index: -1;">
        <div class="bg-light" style="opacity: 0.8;">
            <img src="assets/bgimage2.jpeg" alt="Background" class="img-fluid w-100 h-100" style="object-fit: cover;">
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-light fixed-top" style="background-color: rgb(236, 215, 145); padding: 0.3rem 1rem;">
        <div class="container-xxl">
            <a class="navbar-brand" href="/homepageMember" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
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
    <h1 class="display-4 mb-3" style="font-family: 'Times New Roman', Times, serif; font-size: 60px; font-weight: bold;">Selamat Datang ke Koperasi KADA</h1>
    <p class="lead mb-5" style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">Akses pelbagai perkhidmatan koperasi dengan mudah</p>

    <!-- Button Container with Grid System -->
    <div class="row justify-content-center">
        <!-- Button 1 -->
        <div class="col-md-4 mb-3">
            <a href="/viewLoanForm" class="btn btn-primary w-100 d-flex align-items-center justify-content-center text-uppercase" 
                style="font-family: 'Times New Roman', Times, serif; font-size: 40px; height: 200px; border-radius: 40px; background-color: #c8781cce; border-color: #a6801767; 
                box-shadow: 0 6px 12px rgba(168, 138, 80, 0.712); transition: all 0.3s ease;">
                Mohon Pinjaman
            </a>
        </div>
        
        <!-- Button 2 -->
        <div class="col-md-4 mb-3">
            <a href="/loanStatus" class="btn btn-primary w-100 d-flex align-items-center justify-content-center text-uppercase" 
                style="font-family: 'Times New Roman', Times, serif; font-size: 40px; height: 200px; border-radius: 40px; background-color: #c8781cce; border-color: #a6801767; 
                box-shadow: 0 6px 12px rgba(168, 138, 80, 0.712); transition: all 0.3s ease;">
                Semak Kelulusan Pinjaman
            </a>
        </div>

        <!-- Button 3 -->
        <div class="col-md-4 mb-3">
            <a href="/showSaving" class="btn btn-primary w-100 d-flex align-items-center justify-content-center text-uppercase" 
                style="font-family: 'Times New Roman', Times, serif; font-size: 40px; height: 200px; border-radius: 40px; background-color: #c8781cce; border-color: #a6801767; 
                box-shadow: 0 6px 12px rgba(168, 138, 80, 0.712); transition: all 0.3s ease;">
                Semak Simpanan
            </a>
        </div>

        <!-- Button 4 -->
        <div class="col-md-4 mb-3">
            <a href="/loanBalance" class="btn btn-primary w-100 d-flex align-items-center justify-content-center text-uppercase" 
                style="font-family: 'Times New Roman', Times, serif; font-size: 40px; height: 200px; border-radius: 40px; background-color: #c8781cce; border-color: #a6801767; 
                box-shadow: 0 6px 12px rgba(168, 138, 80, 0.712); transition: all 0.3s ease;">
                Baki Pinjaman
            </a>
        </div>

        <!-- Button 5 -->
        <div class="col-md-4 mb-3">
            <a href="/viewInvoice" class="btn btn-primary w-100 d-flex align-items-center justify-content-center text-uppercase" 
                style="font-family: 'Times New Roman', Times, serif; font-size: 40px; height: 200px; border-radius: 40px; background-color: #c8781cce; border-color: #a6801767; 
                box-shadow: 0 6px 12px rgba(168, 138, 80, 0.712); transition: all 0.3s ease;">
                Semak Penyata
            </a>
        </div>
    </div>
</div>

<!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0h4F63Gp6R26F6VZmO3y1v7jcF/fyFkjAC7ZGfbfl0B7/W5U" crossorigin="anonymous"></script>
</body>
</html>