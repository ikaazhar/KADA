<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Loan Application</h1>
        <div class="card shadow">
            <div class="card-body">
                <form action="/loanApply" method="post" enctype="multipart/form-data">
                    <!-- Loan Type -->
                    <div class="mb-3">
                        <label for="loan_type" class="form-label">Loan Type</label>
                        <select class="form-select" name="loan_type" id="loan_type" required>
                            <option value="" disabled selected>Select Loan Type</option>
                            <option value="Al-Bai">Al-Bai</option>
                            <option value="Al-Inah">Al-Inah</option>
                            <option value="Skim Khas">Skim Khas</option>
                            <option value="Karnival Musim Istimewa">Karnival Musim Istimewa</option>
                            <option value="Baik Pulih Kenderaan">Baik Pulih Kenderaan</option>
                            <option value="Cukai Jalan">Cukai Jalan</option>
                            <option value="Lain-Lain">Lain-Lain</option>
                        </select>
                    </div>

                    <!-- Other Loan Type -->
                    <div class="mb-3">
                        <label for="other_loan_type" class="form-label">If "Lain-Lain", specify</label>
                        <input type="text" class="form-control" name="other_loan_type" id="other_loan_type" placeholder="Enter other loan type">
                    </div>

                    <!-- Loan Amount -->
                    <div class="mb-3">
                        <label for="loan_amount" class="form-label">Loan Amount</label>
                        <input type="number" step="0.01" class="form-control" name="loan_amount" id="loan_amount" placeholder="Enter loan amount" required>
                    </div>

                    <!-- Repayment Period -->
                    <div class="mb-3">
                        <label for="repayment_period_months" class="form-label">Repayment Period (Months)</label>
                        <input type="number" class="form-control" name="repayment_period_months" id="repayment_period_months" placeholder="Enter repayment period in months" required>
                    </div>

                    <!-- Monthly Installment -->
                    <div class="mb-3">
                        <label for="monthly_installment" class="form-label">Monthly Installment</label>
                        <input type="number" step="0.01" class="form-control" name="monthly_installment" id="monthly_installment" placeholder="Enter monthly installment" required>
                    </div>

                    <!-- Download Loan Document Template -->
                    <div class="mb-3">
                        <a href="/download_loan_template" class="btn btn-outline-primary">Download Loan Document Template</a>
                    </div>

                    <!-- Upload Document -->
                    <div class="mb-3">
                        <label for="uploaded_file_path" class="form-label">Upload Completed Document</label>
                        <input type="file" class="form-control" name="uploaded_file_path" id="uploaded_file_path" accept=".pdf" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success w-100">Submit Application</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
