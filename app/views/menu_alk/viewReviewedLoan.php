<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Loan Applications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Pending Loan Applications</h1>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>Loan ID</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['LoanID'] ?></td>
                        <td>
                            <form action="/updateLoanApproval" method="post" class="d-inline">
                                <input type="hidden" name="loan_id" value="<?= $user['LoanID'] ?>">
                                <select name="new_status" class="form-select d-inline w-auto">
                                    <option value="Reviewed" <?= $user['approval'] === 'Reviewed' ? 'selected' : '' ?>>Reviewed</option>
                                    <option value="Disapproved">Disapproved</option>
                                </select>
                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            </form>
                        </td>
                        <td>
                            <a href="/viewLoanApplication?loan_id=<?= $user['LoanID'] ?>" class="btn btn-outline-info">Complete Form</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">No loan application to be reviewed</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
