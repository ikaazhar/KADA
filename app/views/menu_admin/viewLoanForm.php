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
                        <input type="text" class="form-control" id="loan_type" value="<?= $loanDetails['LoanType'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="loan_type" class="form-label">Other Loan Type</label>
                        <input type="text" class="form-control" id="other_loan_type" value="<?= $loanDetails['OtherLoanType'] !== null ? $loanDetails['OtherLoanType'] : 'Tiada' ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="loan_amount" class="form-label">Loan Amount</label>
                        <input type="text" class="form-control" id="loan_amount" value="<?= $loanDetails['LoanAmount'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="loan_type" class="form-label">Repayment Period (Months):</label>
                        <input type="text" class="form-control" id="payment_period" value="<?= $loanDetails['RepaymentPeriodMonths'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="loan_type" class="form-label">Monthly Installment:</label>
                        <input type="text" class="form-control" id="monthly_installment" value="<?= $loanDetails['MonthlyInstallment'] ?>" readonly>
                    </div>
                    <!-- Uploaded File -->
                    <div class="mb-3">
                        <label for="uploaded_file" class="form-label">Dokumen Pengesahan:</label>
                        <?php if ($loanDetails['UploadedFilePath']): ?>
                            <a href="<?= $loanDetails['UploadedFilePath'] ?>" class="btn btn-outline-primary" download>Download Uploaded File</a>
                        <?php else: ?>
                            <p class="text-danger">No file uploaded</p>
                        <?php endif; ?>
                    </div>
                    <!-- More details as required -->
                    <div class="mb-3">
                        <label for="loan_type" class="form-label">Bank Name:</label>
                        <input type="text" class="form-control" id="bank_name" value="<?= $loanDetails['BankName'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="loan_type" class="form-label">Account Number:</label>
                        <input type="text" class="form-control" id="acc_num" value="<?= $loanDetails['AccountNumber'] ?>" readonly>
                    </div>
                </form>
            </div>
        </div>

        <!-- Personal Details Section -->
        <?php if (!empty($memberDetails)): ?>
        <div class="container my-5">
            <h1 class="text-center mb-4">Maklumat Pemohon</h1>
            <form action="" method="GET">
                <!-- Personal Details -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($memberDetails['name']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="id_number" class="form-label">Nombor K/P:</label>
                        <input type="text" class="form-control" id="id_number" name="id_number" value="<?= htmlspecialchars($memberDetails['id_number']); ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($memberDetails['email']); ?>" required>
                            </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="marital_status" class="form-label">Taraf Perkahwinan</label>
                        <input type="text" class="form-control" id="marital_status" name="marital_status" value="<?= htmlspecialchars($memberDetails['marital_status']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="gender" class="form-label">Jantina</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="<?= htmlspecialchars($memberDetails['gender']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="religion" class="form-label">Agama</label>
                        <input type="text" class="form-control" id="religion" name="religion" value="<?= htmlspecialchars($memberDetails['religion']); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="ethnicity" class="form-label">Bangsa</label>
                        <input type="text" class="form-control" id="ethnicity" name="ethnicity" value="<?= htmlspecialchars($memberDetails['ethnicity']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="home_address" class="form-label">Alamat Rumah</label>
                        <input type="text" class="form-control" id="home_address" name="home_address" value="<?= htmlspecialchars($memberDetails['home_address']); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="postcode" class="form-label">Poskod</label>
                        <input type="text" class="form-control" id="postcode" name="postcode" value="<?= htmlspecialchars($memberDetails['postcode']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="state" class="form-label">Negeri</label>
                        <input type="text" class="form-control" id="state" name="state" value="<?= htmlspecialchars($memberDetails['state']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="city" class="form-label">Bandar</label>
                        <input type="text" class="form-control" id="city" name="city" value="<?= htmlspecialchars($memberDetails['city']); ?>" required>
                    </div>
                </div>

                <!-- Office Details -->
                <h4 class="mt-4">Maklumat Pejabat</h4>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="membership_number" class="form-label">No. Anggota</label>
                        <input type="text" class="form-control" id="membership_number" name="membership_number" value="<?= htmlspecialchars($memberDetails['membership_number']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="pf_number" class="form-label">No. PF</label>
                        <input type="text" class="form-control" id="pf_number" name="pf_number" value="<?= htmlspecialchars($memberDetails['pf_number']); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="position_grade" class="form-label">Jawatan & Gred</label>
                        <input type="text" class="form-control" id="position_grade" name="position_grade" value="<?= htmlspecialchars($memberDetails['position_grade']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="office_address" class="form-label">Alamat Pejabat</label>
                        <input type="text" class="form-control" id="office_address" name="office_address" value="<?= htmlspecialchars($memberDetails['office_address']); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="office_postcode" class="form-label">Poskod</label>
                        <input type="text" class="form-control" id="office_postcode" name="office_postcode" value="<?= htmlspecialchars($memberDetails['office_postcode']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone_office" class="form-label">No. Tel/Fax</label>
                        <input type="text" class="form-control" id="phone_office" name="phone_office" value="<?= htmlspecialchars($memberDetails['phone_office']); ?>" >
                    </div>
                </div>

                <!-- Contact Details -->
                <h4 class="mt-4">Contact Details</h4>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone_mobile" class="form-label">No. Tel Bimbit</label>
                        <input type="text" class="form-control" id="phone_mobile" name="phone_mobile" value="<?= htmlspecialchars($memberDetails['phone_mobile']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone_home" class="form-label">No. Tel Rumah</label>
                        <input type="text" class="form-control" id="phone_home" name="phone_home" value="<?= htmlspecialchars($memberDetails['phone_home']); ?>" >
                    </div>
                </div>
            </form>
        </div>
        <?php else: ?>
        <div class="alert alert-warning text-center">
            Personal details not found for this applicant.
        </div>
        <?php endif; ?>
    </div>
</body>
</html>