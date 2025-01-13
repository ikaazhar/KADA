<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyata Kewangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles for Background and Text */
        body {
            font-family: 'Poppins', sans-serif;
            background: url('bgimage2.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            padding-top: 30px;
            margin: 0;
        }

        .navbar {
            background-color: #f3d78a;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .card {
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .card-text {
            font-size: 1.2rem;
            color: #333;
        }

        h1 {
            font-family: 'Times New Roman', Times, serif;
            font-weight: 700;
            font-size: 3.5rem;
            color: #ffffff;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); /* Subtle shadow for depth */
            margin-bottom: 40px;
        }

        .table {
            color: #491b00;
        }

        .table th, .table td {
            font-size: 1.1rem;
            vertical-align: middle;
        }

        .table-bordered {
            border: 2px solid #ddd;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table-dark {
            background-color: #343a40;
            color: white;
        }

        .table th {
            font-weight: bold;
            background-color: #9e7400;
        }

        .table td {
            color: #333333;
        }

        /* Custom Button Styling */
        .btn-custom {
            background-color: #dd7672;
            border-color: #1cc88a;
            font-weight: 600;
            padding: 14px 30px;
            font-size: 1.1rem;
            text-transform: uppercase;
            border-radius: 30px;
            letter-spacing: 2px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #1cc88a;
            border-color: #17a673;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <!-- Main Content -->
    <div class="container text-center mt-5">
        <h1>Penyata Kewangan</h1>

        <!-- Member Details Card -->
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Nama: </strong></p>
                <p class="card-text"><strong>No. IC: </strong></p>
                <p class="card-text"><strong>No. Ahli: </strong></p>
            </div>
        </div>

        <!-- Transaction Table -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th rowspan="2"> Transaksi </th>
                            <th rowspan="2"> Tarikh </th>
                            <th rowspan="2"> Bulan Caruman </th>
                            <th rowspan="2"> Catatan</th>
                            <th rowspan="2"> No. Akaun </th>
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
                                <td colspan="5">Tiada data disimpan.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
