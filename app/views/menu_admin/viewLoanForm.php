<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Loan Application Details</h1>
    <div class="card shadow">
        <div class="card-body">
            <form>
                <!-- Loan Details -->
                <div class="mb-3">
                    <label for="loan_type" class="form-label">Loan Type</label>
                    <input type="text" class="form-control" id="loan_type" value="<?= $users['LoanType'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="loan_type" class="form-label">Other Loan Type</label>
                    <input type="text" class="form-control" id="other_loan_type" value="<?= $users['OtherLoanType'] !== null ? $users['OtherLoanType'] : 'Tiada' ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="loan_amount" class="form-label">Loan Amount</label>
                    <input type="text" class="form-control" id="loan_amount" value="<?= $users['LoanAmount'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="loan_type" class="form-label">Repayment Period (Months):</label>
                    <input type="text" class="form-control" id="payment_period" value="<?= $users['RepaymentPeriodMonths'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="loan_type" class="form-label">Monthly Installment:</label>
                    <input type="text" class="form-control" id="monthly_installment" value="<?= $users['MonthlyInstallment'] ?>" readonly>
                </div>
                <!-- Uploaded File -->
                <div class="mb-3">
                    <label for="uploaded_file" class="form-label">Dokumen Pengesahan:</label>
                    <?php if ($users['UploadedFilePath']): ?>
                        <a href="<?= $users['UploadedFilePath'] ?>" class="btn btn-outline-primary" download>Download Uploaded File</a>
                    <?php else: ?>
                        <p class="text-danger">No file uploaded</p>
                    <?php endif; ?>
                </div>
                <!-- More details as required -->
                <div class="mb-3">
                    <label for="loan_type" class="form-label">Bank Name:</label>
                    <input type="text" class="form-control" id="bank_name" value="<?= $users['BankName'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="loan_type" class="form-label">Account Number:</label>
                    <input type="text" class="form-control" id="acc_num" value="<?= $users['AccountNumber'] ?>" readonly>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
