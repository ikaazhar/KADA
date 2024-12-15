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
                    <option value="Single">Bujang</option>
                    <option value="Married">Berkahwin</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="gender" class="form-label">Jantina</label>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="Male">Lelaki</option>
                    <option value="Female">Perempuan</option>
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

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan Maklumat</button>
        </div>

        <br>

        <li class="nav-item m-2 d-none d-md-inline">
                            <a class="btn btn-sm btn-info text-dark" href="/family_details"> Seterusnya </a>
                        </li>

        
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
