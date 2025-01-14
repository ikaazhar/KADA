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
                            <a class="nav-link text-dark" href="/viewLoanForm"> Semak Dokumen Permohonan Pinjaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/reviewMembershipForm"> Semak Dokumen Permohonan Ahli </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/viewSaving"> Rekod Kewangan Tahunan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href=""> Laporan Koperasi</a>
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

        <div class="container my-4">
        <br><br><br><br><h1 class="text-center mb-4">Senarai Permohonan Ahli</h1>
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>No. KP</th>
                    <th>Dokumen Permohonan Ahli</th>
                    <th>Status Permohonan</th>
                    <th>Simpan Maklumat</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($viewMembershipFormList)): ?>
            <?php foreach ($viewMembershipFormList as $form): ?>
                <tr>
                    <td><?= $form['name'] ?></td>
                    <td><?= $form['id_number'] ?></td>
                    <td><a href="/viewMembershipForm?id_number=<?= $form['id_number'] ?>">Dokumen_Permohonan_Ahli</a></td>
                    <td>
                    <form action="/storeMembershipFormStatus" method="POST">
                        <label for="approval" class="form-label"></label>
                        <input type="hidden" name="id_number" value="<?= $form['id_number'] ?>">
                        <select class="form-select" id="approval" name="approval" required>
                            <option value="Pending" <?= $form['approval'] === 'Pending' ? 'selected' : '' ?>>Pending</option>
                            <option value="Reviewed" <?= $form['approval'] === 'Reviewed' ? 'selected' : '' ?>>Reviewed</option>
                            <option value="Disapproved" <?= $form['approval'] === 'Disapproved' ? 'selected' : '' ?>>Disapproved</option>
                        </select>
                        </td>
                        <td>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </td>
                    </form>
                </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        </div>
        <div class="text-center">
            <a href="/homepageAdmin" class="btn btn-info btn-sm">Back</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>