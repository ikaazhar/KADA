<!DOCTYPE html>
<html lang="en">
<head>
    <title>KADA Homepage</title>
    <!-- Link to Google Fonts for a more attractive font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="padding-top: 70px;">

    <!-- Background Image Container -->
    <div class="position-fixed top-0 start-0 w-100 h-100" style="z-index: -1;">
        <div class="bg-light" style="opacity: 0.8;">
            <img src="/assets_img/bgimageauth.jpg" alt="Background" class="img-fluid w-100 h-100" style="object-fit: cover;">
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-light fixed-top" style="background-color: rgb(145, 215, 236); padding: 0.3rem 1rem;">
        <div class="container-xxl">
            <a class="navbar-brand" href="/homepage" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
                Koperasi Kakitangan KADA
            </a>
    
            <!-- Profile, Dropdown, and Logout Button Group -->
            <div class="d-flex align-items-center">
                <a href="/createMembershipForm" class="btn btn-info btn-sm text-dark" style="background-color:#c7dfffe8; border-color:#1750a667; font-weight: bold;">
                    <i class="bi bi-r-square-fill" style="font-size: 20px;"></i> DAFTAR SEKARANG
                </a>

                <a href="/checkAcc" class="btn btn-info btn-sm text-dark" style="background-color:#c7dfffe8; border-color:#1750a667; font-weight: bold;">
                    <i class="bi bi-check2-square"style="font-size: 20px;"></i> SEMAK PERMOHONAN
                </a>

                <a href="/buttonpage" class="btn btn-info btn-sm text-dark" style="background-color:#c7dfffe8; border-color:#1750a667; font-weight: bold;">
                    <i class="bi bi-box-arrow-in-left"style="font-size: 20px;"></i> DAFTAR MASUK
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5 pt-5">

        <!-- Card Design with enhanced shadow and centered image -->
        <div class="card shadow-lg" style="max-width: 800px; margin: auto; border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
            <!-- Card Image (Logo) -->
            <img src="/assets_img/LOGO_KOPERASI_KADA-removebg-preview.png" class="card-img-top mx-auto d-block" alt="Koperasi KADA Logo" style="max-width: 200px; margin-top: 20px;">

            <!-- Card Body -->
            <div class="card-body" style="font-family: 'Roboto', sans-serif;">
                <h1 class="card-title text-center" style="font-family: 'Times New Roman', Times, serif; font-weight: 700; color: #004c77;">KOPERASI KAKITANGAN KADA</h1>

                <div class="content-section">
                    <h3 class="kada" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">Nama Berdaftar    : Koperasi Kakitangan KADA SDN BHD<br></h3>
                    <h3 class="kada" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">NO. Pendaftaran   : IP5429/1<br></h3> 
                    <h3 class="kada" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">Tarikh Daftar     : 29 Ogos 1981<br></h3>
                    <h3 class="kada" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">Pejabat Berdaftar : D/A Lembaga Kemajuan Pertanian Kemubu, P/S 127 , 15710 Kota Bharu, Kelantan</h3>
                    <h3 class="kada" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">No. Telefon       : 09-7447088 samb. 5339 @ 5312<br></h3>
                    <h3 class="kada" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">Emel              : koperasi_kada@yahoo.com<br></h3>
                    <h3 class="kada" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">Bank              :<br></h3>
                    <h3 class="kada" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">                      1.BANK ISLAM MALAYSIA BHD       – Cawangan Kubang Kerian<br></h3>
                    <h3 class="kada" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">                      2.BANK MUAMALAT MALAYSIA BERHAD – Cawangan Jalan Sultan Yahya Petra<br></h3>
                    <h3 class="kada" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">                      3.BANK MUAMALAT MALAYSIA BERHAD – Cawangan Kota Bharu<br></h3>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="footer text-center mt-5">
        <p>&copy; 2025 Koperasi Kakitangan KADA. All rights reserved.</p>
    </footer>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
