<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <?php if (isset($_SESSION['user_id'])): ?>
            <p class="text-middle">Welcome, <?= htmlspecialchars($_SESSION['user_name']); ?>! 
                <div class="text-end">
                    <a href="/logout" class="btn btn-danger">Logout</a>
                </div>
            </p>
        <?php else: ?>
            <p class="text-end"><a href="/login" class="btn btn-link">Login</a> <a href="/register" class="btn btn-link">Register</a></p>
        <?php endif; ?>

        <h1 class="mb-4">Applicants</h1>
        <a href="/create" class="btn btn-success mb-3">Add Applicant</a>
        <table class="table table-bordered bg-white">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>ID Number</th>
                    <th>Marital Status</th>
                    <th>Gender</th>
                    <th>Religion</th>
                    <th>Ethnicity</th>
                    <th>Home Address</th>
                    <th>Postcode</th>
                    <th>State</th>
                    <th>Staff Number</th>
                    <th>PF Number</th>
                    <th>Position Grade</th>
                    <th>Office Address</th>
                    <th>Office Postcode</th>
                    <th>City</th>
                    <th>Phone (Office)</th>
                    <th>Phone (Mobile)</th>
                    <th>Phone (Home)</th>
                    <th>Monthly Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['id_number']; ?></td>
                    <td><?= $user['marital_status']; ?></td>
                    <td><?= $user['gender']; ?></td>
                    <td><?= $user['religion']; ?></td>
                    <td><?= $user['ethnicity']; ?></td>
                    <td><?= $user['home_address']; ?></td>
                    <td><?= $user['postcode']; ?></td>
                    <td><?= $user['state']; ?></td>
                    <td><?= $user['staff_number']; ?></td>
                    <td><?= $user['pf_number']; ?></td>
                    <td><?= $user['position_grade']; ?></td>
                    <td><?= $user['office_address']; ?></td>
                    <td><?= $user['office_postcode']; ?></td>
                    <td><?= $user['city']; ?></td>
                    <td><?= $user['phone_office']; ?></td>
                    <td><?= $user['phone_mobile']; ?></td>
                    <td><?= $user['phone_home']; ?></td>
                    <td><?= $user['monthly_salary']; ?></td>
                    <td>
                        <a href="/edit/<?= $user['applicant_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/delete/<?= $user['applicant_id']; ?>" method="POST" class="d-inline">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
