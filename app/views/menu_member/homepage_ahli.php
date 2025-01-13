<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KADA Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('bgimage2.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            padding-top: 30px;
            height: 100vh;
            margin: 0;
        }

        .navbar {
            background-color: #f3d78a;
            transition: background-color 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .navbar-brand {
            color: #ffffff !important;
            font-weight: 700;
            font-size: 1.8rem;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            padding: 12px 18px;
            font-size: 1rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #1cc88a !important;
            transform: scale(1.05);
            text-decoration: none;
        }

        .navbar-nav .nav-item.active .nav-link {
            color: #1cc88a !important;
        }

        .navbar-toggler-icon {
            background-color: #1cc88a;
        }

        .container {
            text-align: center;
            margin-top: 100px;
        }

        /* Header Style */
        h1 {
            font-family: 'Times New Roman', Times, serif;
            font-weight: 700;
            font-size: 3.5rem;
            color: #ffffff;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); /* Subtle shadow for depth */
            margin-bottom: 20px;
        }

        /* Paragraph Style */
        p {
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.5rem;
            color: #f5f5f5;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3); /* Soft shadow for clarity */
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .btn {
            background-color: #dd7672;
            border-color: #1cc88a;
            margin: 12px;
            font-weight: 600;
            transition: all 0.3s ease-in-out;
            padding: 14px 30px;
            font-size: 1.1rem;
            text-transform: uppercase;
            border-radius: 30px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            letter-spacing: 2px;
            position: relative;
        }

        .btn:hover {
            background-color: #1cc88a;
            border-color: #17a673;
            transform: scale(1.05);
        }

        .btn-primary {
            background-color: #c8781cce;
            border-color: #a6801767;
        }

        .btn-primary:hover {
            background-color: #17a673;
            border-color: #148f59;
        }

        .btn .btn-text {
            color: rgb(224, 218, 191);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            font-size: 40px;
            transition: color 0.3s ease, text-shadow 0.3s ease;
        }

        .btn:hover .btn-text {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .button-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .button-container a {
            width: 500px;
            height: 200px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 40px;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top navbar-dark">
        <div class="container-xxl">
            <a href="/homepageAhli" class="navbar-brand">
                <span>Koperasi Kakitangan KADA</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item d-md-none">
                        <a href="/logout" class="nav-link text-dark">Logout</a>
                    </li>
                    <li class="nav-item m-2 d-none d-md-inline">
                        <a href="/logout" class="btn btn-sm btn-info text-dark">Logout</a>
                    </li>
                </ul>
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
