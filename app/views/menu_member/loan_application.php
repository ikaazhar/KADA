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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadual Pembayaran Balik Pembiayaan</title>

    <div class="container my-4">
        <h1 class="text-center mb-4">Jadual Pembayaran Balik Pembiayaan</h1>
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>KADAR KEUNTUNGAN</th>
                    <th colspan="6">4.20%</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Tempoh (Tahun)</th>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <th>Tempoh (Bulan)</th>
                    <td>12</td>
                    <td>24</td>
                    <td>36</td>
                    <td>48</td>
                    <td>60</td>
                    <td>72</td>
                </tr>
                <tr>
                    <th>Jumlah Pembayaran</th>
                    <td colspan="6">Ansuran Bulanan</td>
                </tr>
                <tr>
                    <td>1,000.00</td>
                    <td>86.83</td>
                    <td>45.17</td>
                    <td>31.28</td>
                    <td>24.33</td>
                    <td>20.17</td>
                    <td>17.39</td>
                </tr>
                <tr>
                    <td>2,000.00</td>
                    <td>173.67</td>
                    <td>90.33</td>
                    <td>62.56</td>
                    <td>48.67</td>
                    <td>40.33</td>
                    <td>34.78</td>
                </tr>
                <tr>
                    <td>3,000.00</td>
                    <td>260.50</td>
                    <td>135.50</td>
                    <td>93.83</td>
                    <td>73.00</td>
                    <td>60.50</td>
                    <td>52.17</td>
                </tr>
                <tr>
                    <td>4,000.00</td>
                    <td>347.33</td>
                    <td>180.67</td>
                    <td>125.11</td>
                    <td>97.33</td>
                    <td>80.67</td>
                    <td>69.56</td>
                </tr>
                <tr>
                    <td>5,000.00</td>
                    <td>434.17</td>
                    <td>225.83</td>
                    <td>156.39</td>
                    <td>121.67</td>
                    <td>100.83</td>
                    <td>86.94</td>
                </tr>
                <tr>
                    <td>6,000.00</td>
                    <td>521.00</td>
                    <td>271.00</td>
                    <td>187.67</td>
                    <td>146.00</td>
                    <td>121.00</td>
                    <td>104.33</td>
                </tr>
                <tr>
                    <td>7,000.00</td>
                    <td>607.83</td>
                    <td>316.17</td>
                    <td>218.94</td>
                    <td>170.33</td>
                    <td>141.17</td>
                    <td>121.72</td>
                </tr>
            </tbody>
        </table>
    </div>

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
