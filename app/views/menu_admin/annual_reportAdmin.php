<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Laporan Koperasi KADA</title>

    <style>
        body {
            background-color: #f4f6f9;
        }

        section {
            padding: 60px 0;
        }

        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background: linear-gradient(90deg, rgba(33, 150, 243, 1) 0%, rgba(3, 169, 244, 1) 100%);
            border: none;
        }

        .btn-primary:hover {
            background: rgba(3, 169, 244, 0.9);
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card h4 {
            font-weight: bold;
        }

        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary w-100">
        <div class="container">
            <a href="/homepageAdmin" class="navbar-brand">
                <span class="fw-bold text-white">Koperasi Kakitangan KADA</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" 
                    aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/logout" class="btn btn-info btn-sm text-dark">
                            <i class="bi bi-box-arrow-right" style="font-size: 19px;"></i>
                            DAFTAR KELUAR 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark ms-2">
                            <i class="bi bi-person-circle" style="font-size: 20px;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <!-- Report Heading -->
        <h1 class="text-center mb-4">Laporan Koperasi</h1>

        <!-- Calendar Section -->
        <div class="card mb-5">
            <div class="card-body">
                <h2 class="text-center text-primary mb-4"><?= htmlspecialchars($monthName) . ' ' . $currentYear ?></h2>

                <!-- Calendar Navigation -->
                <div class="text-center mb-4">
                    <a href="/user/calendar?month=<?= $currentMonth > 1 ? $currentMonth - 1 : 12 ?>&year=<?= $currentMonth > 1 ? $currentYear : $currentYear - 1 ?>" class="btn btn-outline-primary me-2">
                        <i class="bi bi-chevron-left"></i> Tahun Sebelumnya
                    </a>
                    <a href="/user/calendar?month=<?= $currentMonth < 12 ? $currentMonth + 1 : 1 ?>&year=<?= $currentMonth < 12 ? $currentYear : $currentYear + 1 ?>" class="btn btn-outline-primary">
                        Tahun Seterusnya <i class="bi bi-chevron-right"></i>
                    </a>
                    <div class="dropdown d-inline ms-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Tahun 
                        </button>
                        <ul class="dropdown-menu overflow-auto" style="max-height: 200px;" aria-labelledby="dropdownMenuButton">
                            <?php for ($i = 1980; $i <= 2100; $i++): ?>
                                <li><a class="dropdown-item" href="/user/calendar?month=<?= $currentMonth ?>&year=<?= $i ?>"><?= $i ?></a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>

                <!-- Calendar Grid -->
                <table class="table table-bordered text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>Ahad</th>
                            <th>Isnin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Khamis</th>
                            <th>Jumaat</th>
                            <th>Sabtu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $week = [];
                        $dayCount = 0;

                        foreach ($calendar as $key => $day) {
                            if ($day === null) {
                                $week[] = '<td></td>';
                            } else {
                                $isSelected = $selectedDay == $day;
                                $week[] = '<td><a href="/user/calendar?month=' . $currentMonth . '&year=' . $currentYear . '&day=' . $day . '" class="btn ' . ($isSelected ? 'btn-info' : 'btn-link') . '">' . $day . '</a></td>';
                            }

                            $dayCount++;
                            if ($dayCount % 7 == 0) {
                                echo '<tr>' . implode('', $week) . '</tr>';
                                $week = [];
                            }
                        }

                        if (!empty($week)) {
                            echo '<tr>' . implode('', $week) . '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Reports Section -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-primary">Laporan Bulanan</h4>
                        <canvas id="monthlyReportChart"></canvas>
                        <p class="mt-3">Syer Majikan: <strong>RM <?= $monthlyReport['total_syer_majikan'] ?? '0' ?></strong></p>
                        <p>Syer Pekerja: <strong>RM <?= $monthlyReport['total_syer_pekerja'] ?? '0' ?></strong></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-primary">Laporan Tahunan</h4>
                        <canvas id="annualReportChart"></canvas>
                        <p class="mt-3">Syer Majikan: <strong>RM <?= $annualReport['total_syer_majikan'] ?? '0' ?></strong></p>
                        <p>Syer Pekerja: <strong>RM <?= $annualReport['total_syer_pekerja'] ?? '0' ?></strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Applications Summary -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-primary">Laporan Permohanan</h4>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Belum Selesai <span class="badge bg-warning"> <?= $applicationCounts['Pending'] ?> </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Telah Disemak <span class="badge bg-info"> <?= $applicationCounts['Reviewed'] ?> </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Diluluskan <span class="badge bg-success"> <?= $applicationCounts['Approved'] ?> </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Tidak Lulus <span class="badge bg-danger"> <?= $applicationCounts['Disapproved'] ?> </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <canvas id="applicationsSummaryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back button -->
    <div class="text-center mt-4">
                <a href="/homepageAdmin" class="btn btn-info">
                    <i class="bi bi-arrow-left-circle"></i> Kembali Semula
                </a>
            </div>
    <script>
        // Monthly Report Chart
        const monthlyCtx = document.getElementById('monthlyReportChart').getContext('2d');
        new Chart(monthlyCtx, {
            type: 'bar',
            data: {
                labels: ['Syer Majikan', 'Syer Pekerja'],
                datasets: [{
                    label: 'Amount (RM)',
                    data: [<?= $monthlyReport['total_syer_majikan'] ?? 0 ?>, <?= $monthlyReport['total_syer_pekerja'] ?? 0 ?>],
                    backgroundColor: ['rgba(54, 162, 235, 0.7)', 'rgba(75, 192, 192, 0.7)']
                }]
            }
        });

        // Annual Report Chart
        const annualCtx = document.getElementById('annualReportChart').getContext('2d');
        new Chart(annualCtx, {
            type: 'bar',
            data: {
                labels: ['Syer Majikan', 'Syer Pekerja'],
                datasets: [{
                    label: 'Amount (RM)',
                    data: [<?= $annualReport['total_syer_majikan'] ?? 0 ?>, <?= $annualReport['total_syer_pekerja'] ?? 0 ?>],
                    backgroundColor: ['rgba(255, 206, 86, 0.7)', 'rgba(153, 102, 255, 0.7)']
                }]
            }
        });

        // Applications Summary Chart
        const applicationsSummaryCtx = document.getElementById('applicationsSummaryChart').getContext('2d');
        new Chart(applicationsSummaryCtx, {
            type: 'pie',
            data: {
                labels: ['Belum Selesai', 'Telah Disemak', 'Diluluskan', 'Tidak Lulus'],
                datasets: [{
                    data: [<?= $applicationCounts['Pending'] ?>, <?= $applicationCounts['Reviewed'] ?>, <?= $applicationCounts['Approved'] ?>, <?= $applicationCounts['Disapproved'] ?>],
                    backgroundColor: ['#f39c12', '#17a2b8', '#28a745', '#dc3545']
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
