<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Borang Permohonan Menjadi Anggota</title>
</head>

<body class="bg-light">
    <div class="container my-5">
        <h1 class="text-center mb-4">Borang Permohonan Menjadi Anggota</h1>
        <p class="text-center mb-4">Jika diterima sebagai anggota, saya bersetuju membayar yuran dan sumbangan bulanan seperti di bawah</p>

        <!-- Yuran & Sumbangan Section -->
        <div class="card p-4 mb-5 shadow-sm">
            <h4 class="card-title mb-4">Yuran & Sumbangan</h4>
            <form action="" method="POST" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Perkara</th>
                            <th>RM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Yuran Masuk</td>
                            <td><input type="number" step="0.01" name="yuran_masuk_value" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Modal Syer</td>
                            <td><input type="number" step="0.01" name="modal_syer_value" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Modal Yuran</td>
                            <td><input type="number" step="0.01" name="modal_yuran_value" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Wang Deposit Anggota</td>
                            <td><input type="number" step="0.01" name="wang_deposit_value" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Sumbangan Tabung Kebajikan (Al-Abrar)</td>
                            <td><input type="number" step="0.01" name="sumbangan_kebajikan_value" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Simpanan Tetap</td>
                            <td><input type="number" step="0.01" name="simpanan_tetap_value" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Lain-lain</td>
                            <td><input type="number" step="0.01" name="lain_lain_value" class="form-control"></td>
                        </tr>
                    </tbody>
                </table>

                <h4 class="card-title mb-4">Muat naik borang</h4>
                <p class="mb-4">Sila muat naik slip gaji anda di sini:</p>
                <div class="mb-3">
                    <input type="file" name="slip_gaji" id="slip_gaji" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Simpan Maklumat</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>