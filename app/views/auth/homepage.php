<!DOCTYPE html>
<html lang="en">
<head>
    <title>KADA Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('bgimage_buttonpage.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .navbar {
            background-color: rgba(0, 102, 204, 0.8); /* Semi-transparent blue */
        }
        .navbar-brand {
            color: white !important;
        }
        .navbar-nav .nav-link, .navbar-nav .btn-info {
            color: #fff !important;
            padding: 10px 20px; /* Consistent button size */
            height: 50px; /* Fixed height */
        }
        .navbar-nav .btn-info {
            background-color: #00cc66; /* Green buttons */
            border: none;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .btn-info:hover {
            background-color: #218838; /* Darker green hover effect */
        }
        .btn-info {
            font-size: 16px; /* Button font size */
        }
        .btn-custom {
            background-color: #0066cc; /* Blue buttons */
            color: white;
            border-radius: 8px;
            font-size: 18px;
            padding: 12px 25px;
            width: 100%; /* Full-width buttons */
            max-width: 300px; /* Consistent button width */
            height: 80px; /* Consistent height */
        }
        .btn-custom:hover {
            background-color: #005bb5; /* Darker blue on hover */
        }
        .page-title {
            color: #9dbbda;
            font-weight: 600;
            text-align: center;
            margin: 30px 0;
        }
        .footer {
            background-color: rgba(0, 102, 204, 0.9); /* Blue footer */
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
            font-size: 14px;
        }
        .content-section {
            margin: 20px auto;
            text-align: left;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            color: #333;
        }

        .kada {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top navbar-light">
        <div class="container-xxl">
            <a href="/homepage" class="navbar-brand">
                <span class="fw-bold">
                    Koperasi Kakitangan KADA
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-info d-inline-block mx-1" href="/createMembershipForm/">Daftar Sekarang</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-info d-inline-block mx-1" href="/checkAcc">Semak Permohonan</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="btn btn-info d-inline-block mx-1" href="/createAdmin">Create Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-info d-inline-block mx-1" href="/createALK">Create ALK</a>
                    </li>
                        <a class="btn btn-info d-inline-block mx-1" href="/buttonpage">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5 pt-5">
        <h1 class="page-title">KOPERASI KAKITANGAN KADA</h1>

        <div class="content-section">
            <h3 class="kada">NAMA BERDAFTAR : KOPERASI KAKITANGAN KADA SDN BHD<br></h3>
            <h3 class="kada">NO. PENDAFTARAN : IP5429/1<br></h3> 
            <h3 class="kada">TARIKH DAFTAR : 29 Ogos 1981<br></h3>
            <h3 class="kada">PEJABAT BERDAFTAR : D/A Lembaga Kemajuan Pertanian Kemubu, P/S 127 , 15710 Kota Bharu, Kelantan</h3>
            <h3 class="kada">NO. TELEFON : 09-7447088 samb. 5339 @ 5312<br></h3>
            <h3 class="kada">EMEL : koperasi_kada@yahoo.com<br></h3>
            <h3 class="kada">BANK :<br></h3>
            <h3 class="kada">     1.BANK ISLAM MALAYSIA BHD       – CAWANGAN KUBANG KERIAN<br></h3>
            <h3 class="kada">     2.BANK MUAMALAT MALAYSIA BERHAD – CAWANGAN JALAN SULTAN YAHYA PETRa<br></h3>
            <h3 class="kada">     3.BANK MUAMALAT MALAYSIA BERHAD – CAWANGAN KOTA BHARU<br></h3>
            
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Koperasi Kakitangan KADA. All rights reserved.</p>
    </footer>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
