<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Added Bootstrap Icons -->  
</head>
<body style="padding-top: 70px;">

    <!-- Navbar -->
    <nav class="navbar navbar-light fixed-top" style="background-color: rgb(236, 215, 145); padding: 0.3rem 1rem;">
        <div class="container-xxl">
            <a class="navbar-brand" href="/homepageMember" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
                Koperasi Kakitangan KADA
            </a>
    
            <!-- Profile, Dropdown, and Logout Button Group -->
            <div class="d-flex align-items-center">
                <!-- Dropdown Menu -->
                <div class="dropdown me-3">
                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#c8781cce; border-color:#a6801767; font-size: 20px; color: black;">
                        Pilihan
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/viewLoanForm">Mohon Pinjaman</a></li>
                            <li><a class="dropdown-item" href="/loanStatus">Semak Kelulusan Pinjaman</a></li>
                            <li><a class="dropdown-item" href="/showSaving">Semak Simpanan</a></li>
                            <li><a class="dropdown-item" href="/loanBalance">Baki Pinjaman</a></li>
                            <li><a class="dropdown-item" href="/viewInvoice">Semak Penyata</a></li>
                        </ul>
                    </div>
        
                    <!-- Logout Button -->
                    <a href="/logout" class="btn btn-info btn-sm text-dark" style="background-color:#c8781cce; border-color:#a6801767; font-weight: bold;">
                        <i class="bi bi-box-arrow-right" style="font-size: 20px;"></i> DAFTAR KELUAR
                    </a>
        
                    <!-- Profile Icon -->
                    <a href="#" class="nav-link text-dark ms-2">
                        <i class="bi bi-person-circle" style="font-size: 30px;"></i>
                    </a>
                </div>
            </div>
        </nav>

</head>
<body>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
    <title >Jadual Pembayaran Balik Pembiayaan</title>

    <div class="container my-4">
        <h2 class="text-center mb-4" style=" font-weight: bold; color: rgb(8, 8, 8); text-shadow: #d48933;">JADUAL PEMBAYARAN BALIK PEMBIAYAAN</h2>
        <table class="table table-bordered table-striped table-hover text-center bg-white">
            <thead class="table-light" style="background-color: #d48933;">
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
        <h1 class="text-center mb-4">BORANG PERMOHONAN PINJAMAN</h1>
        <div class="card shadow">
            <div class="card-body">
                <form action="/submitLoanApp" method="post" enctype="multipart/form-data">
                    <!-- Loan Type -->
                    <div class="mb-3">
                        <label for="loan_type" class="form-label">Jenis Pinjaman</label>
                        <select class="form-select" name="loan_type" id="loan_type" required>
                            <option value="" disabled selected>Sila Pilih Jenis Pinjaman</option>
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
                        <label for="other_loan_type" class="form-label">Jika 'Lain-lain', Nyatakan</label>
                        <input type="text" class="form-control" name="other_loan_type" id="other_loan_type" placeholder="Nyatakan Jenis Pinjaman Lain">
                    </div>

                    <!-- Loan Amount -->
                    <div class="mb-3">
                        <label for="loan_amount" class="form-label">Jumlah Pinjaman (RM)</label>
                        <input type="number" step="0.01" class="form-control" name="loan_amount" id="loan_amount" placeholder="Masukkan Jumlah Pinjaman" required>
                    </div>

                    <!-- Repayment Period -->
                    <div class="mb-3">
                        <label for="repayment_period_months" class="form-label">Tempoh Bayaran Balik (bulan) </label>
                        <input type="number" class="form-control" name="repayment_period_months" id="repayment_period_months" placeholder="Nyatakan Tempoh Bayaran Balik Bulanan" required>
                    </div>

                    <!-- Monthly Installment -->
                    <div class="mb-3">
                        <label for="monthly_installment" class="form-label">Ansuran Bulanan (RM)</label>
                        <input type="number" step="0.01" class="form-control" name="monthly_installment" id="monthly_installment" placeholder="Masukkan Ansuran Bulanan" required>
                    </div>
                    
                    <!-- Bank Name -->
                    <div class="mb-3">
                        <label for="bank_name" class="form-label">Nama Bank</label>
                        <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="Nyatakan Nama Bank" required>
                    </div>

                    <!-- Account Number -->
                    <div class="mb-3">
                        <label for="account_number" class="form-label">Nombor Akaun</label>
                        <input type="text" class="form-control" name="account_number" id="account_number" placeholder="Masukkan Nombor Akaun" required>
                    </div>

                    <!-- Download Loan Document Template -->
                    <div class="mb-3">
                        <a href="/download_loan_template" class="btn btn-outline-primary">Muat Turun Templat Dokumen Borang Permohonan Pinjaman</a>
                    </div>

                    <!-- Upload Document -->
                    <div class="mb-3">
                        <label for="uploaded_file_path" class="form-label">Muat Naik Dokumen Lengkap</label>
                        <input type="file" class="form-control" name="uploaded_file_path" id="uploaded_file_path" accept=".pdf" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success w-100">HANTAR PERMOHONAN</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
