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
                                <th>Setuju</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Yuran Masuk</td>
                                <td></td>
                                <td>
                                    <label><input type="radio" name="yuran_masuk" value="Ya"> Ya</label>
                                    <label><input type="radio" name="yuran_masuk" value="Tidak"> Tidak</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Modal Syer</td>
                                <td></td>
                                <td>
                                    <label><input type="radio" name="modal_syer" value="Ya"> Ya</label>
                                    <label><input type="radio" name="modal_syer" value="Tidak"> Tidak</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Modal Yuran</td>
                                <td></td>
                                <td>
                                    <label><input type="radio" name="modal_yuran" value="Ya"> Ya</label>
                                    <label><input type="radio" name="modal_yuran" value="Tidak"> Tidak</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Wang Deposit Anggota</td>
                                <td></td>
                                <td>
                                    <label><input type="radio" name="wang_deposit" value="Ya"> Ya</label>
                                    <label><input type="radio" name="wang_deposit" value="Tidak"> Tidak</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Sumbangan Tabung Kebajikan (Al-Abrar)</td>
                                <td></td>
                                <td>
                                    <label><input type="radio" name="sumbangan_kebajikan" value="Ya"> Ya</label>
                                    <label><input type="radio" name="sumbangan_kebajikan" value="Tidak"> Tidak</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Simpanan Tetap</td>
                                <td></td>
                                <td>
                                    <label><input type="radio" name="simpanan_tetap" value="Ya"> Ya</label>
                                    <label><input type="radio" name="simpanan_tetap" value="Tidak"> Tidak</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Lain-lain</td>
                                <td></td>
                                <td>
                                    <label><input type="radio" name="lain_lain" value="Ya"> Ya</label>
                                    <label><input type="radio" name="lain_lain" value="Tidak"> Tidak</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                
                <h4 class="card-title mb-4">Muat naik borang</h4>
                <p class="mb-4">Sila muat naik slip gaji anda di sini:</p>
                <div class="mb-3">
                    <input type="file" name="file_upload" id="file_upload" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Simpan Maklumat</button>
            </div>

            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>