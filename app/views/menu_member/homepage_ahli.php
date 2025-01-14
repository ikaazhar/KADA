<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KADA Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Added Bootstrap Icons -->
</head>

<body class="bg-cover text-white" style="background: url('bgimage2.jpeg') no-repeat center center fixed; background-size: cover; color: white; padding-top: 30px; height: 100vh; margin: 0">
   
    <nav class="navbar navbar-light fixed-top" style="background-color: rgb(236, 215, 145);">
        <div class="container-xxl">
            <a class="navbar-brand" href="/homepageAhli" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
                Koperasi Kakitangan KADA
            </a>
            
            <!-- Profile and Logout Button Group -->
            <div class="d-flex align-items-center">
                 <!-- Logout Button -->
                <a href="/logout" class="btn btn-info btn-sm text-dark" style="background-color:#c8781cce; border-color:#a6801767;">
                    <i class="bi bi-box-arrow-right" style="font-size: 20px;"></i> DAFTAR KELUAR
                </a>

                 <!-- Profile Icon -->
                 <a href="#" class="nav-link text-dark">
                    <i class="bi bi-person-circle" style="font-size: 30px;"></i>
                </a>
            </div>
        </div>
    </nav>
    
        

        </div>
      </nav>

    <!-- Main Content -->
    <div class="container py-5 text-center" style="margin-top: 100px;">
        <h1 class="display-4" style="font-family: 'Times New Roman', Times, serif; font-weight: 700; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); font-size: 60px;">Selamat Datang ke Koperasi KADA</h1>
        <p class="lead" style="font-size: 30px; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3); font-family: 'Times New Roman', Times, serif;">Akses pelbagai perkhidmatan koperasi dengan mudah</p>

        <!-- Button Container with Flexbox -->
        <div class="d-flex justify-content-center flex-wrap">
            <a href="/viewLoanForm" class="btn btn-primary m-2" style="width: 500px; height: 200px; font-family: 'Times New Roman', Times, serif; font-size: 40px; text-transform: uppercase; text-align: center; box-shadow: 0 6px 12px rgba(168, 138, 80, 0.712); border-radius: 40px; background-color: #c8781cce; border-color: #a6801767;">
                <span class="d-flex align-items-center justify-content-center text-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); width: 100%; height: 100%;">Mohon Pinjaman</span>
            </a>
            <a href="/loanStatus" class="btn btn-primary m-2" style="width: 500px; height: 200px; font-family: 'Times New Roman', Times, serif; font-size: 40px; text-transform: uppercase; text-align: center; box-shadow: 0 6px 12px rgba(168, 138, 80, 0.712); border-radius: 40px; background-color: #c8781cce; border-color: #a6801767">
                <span class="d-flex align-items-center justify-content-center text-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); width: 100%; height: 100%;">Semak Kelulusan Pinjaman</span>
            </a>
            <a href="/showSaving" class="btn btn-primary m-2" style="width: 500px; height: 200px; font-family: 'Times New Roman', Times, serif; font-size: 40px; text-transform: uppercase; text-align: center; box-shadow: 0 6px 12px rgba(168, 138, 80, 0.712); border-radius: 40px; background-color: #c8781cce; border-color: #a6801767">
                <span class="d-flex align-items-center justify-content-center text-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); width: 100%; height: 100%;">Semak Simpanan</span>
            </a>
            <a href="/loanBalance" class="btn btn-primary m-2" style="width: 500px; height: 200px; font-family: 'Times New Roman', Times, serif; font-size: 40px; text-transform: uppercase; text-align: center; box-shadow: 0 6px 12px rgba(168, 138, 80, 0.712); border-radius: 40px; background-color: #c8781cce; border-color: #a6801767">
                <span class="d-flex align-items-center justify-content-center text-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); width: 100%; height: 100%;">Baki Pinjaman</span>
            </a>
            <a href="/viewInvoice" class="btn btn-primary m-2" style="width: 500px; height: 200px; font-family: 'Times New Roman', Times, serif; font-size: 40px; text-transform: uppercase; text-align: center; box-shadow: 0 6px 12px rgba(168, 138, 80, 0.712); border-radius: 40px; background-color: #c8781cce; border-color: #a6801767">
                <span class="d-flex align-items-center justify-content-center text-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); width: 100%; height: 100%;">Semak Penyata</span>
            </a>
        </div>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0h4F63Gp6R26F6VZmO3y1v7jcF/fyFkjAC7ZGfbfl0B7/W5U" crossorigin="anonymous"></script>
    
</body>
</html>
