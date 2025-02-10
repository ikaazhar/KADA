<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Borang Berhenti Keahlian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center text-primary mb-4">Borang Permohonan Berhenti Keahlian</h2>

            <form action="/submitTermination" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">No KP</label>
                        <input type="text" name="no_kp" class="form-control" required>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">Tarikh Lahir</label>
                        <input type="date" name="tarikh_lahir" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Umur</label>
                        <input type="number" name="umur" class="form-control" required>
                    </div>
                </div>

                <div class="mt-3">
                    <label class="form-label">Alamat Rumah</label>
                    <textarea name="alamat_rumah" class="form-control" rows="2" required></textarea>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                        <label class="form-label">Poskod</label>
                        <input type="text" name="poskod_rumah" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Bandar</label>
                        <input type="text" name="bandar_rumah" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Negeri</label>
                        <input type="text" name="negeri" class="form-control" required>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">No Ahli</label>
                        <input type="text" name="no_anggota" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">No PF</label>
                        <input type="text" name="no_pf" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">Jawatan</label>
                        <input type="text" name="jawatan" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Alamat Pejabat</label>
                        <textarea name="alamat_pejabat" class="form-control" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                        <label class="form-label">Poskod Pejabat</label>
                        <input type="text" name="poskod_pejabat" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Bandar Pejabat</label>
                        <input type="text" name="bandar_pejabat" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">No Tel/Fax</label>
                        <input type="text" name="no_tel_fax" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">No Tel Bimbit</label>
                        <input type="text" name="no_tel_bimbit" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jantina</label>
                        <select name="jantina" class="form-select">
                            <option value="Lelaki">Lelaki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">Agama</label>
                        <select name="agama" class="form-select">
                            <option value="Islam">Islam</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nyatakan (Jika Lain-lain)</label>
                        <input type="text" name="agama_lain" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">Bangsa</label>
                        <select name="bangsa" class="form-select">
                            <option value="Melayu">Melayu</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nyatakan (Jika Lain-lain)</label>
                        <input type="text" name="bangsa_lain" class="form-control">
                    </div>
                </div>

                <div class="mt-3">
                    <label class="form-label">Sebab Berhenti</label>
                    <textarea name="sebab" class="form-control" rows="3" required></textarea>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-5">Hantar Permohonan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
