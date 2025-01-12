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
                            <a class="nav-link text-dark" href="/listReviewedLoan"> Pengesahan Permohonan Pinjaman&nbsp;&nbsp;&nbsp;&nbsp; </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="">Pengesahan Permohonan Ahli&nbsp;&nbsp;&nbsp;&nbsp; </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/viewSaving"> Rekod Kewangan Tahunan&nbsp;&nbsp;&nbsp;&nbsp; </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href=""> Laporan Koperasi&nbsp;&nbsp;&nbsp;&nbsp; </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/viewInvoice"> ETC&nbsp;&nbsp;&nbsp;&nbsp; </a>
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

        <div class="container py-5 text-center"></div>
        <a href="/listReviewedLoan" class="btn btn-primary mb-2">Pengesahan Permohonan Pinjaman</a>
        <a href="" class="btn btn-primary mb-2">Pengesahan Permohonan Ahli</a>
        <a href="/viewSaving" class="btn btn-primary">Rekod Kewangan Tahunan</a>
        <a href="" class="btn btn-primary mb-2">Laporan Koperasi</a>
        <a href="/viewInvoice" class="btn btn-primary mb-2">ETC</a>
    </div>
</body>
</html>