<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Added Bootstrap Icons -->  
</head>
<body style="padding-top: 70px;">

    <!-- Background Image Container -->
    <div class="position-fixed top-0 start-0 w-100 h-100" style="z-index: -1;">
        <div class="bg-light" style="opacity: 0.8;">
            <img src="/assets_img/bgimage2.jpeg" alt="Background" class="img-fluid w-100 h-100" style="object-fit: cover;">
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-light fixed-top" style="background-color: rgb(236, 215, 145); padding: 0.3rem 1rem;">
        <div class="container-xxl">
            <a class="navbar-brand" href="/homepageMember" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
                Koperasi Kakitangan KADA
            </a>
    
            <!-- Profile, Dropdown, and Logout Button Group -->
            <div class="d-flex align-items-center">
              
            <div class="dropdown me-3">
                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#c8781cce; border-color:#a6801767; font-size: 20px; color: black;">
                        Pilihan
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/viewLoanForm">Mohon Pinjaman</a></li>
                            <li><a class="dropdown-item" href="/loanStatus">Semak Kelulusan Pinjaman</a></li>
                            <li><a class="dropdown-item" href="/showSaving">Semak Simpanan</a></li>
                            <li><a class="dropdown-item" href="/loanBalance">Baki Pinjaman</a></li>
                            <li><a class="dropdown-item" href="/viewInvoice">Semak Penyata</a></li>
                        </ul>
                    </div>
        
                    <!-- Logout Button -->
                    <a href="/logout" class="btn btn-info btn-sm text-dark" style="background-color:#c8781cce; border-color:#a6801767; font-weight: bold;">
                        <i class="bi bi-box-arrow-right" style="font-size: 20px;"></i> DAFTAR KELUAR
                    </a>
        
                </div>
            </div>
        </nav>

