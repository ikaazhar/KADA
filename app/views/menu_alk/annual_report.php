<!-- calendar.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

                // Loop through each day of the calendar
                foreach ($calendar as $key => $day) {
                    // If it's an empty slot, show an empty table cell
                    if ($day === null) {
                        $week[] = '<td></td>';
                    } else {
                        // Show the day number as a clickable button
                        $week[] = '<td><button class="btn btn-link" onclick="alert(\'You clicked on ' . $day . ' ' . $monthName . ' ' . $currentYear . '\')">' . $day . '</button></td>';
                    }

                    $dayCount++;

                    // If the week is full (7 days), print the week and reset the row
                    if ($dayCount % 7 == 0) {
                        echo '<tr>' . implode('', $week) . '</tr>';
                        $week = [];
                    }
                }

                // Add remaining days if the last week is not full
                if (!empty($week)) {
                    echo '<tr>' . implode('', $week) . '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>