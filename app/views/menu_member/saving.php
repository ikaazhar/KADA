<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maklumat Simpanan Ahli</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <h1 class="text-center">SIMPANAN DAN SYER PERIBADI</h1>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <!-- Dynamically populated member details -->
                <p class="card-text"><strong>Nama: </strong><?php echo $data['memberDetails']['name']; ?></p>
                <p class="card-text"><strong>No. IC: </strong><?php echo $data['memberDetails']['id_number']; ?></p>
                <p class="card-text"><strong>No. Ahli: </strong><?php echo $data['memberDetails']['membership_number']; ?></p>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <!-- Card for Maklumat Simpanan Ahli -->
        <br><h1 class="text-center mb-4">Simpanan Peribadi Ahli</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th rowspan="2">Nombor akaun </th>
                            <th rowspan="2">Baki Simpanan <br>(RM)</th>
                            <th colspan="3">Tarikh Kemaskini</th>
                        </tr>

                    </thead>
                    <tbody>
                       <?php if ($savings): ?>
                       <?php foreach ($savings as $saving): ?>
                    
                    <tr>
                       <td><?= $saving['account_no']; ?></td>
                       <td><?= number_format($saving['balance'], 2); ?></td>
                       <td><?= $saving['created_at']; ?></td>
                    </tr>
                       <?php endforeach; ?>
                       <?php else: ?>
                    <tr>
                      <td colspan="6">No savings data found.</td>
                    </tr>
                       <?php endif; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <!-- Card for Maklumat Simpanan Ahli -->
        <br><h1 class="text-center mb-4">Syer Ahli</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th rowspan="2"> Syer Majikan </th>
                            <th rowspan="2">Syer Pekerja</th>
                        </tr>

                    </thead>
                    <tbody>
                       <?php if ($share): ?>
                       <?php foreach ($share as $shares): ?>
                    
                    <tr>
                       <td><?= number_format($shares['Syer_majikan'], 2); ?></td>
                       <td><?= number_format($shares['Syer_pekerja'], 2); ?></td>
                    </tr>
                       <?php endforeach; ?>
                       <?php else: ?>
                    <tr>
                      <td colspan="6">No savings data found.</td>
                    </tr>
                       <?php endif; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>