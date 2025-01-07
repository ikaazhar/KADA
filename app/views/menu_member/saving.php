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

    <h1 class="text-center">PENYATA KEWANGAN AHLI KOPERASI KAKITANGAN KADA KELANTAN</h1>

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
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th rowspan="2">Syer Majikan <br>(RM)</th>
                            <th rowspan="2">Syer Pekerja <br>(RM)</th>
                            <th rowspan="2">Jumlah <br>(RM)</th>
                            <th colspan="3">Baki Simpanan</th>
                        </tr>

                        <tr class="table-dark">
                            <th>Akaun 1 (RM)</th>
                            <th>Akaun 2 (RM)</th>
                            <th>Akaun 3 (RM)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through the savings data and display each row -->
                        <?php if ($savings): ?>
                            <?php foreach ($savings as $saving): ?>
                                <tr>
                                    <td><?= $saving['Syer_majikan']; ?></td>
                                    <td><?= $saving['Syer_pekerja']; ?></td>
                                    <td><?= $saving['Jumlah']; ?></td>
                                    <td><?= $saving['Akaun_1']; ?></td>
                                    <td><?= $saving['Akaun_2']; ?></td>
                                    <td><?= $saving['Akaun_3']; ?></td>
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