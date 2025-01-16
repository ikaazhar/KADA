<!DOCTYPE html>
<html lang="en">
<head>
    <title>KADA Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Bootstrap Icons -->
</head>
<body style="padding-top: 70px;">

    <div class="position-fixed top-0 start-0 w-100 h-100" style="z-index: -1;">
        <div class="bg-light" style="opacity: 0.8;">
            <img src="bgimageALK.png" alt="Background" class="img-fluid w-100 h-100" style="object-fit: cover;">
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-light fixed-top" style="background-color: rgb(145, 236, 165); padding: 0.3rem 1rem;">
        <div class="container-xxl d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="/homepageALK" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
                Koperasi Kakitangan KADA
            </a>

            <!-- Logout Button -->
            <a href="/logout" class="btn btn-sm text-dark" style="background-color: #67ffb8ce; border-color: #17a66367; font-weight: bold;">
                <i class="bi bi-box-arrow-right" style="font-size: 20px;"></i> DAFTAR KELUAR
            </a>
        </div>
    </nav>


    <div class="container py-5 text-center">
        <h1 class="display-4 mb-3" style="font-family: 'Times New Roman', Times, serif; font-size: 60px; font-weight: bold; color: rgb(240, 255, 247);">Selamat Datang ke Koperasi KADA</h1>
        <p class="lead mb-5" style="font-family: 'Times New Roman', Times, serif; font-size: 20px; color: #beeccd;">Akses pelbagai perkhidmatan koperasi dengan mudah</p>
    

  <!-- Main Content -->
<div class="container py-5 text-center">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-4 mb-3">
            <a href="/listReviewedLoan" 
               class="btn btn-lg w-100 d-flex align-items-center justify-content-center" 
               style="height: 120px; font-size: 1.5rem; background-color: #91e9ae; color: #2d4b37; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #dee2e6; transition: transform 0.2s ease, box-shadow 0.2s ease; font-family: 'Times New Roman', Times, serif; font-weight: bold; padding: 15px;"
               onmouseover="this.style.backgroundColor='#e9ecef'; this.style.boxShadow='0 8px 12px rgba(0, 0, 0, 0.15)'; this.style.transform='translateY(-2px)';"
               onmouseout="this.style.backgroundColor='#91e9ae'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)'; this.style.transform='none';">
                <i class="bi bi-file-earmark-check me-2"></i> PENGESAHAN PERMOHONAN PINJAMAN
            </a>
        </div>
        <div class="col-12 col-md-8 col-lg-4 mb-3">
            <a href="/approveMembershipForm" 
               class="btn btn-lg w-100 d-flex align-items-center justify-content-center" 
               style="height: 120px; font-size: 1.5rem; background-color: #91e9ae; color: #2d4b37; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #dee2e6; transition: transform 0.2s ease, box-shadow 0.2s ease; font-family: 'Times New Roman', Times, serif; font-weight: bold; padding: 15px;"
               onmouseover="this.style.backgroundColor='#e9ecef'; this.style.boxShadow='0 8px 12px rgba(0, 0, 0, 0.15)'; this.style.transform='translateY(-2px)';"
               onmouseout="this.style.backgroundColor='#91e9ae'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)'; this.style.transform='none';">
                <i class="bi bi-person-check me-2"></i> PENGESAHAN PERMOHONAN AHLI
            </a>
        </div>
        <div class="col-12 col-md-8 col-lg-4 mb-3">
            <a href="/calendar" 
               class="btn btn-lg w-100 d-flex align-items-center justify-content-center" 
               style="height: 120px; font-size: 1.5rem; background-color: #91e9ae; color: #2d4b37; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #dee2e6; transition: transform 0.2s ease, box-shadow 0.2s ease; font-family: 'Times New Roman', Times, serif; font-weight: bold; padding: 15px;"
               onmouseover="this.style.backgroundColor='#e9ecef'; this.style.boxShadow='0 8px 12px rgba(0, 0, 0, 0.15)'; this.style.transform='translateY(-2px)';"
               onmouseout="this.style.backgroundColor='#91e9ae'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)'; this.style.transform='none';">
                <i class="bi bi-calendar-event me-2"></i> LAPORAN TAHUNAN
            </a>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
