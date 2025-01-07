<!DOCTYPE html>
<html lang="en">
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
                <p class="card-text"><strong>Nama: </strong><?= htmlspecialchars($memberDetails['name']) ?></p>
                <p class="card-text"><strong>No. IC: </strong><?= htmlspecialchars($memberDetails['id_number']) ?></p>
                <p class="card-text"><strong>No. Ahli: </strong><?= htmlspecialchars($memberDetails['membership_number']) ?></p>
            </div>
        </div>
    </div>
        
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Transaksi</th>
                            <th>Tarikh</th>
                            <th>Bulan Ceruman</th>
                            <th>Syer Majikan (RM)</th>
                            <th>Syer Pekerja (RM)</th>
                            <th>Jumlah (RM)</th>
                            <th>Akaun (RM)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($invoiceDetails)): ?>
                            <?php foreach ($invoiceDetails as $transaction): ?>
                                <tr>
                                    <td><?= htmlspecialchars($transaction['TransactionID']) ?></td>
                                    <td><?= htmlspecialchars($transaction['TransactionDate']) ?></td>
                                    <td><?= htmlspecialchars($transaction['TransactionMonth']) ?></td>
                                    <td><?= number_format($transaction['Syer_majikan'], 2) ?></td>
                                    <td><?= number_format($transaction['Syer_pekerja'], 2) ?></td>
                                    <td><?= number_format($transaction['total_amount'], 2) ?></td>
                                    <td><?= htmlspecialchars($transaction['account_no']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7">No transaction data available.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
