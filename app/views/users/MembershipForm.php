<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Permohonan Menjadi Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center mb-4">Maklumat Pemohon</h1>
    <form action="/store" method="POST">
        <!-- Personal Details -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="id_number" class="form-label">Nombor K/P:</label>
                <input type="text" class="form-control" id="id_number" name="id_number" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="marital_status" class="form-label">Taraf Perkahwinan</label>
                <select class="form-select" id="marital_status" name="marital_status" required>
                    <option value="Bujang">Bujang</option>
                    <option value="Berkahwin">Berkahwin</option>
                    <option value="Duda">Duda</option>
                    <option value="Janda">Janda</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="gender" class="form-label">Jantina</label>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="Lelaki">Lelaki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="religion" class="form-label">Agama</label>
                <input type="text" class="form-control" id="religion" name="religion" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="ethnicity" class="form-label">Bangsa</label>
                <input type="text" class="form-control" id="ethnicity" name="ethnicity" required>
            </div>
            <div class="col-md-6">
                <label for="home_address" class="form-label">Alamat Rumah</label>
                <input type="text" class="form-control" id="home_address" name="home_address" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="postcode" class="form-label">Poskod</label>
                <input type="text" class="form-control" id="postcode" name="postcode" required>
            </div>
            <div class="col-md-4">
                <label for="state" class="form-label">Negeri</label>
                <input type="text" class="form-control" id="state" name="state" required>
            </div>
            <div class="col-md-4">
                <label for="city" class="form-label">Bandar</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
        </div>

        <!-- Office Details -->
        <h4 class="mt-4">Maklumat Pejabat</h4>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="staff_number" class="form-label">No. Anggota</label>
                <input type="text" class="form-control" id="staff_number" name="staff_number" required>
            </div>
            <div class="col-md-6">
                <label for="pf_number" class="form-label">No. PF</label>
                <input type="text" class="form-control" id="pf_number" name="pf_number" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="position_grade" class="form-label">Jawatan & Gred</label>
                <input type="text" class="form-control" id="position_grade" name="position_grade" required>
            </div>
            <div class="col-md-6">
                <label for="office_address" class="form-label">Alamat Pejabat</label>
                <input type="text" class="form-control" id="office_address" name="office_address" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="office_postcode" class="form-label">Poskod</label>
                <input type="text" class="form-control" id="office_postcode" name="office_postcode" required>
            </div>
            <div class="col-md-6">
                <label for="phone_office" class="form-label">No. Tel/Fax</label>
                <input type="text" class="form-control" id="phone_office" name="phone_office">
            </div>
        </div>

        <!-- Contact Details -->
        <h4 class="mt-4">Contact Details</h4>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="phone_mobile" class="form-label">No. Tel Bimbit</label>
                <input type="text" class="form-control" id="phone_mobile" name="phone_mobile" required>
            </div>
            <div class="col-md-6">
                <label for="phone_home" class="form-label">No. Tel Rumah</label>
                <input type="text" class="form-control" id="phone_home" name="phone_home">
            </div>
        </div>

        <!-- Salary Details -->
        <div class="mb-3">
            <label for="monthly_salary" class="form-label">Gaji Bulanan</label>
            <input type="text" class="form-control" id="monthly_salary" name="monthly_salary" required>
        </div>

        <!-- Add Family Details Form -->
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Add Family Details</h5>
            </div>
            <div class="card-body">
                <form action="/storeFamilyDetails" method="POST">
                    <input type="hidden" name="applicant_id" value="<?= htmlspecialchars($applicant_id) ?>">
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="relationship" class="form-label">Relationship</label>
                        <input type="text" name="relationship" id="relationship" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_number">No K/P:</label>
                        <input type="text" name="id_number" id="id_number" required><br>
                    </div>

                    <button type="submit" class="btn btn-success">Save Details</button>
                </form>
            </div>
        </div>

        <!-- Display Existing Family Details -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Existing Family Details</h5>
            </div>
            <div class="card-body">
                <?php if (!empty($familyDetails)): ?>
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Relationship</th>
                                <th>ID Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($familyDetails as $user): ?>
                                <tr>
                                    <td><?= htmlspecialchars($user['name']) ?></td>
                                    <td><?= htmlspecialchars($user['relationship']) ?></td>
                                    <td><?= htmlspecialchars($user['id_number']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p class="text-danger">No family details found.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Yuran & Sumbangan Section -->
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

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan Maklumat</button>
        </div>
        
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
