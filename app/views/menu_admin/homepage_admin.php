<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <title>Halaman Utama KADA</title>

        <style>
            section
            {
                padding: 60px 0;
            }
        </style>
    </head>

    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary w-100">
            <div class="container">
                <a href="/homepageAdmin" class="navbar-brand">
                    <span class="fw-bold text-white">
                        Koperasi Kakitangan KADA         
                    </span>
                </a>

                <!-- Toggle Button for Mobile Navigation -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" 
                        aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--Navigation Bar Links-->
                <div class="collapse navbar-collapse justify-content-end align-center" id = "main-nav">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                            <a href="/createAdmin" class="btn btn-info btn-sm text-dark">
                                <i class="bi bi-person-fill-add" style="font-size: 19px;"></i>
                                Tambah Admin  
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/logout" class="btn btn-info btn-sm text-dark">
                                <i class="bi bi-box-arrow-right" style="font-size: 19px;"></i>
                                DAFTAR KELUAR 
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark ms-2">
                                <i class="bi bi-person-circle" style="font-size: 20px;"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <!-- Main Content -->
        <div class="container d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 70vh;">
            <div class="bg-white p-5 rounded shadow">
                <h2 class="mb-4">Pilih salah satu pilihan berikut untuk memulakan:</h2>
                <p class="mb-5"></p>

                <!-- Button Container with Grid System -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-1 g-1">
                    <div class="col">
                        <a href="/listPendingForm" class="btn btn-primary btn-lg w-100 d-flex flex-column align-items-center">
                            <i class="bi bi-cash-stack"></i>
                            Senarai Permohonan Pinjaman
                        </a>
                    </div>

                    <br><br><br>

                    <div class="col">
                        <a href="/reviewMembershipForm" class="btn btn-primary btn-lg w-100 d-flex flex-column align-items-center">
                            <i class="bi bi-person-vcard-fill"></i>
                            Senarai Permohonan Ahli
                        </a>
                    </div>

                    <br><br><br>

                    <div class="col-12">
                        <a href="/calendarAdmin" class="btn btn-primary btn-lg w-100 d-flex flex-column align-items-center">
                            <i class="bi bi-clipboard2-data-fill"></i>
                            Laporan Koperasi
                        </a>
                    </div>
                </div>

                
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
