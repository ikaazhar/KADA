<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Borang Permohonan Berhenti Keahlian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center text-primary mb-4">Borang Permohonan Berhenti Keahlian</h2>
            
            <?php if (!isset($memberDetails) || !$memberDetails): ?>
                <p class="text-danger text-center">Tiada rekod permohonan ditemui.</p>
            <?php else: ?>
                <form action="/updateTermination" method="POST">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($memberDetails['id']) ?>">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($memberDetails['nama']) ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">No KP</label>
                            <input type="text" name="no_kp" class="form-control" value="<?= htmlspecialchars($memberDetails['no_kp']) ?>" required>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="form-label">Tarikh Lahir</label>
                            <input type="date" name="tarikh_lahir" class="form-control" value="<?= htmlspecialchars($memberDetails['tarikh_lahir']) ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Umur</label>
                            <input type="number" name="umur" class="form-control" value="<?= htmlspecialchars($memberDetails['umur']) ?>" required>
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <label class="form-label">Alamat Rumah</label>
                        <textarea name="alamat_rumah" class="form-control" rows="2" required><?= htmlspecialchars($memberDetails['alamat_rumah']) ?></textarea>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="form-label">No Ahli</label>
                            <input type="text" name="no_anggota" class="form-control" value="<?= htmlspecialchars($memberDetails['no_anggota']) ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">No PF</label>
                            <input type="text" name="no_pf" class="form-control" value="<?= htmlspecialchars($memberDetails['no_pf'] ?? '') ?>">
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="form-label">Jantina</label>
                            <input type="jantina" class="form-control" value="<?= htmlspecialchars($memberDetails['jantina']) ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Agama</label>
                            <input type="agama" class="form-control" value="<?= htmlspecialchars($memberDetails['agama']) ?>">
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <label class="form-label">Sebab Berhenti</label>
                        <textarea name="sebab" class="form-control" rows="3" required><?= htmlspecialchars($memberDetails['sebab']) ?></textarea>
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="/listTermination" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
