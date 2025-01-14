<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Koperasi(STAFF)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Laporan Koperasi(STAFF)</h1>

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
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php for ($i = 2020; $i <= 2030; $i++): ?>
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
                                
                    foreach ($calendar as $day) {
                        if ($day === null) {
                            $week[] = '<td></td>';
                        } else {
                            $week[] = '<td>
                                <a href="/user/calendarWithApplications?day=' . $day . '&month=' . $currentMonth . '&year=' . $currentYear . '" 
                                    class="btn btn-link">' . $day . '</a>
                            </td>';
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
            
        <!-- Applications List -->
        <h2 class="text-center mt-5">Applications for <?= htmlspecialchars($monthName) ?> <?= htmlspecialchars($selectedDay ?? '') ?> <?= htmlspecialchars($currentYear) ?></h2>
            
        <table class="table table-bordered table-striped text-center mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>ID Number</th>
                    <th>Document</th>
                    <th>Approval Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($applications)): ?>
                    <?php foreach ($applications as $application): ?>
                        <tr>
                            <td><?= htmlspecialchars($application['name']) ?></td>
                            <td><?= htmlspecialchars($application['id_number']) ?></td>
                            <td><a href="/viewMembershipForm?id=<?= htmlspecialchars($application['applicant_id']) ?>">View</a></td>
                            <td><?= htmlspecialchars($application['approval']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No applications found for this date.</td>
                    </tr>
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