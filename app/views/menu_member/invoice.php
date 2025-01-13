<!DOCTYPE html>
<html lang="en"></html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Penyata Kewangan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <h1 class="text-center mb-4">Penyata Kewangan</h1>

    <div class="container">
        <div class="card">
            <div class="card-body">
            <p class="card-text"><strong>Nama: </strong></p>
                <p class="card-text"><strong>No. IC: </strong></p>
                <p class="card-text"><strong>No. Ahli: </strong></p>
            </div>
        </div>
    </div>
        
    <div class="container mt-5">
        <div class="card">
        <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th rowspan="2"> Transaksi </th>
                            <th rowspan="2"> Tarikh </th>
                            <th rowspan="2"> Bulan Ceruman </th>
                            <th rowspan="2"> Catatan</th>
                            <th rowspan="2"> No.Akaun </th>
                        </tr>
                    </thead>

                    <tbody>
                       <?php if ($invoice): ?>
                       <?php foreach ($invoice as $invoices): ?>
                       
                    <tr>
                       <td><?= $invoices['TransactionID']; ?></td>
                       <td><?= $invoices['TransactionDate']; ?></td>
                       <td><?= $invoices['TransactionMonth']; ?></td>
                       <td><?= $invoices['Remarks']; ?></td>
                       <td><?= $invoices['account_no']; ?></td>
                    </tr>
                       <?php endforeach; ?>
                       <?php else: ?>
                    <tr>
                      <td colspan="5">No savings data found.</td>
                    </tr>
                       <?php endif; ?>
                    </tbody>
                        
        </div>
        </div>
    </div>
    </body>
</html>