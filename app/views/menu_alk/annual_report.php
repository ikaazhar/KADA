<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annual Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center"><?= htmlspecialchars($monthName) . ' ' . $currentYear ?></h2>

        <!-- Calendar navigation -->
        <div class="text-center mb-3">
            <!-- Check if it's the first month of the year to prevent negative months -->
            <a href="/user/calendar?month=<?= $currentMonth > 1 ? $currentMonth - 1 : 12 ?>&year=<?= $currentMonth > 1 ? $currentYear : $currentYear - 1 ?>" class="btn btn-primary">Previous Month</a>
            
            <!-- Check if it's the last month of the year to prevent overflow -->
            <a href="/user/calendar?month=<?= $currentMonth < 12 ? $currentMonth + 1 : 1 ?>&year=<?= $currentMonth < 12 ? $currentYear : $currentYear + 1 ?>" class="btn btn-primary">Next Month</a>
            
            <!-- Year Dropdown -->
            <div class="dropdown d-inline">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Select Year
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
            <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
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

        <!-- Monthly and Annual Reports -->
        <div class="mt-5">
            <h3>Reports</h3>
        
            <br><h4>Monthly Report (Up to <?= $selectedDay ?: 'Full Month' ?> <?= $monthName ?>)</h4>
            <p>Syer Majikan: RM <?= isset($monthlyReport['total_syer_majikan']) ? $monthlyReport['total_syer_majikan'] : '0' ?></p>
            <p>Syer Pekerja: RM <?= isset($monthlyReport['total_syer_pekerja']) ? $monthlyReport['total_syer_pekerja'] : '0' ?></p>


            <h4>Annual Report (<?= $currentYear ?>)</h4>
            <p>Syer Majikan: RM <?= isset($annualReport['total_syer_majikan']) ? $annualReport['total_syer_majikan'] : '0' ?></p>
            <p>Syer Pekerja: RM <?= isset($annualReport['total_syer_pekerja']) ? $annualReport['total_syer_pekerja'] : '0' ?></p>
            </div>
    </div>
            <!-- Back to Main Menu -->
            <a href="/homepageAdmin" class="btn btn-primary">Back to Main Menu</a>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>