<div class="container my-5">
    <h1 class="text-center mb-4" style="font-weight: bold;">MAKLUMAT AHLI</h1>
    <form action="" method="GET">
        <!-- Personal Details -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: rgb(201, 168, 109)">
                <h5 class="mb-0">Maklumat Peribadi</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($memberDetails['name']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="id_number" class="form-label">Nombor K/P:</label>
                        <input type="text" class="form-control" id="id_number" name="id_number" value="<?= htmlspecialchars($memberDetails['id_number']); ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($memberDetails['email']); ?>" required>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="marital_status" class="form-label">Taraf Perkahwinan</label>
                        <input type="text" class="form-control" id="marital_status" name="marital_status" value="<?= htmlspecialchars($memberDetails['marital_status']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="gender" class="form-label">Jantina</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="<?= htmlspecialchars($memberDetails['gender']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="religion" class="form-label">Agama</label>
                        <input type="text" class="form-control" id="religion" name="religion" value="<?= htmlspecialchars($memberDetails['religion']); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="ethnicity" class="form-label">Bangsa</label>
                        <input type="text" class="form-control" id="ethnicity" name="ethnicity" value="<?= htmlspecialchars($memberDetails['ethnicity']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="home_address" class="form-label">Alamat Rumah</label>
                        <input type="text" class="form-control" id="home_address" name="home_address" value="<?= htmlspecialchars($memberDetails['home_address']); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="postcode" class="form-label">Poskod</label>
                        <input type="text" class="form-control" id="postcode" name="postcode" value="<?= htmlspecialchars($memberDetails['postcode']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="state" class="form-label">Negeri</label>
                        <input type="text" class="form-control" id="state" name="state" value="<?= htmlspecialchars($memberDetails['state']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="city" class="form-label">Bandar</label>
                        <input type="text" class="form-control" id="city" name="city" value="<?= htmlspecialchars($memberDetails['city']); ?>" required>
                    </div>
                </div>
            </div>
        </div>

        <!-- Office Details -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: rgb(201, 168, 109)">
                <h5 class="mb-0">Maklumat Pejabat</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="membership_number" class="form-label">No. Anggota</label>
                        <input type="text" class="form-control" id="membership_number" name="membership_number" value="<?= htmlspecialchars($memberDetails['membership_number']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="pf_number" class="form-label">No. PF</label>
                        <input type="text" class="form-control" id="pf_number" name="pf_number" value="<?= htmlspecialchars($memberDetails['pf_number']); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="position_grade" class="form-label">Jawatan & Gred</label>
                        <input type="text" class="form-control" id="position_grade" name="position_grade" value="<?= htmlspecialchars($memberDetails['position_grade']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="office_address" class="form-label">Alamat Pejabat</label>
                        <input type="text" class="form-control" id="office_address" name="office_address" value="<?= htmlspecialchars($memberDetails['office_address']); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="office_postcode" class="form-label">Poskod</label>
                        <input type="text" class="form-control" id="office_postcode" name="office_postcode" value="<?= htmlspecialchars($memberDetails['office_postcode']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone_office" class="form-label">No. Tel/Fax</label>
                        <input type="text" class="form-control" id="phone_office" name="phone_office" value="<?= htmlspecialchars($memberDetails['phone_office']); ?>" >
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Details -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: rgb(201, 168, 109)">
                <h5 class="mb-0">Maklumat Nombor Telefon</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone_mobile" class="form-label">No. Tel Bimbit</label>
                        <input type="text" class="form-control" id="phone_mobile" name="phone_mobile" value="<?= htmlspecialchars($memberDetails['phone_mobile']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone_home" class="form-label">No. Tel Rumah</label>
                        <input type="text" class="form-control" id="phone_home" name="phone_home" value="<?= htmlspecialchars($memberDetails['phone_home']); ?>" >
                    </div>
                </div>
            </div>
        </div>

        <!-- Family Details -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: rgb(201, 168, 109)">
                <h5 class="mb-0">Maklumat Keluarga</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="family_member_1_name" class="form-label">Nama Ahli Keluarga 1</label>
                        <input type="text" class="form-control" id="famName1" name="famName1" value="<?= htmlspecialchars($memberDetails['famName1']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="family_member_1_relationship" class="form-label">Hubungan</label>
                        <input type="text" class="form-control" id="famRelationship1" name="famRelationship1" value="<?= htmlspecialchars($memberDetails['famRelationship1']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="family_member_1_IC" class="form-label">No. Kad Pengenalan</label>
                        <input type="text" class="form-control" id="famIC1" name="famIC1" value="<?= htmlspecialchars($memberDetails['famIC1']); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="family_member_2_name" class="form-label">Nama Ahli Keluarga 2</label>
                        <input type="text" class="form-control" id="famName2" name="famName2" value="<?= htmlspecialchars($memberDetails['famName2']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="family_member_2_relationship" class="form-label">Hubungan</label>
                        <input type="text" class="form-control" id="famRelationship2" name="famRelationship2" value="<?= htmlspecialchars($memberDetails['famRelationship2']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="family_member_1_IC" class="form-label">No. Kad Pengenalan</label>
                        <input type="text" class="form-control" id="famIC2" name="famIC2" value="<?= htmlspecialchars($memberDetails['famIC2']); ?>" required>
                    </div>
                </div>
            </div>
        </div>

        <!-- Salary Details -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: rgb(201, 168, 109)">
                <h5 class="mb-0">Gaji Bulanan</h5>
            </div>
            <div class="card-body">
                <label for="monthly_salary" class="form-label">Gaji Bulanan</label>
                <input type="text" class="form-control" id="monthly_salary" name="monthly_salary" value="<?= htmlspecialchars($memberDetails['monthly_salary']); ?>" required>
            </div>
        </div>

        <!-- Yuran & Sumbangan Section -->
        <div class="card mb-4">
            <div class="card-header text-white" style="background-color: rgb(201, 168, 109)">
                <h5 class="mb-0">Yuran & Sumbangan</h5>
            </div>
            <div class="card-body">
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
                            <td><input type="number" step="0.01" name="yuran_masuk_value" class="form-control" value="<?= htmlspecialchars($memberDetails['yuran_masuk_value']); ?>" ></td>
                        </tr>
                        <tr>
                            <td>Modal Syer</td>
                            <td><input type="number" step="0.01" name="modal_syer_value" class="form-control" value="<?= htmlspecialchars($memberDetails['modal_syer_value']); ?>"></td>
                        </tr>
                        <tr>
                            <td>Modal Yuran</td>
                            <td><input type="number" step="0.01" name="modal_yuran_value" class="form-control" value="<?= htmlspecialchars($memberDetails['modal_yuran_value']); ?>"></td>
                        </tr>
                        <tr>
                            <td>Wang Deposit Anggota</td>
                            <td><input type="number" step="0.01" name="wang_deposit_value" class="form-control" value="<?= htmlspecialchars($memberDetails['wang_deposit_value']); ?>"></td>
                        </tr>
                        <tr>
                            <td>Sumbangan Tabung Kebajikan (Al-Abrar)</td>
                            <td><input type="number" step="0.01" name="sumbangan_kebajikan_value" class="form-control" value="<?= htmlspecialchars($memberDetails['sumbangan_kebajikan_value']); ?>"></td>
                        </tr>
                        <tr>
                            <td>Simpanan Tetap</td>
                            <td><input type="number" step="0.01" name="simpanan_tetap_value" class="form-control" value="<?= htmlspecialchars($memberDetails['simpanan_tetap_value']); ?>"></td>
                        </tr>
                        <tr>
                            <td>Lain-lain</td>
                            <td><input type="number" step="0.01" name="lain_lain_value" class="form-control" value="<?= htmlspecialchars($memberDetails['lain_lain_value']); ?>"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <a href="/editPersonalInfo" class="btn btn-info btn-sm text-dark" style="background-color:#c7dfffe8; border-color:#1750a667; font-weight: bold;">
                <i class="bi bi-check2-square"style="font-size: 20px;"></i> Kemaskini Maklumat
            </a>
        </div>
    </form>
</div>
</body>
</html>
