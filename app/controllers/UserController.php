<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class UserController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function buttonpage()
    {
        $this->view('auth/buttonpage');
    }

    public function homepage()
    {
        $this->view('auth/homepage');
    }

    public function register()
    {
        $this->view('auth/register');
    }

    public function loginMember()
    {
        $this->view('auth/login_ahli');
    }

    public function loginStaff()
    {
        $this->view('auth/login_staff');
    }

    public function loginALK()
    {
        $this->view('auth/login_alk');
    }

    public function nonActiveAcc()
    {
        $this->view('auth/nonActiveMember');
    }

    public function authenticateMember()
    {
        $member_id = $_POST['member_id'];
        $password = $_POST['password'];
    
        $user = $this->user->findByMemberID($member_id);
    
        if ($user && password_verify($password, $user['password'])) {
            if($user['memberStatus'] == "Active"){
                session_start();
                $_SESSION['user_id'] = $user['member_id'];
                $_SESSION['role'] = $user['user_role'];
                header('Location: /homepageMember');
            }
            else{
                header('Location: /nonActiveAcc');
            }
        } else {
            echo "<h3 style='color: red;'>Invalid email or password. Please try again.</h3>";
            echo "<a href='/login' style='color: blue; text-decoration: underline;'>Back to Login</a>";
        }
    }

    public function authenticateStaff()
    {
        $admin_ID = $_POST['admin_id'];
        $password = $_POST['password'];
    
        $user = $this->user->findByStaffID($admin_ID);
    
        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['admin_id'];
            $_SESSION['role'] = $user['user_role'];
            //$_SESSION['user_name'] = $user['name'];
            header('Location: /homepageAdmin');
        } else {
            echo "<h3 style='color: red;'>Invalid email or password. Please try again.</h3>";
            echo "<a href='/login' style='color: blue; text-decoration: underline;'>Back to Login</a>";
        }
    }

    public function authenticateALK()
    {
        $alk_id = $_POST['alk_id'];
        $password = $_POST['password'];
    
        $user = $this->user->findByALKID($alk_id);
    
        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['alk_id'];
            $_SESSION['role'] = $user['user_role'];
            //$_SESSION['user_name'] = $user['name'];
            header('Location: /homepageALK');
        } else {
            echo "<h3 style='color: red;'>Invalid email or password. Please try again.</h3>";
            echo "<a href='/login' style='color: blue; text-decoration: underline;'>Back to Login</a>";
        }
    }

    public function create()
    {
        $this->view('users/member_form');
    }

    public function store() {
        $stmt = $this->user->create($_POST);
        $applicantId = $this->user->getLastInsertedId(); // Retrieve the last inserted ID
        header("Location: /createFamilyDetails?applicant_id=$applicantId");
        exit;
    }
    
    public function createMembershipForm()
    {
        $this->view('users/MembershipForm');
    }

    public function storeMembershipForm()
    {
        try {
            // Save the form details
            $stmt = $this->user->createMembershipForm($_POST);

            // Retrieve the last inserted ID (if needed for confirmation or further processing)
            $applicantId = $this->user->getLastInsertedId();

            // Display success message
            $message = "Form has been submitted successfully!";
            $this->view('users/SuccessPage', ['message' => $message, 'applicant_id' => $applicantId]);

        } catch (Exception $e) {
            // Handle errors and display an error message
            $error = "There was an error submitting the form. Please try again.";
            $this->view('users/ErrorPage', ['error' => $error]);
        }
    }


    //public function storeMembershipForm() {
    //    $stmt = $this->user->createMembershipForm($_POST);
    //    $applicantId = $this->user->getLastInsertedId(); // Retrieve the last inserted ID
    //    header("Location: /createFamilyDetails?applicant_id=$applicantId");
    //    exit;
    //}


    public function edit($id)
    {
        // Fetch the user data using the ID
        $user = $this->user->find($id);

        // Pass the user data to the 'users/edit' view
        $this->view('users/edit', compact('user'));
    }

    public function update($id)
    {
        $this->user->update($id, $_POST);
        header('Location: /');
    }

    public function delete($id)
    {
        $this->user->delete($id);
        header('Location: /');
    }
    
    public function homepageMember()
    {
        $this->view('menu_member/homepage_ahli');
    }

    public function homepageAdmin()
    {
        $this->view('menu_admin/homepage_admin');
    }

    public function homepageALK()
    {
        $this->view('menu_alk/homepage_alk');
    }

    public function viewInvoice()
    {
        $this->view('menu_member/invoice');
    }

    public function viewSaving()
    {
        $this->view('menu_member/saving');
    }

    public function loanInfo()
    {
        $this->view('menu_member/loan_info');
    }

    public function viewLoanForm()
    {
        $this->view('menu_member/loan_application');
    }

    public function viewAddNewAdmin()
    {
        $this->view('menu_admin/addNewAdmin');
    }

    public function viewAddNewALK()
    {
        $this->view('menu_admin/addNewALK');
    }

    public function viewSuccessAddAdmin()
    {
        $this->view('menu_admin/successAddAdmin');
    }

    public function viewRetirementForm()
    {
        $this->view('menu_member/BorangBerhenti');
    }

    public function submitTerminationForm($request)
    {
        // Prepare loan application data
        $data = [
            'member_id' => $_SESSION['user_id'], 
            'uploaded_at' => date('Y-m-d H:i:s'),
            'nama' => $request['nama'], 
            'no_kp' => $request['no_kp'], 
            'tarikh_lahir' => $request['tarikh_lahir'], 
            'umur' => $request['umur'], 
            'alamat_rumah' => $request['alamat_rumah'], 
            'poskod_rumah' => $request['poskod_rumah'], 
            'bandar_rumah' =>$request['bandar_rumah'], 
            'negeri' =>$request['negeri'], 
            'no_anggota' =>$request['no_anggota'], 
            'no_pf' =>$request['no_pf'], 
            'jawatan' =>$request['jawatan'], 
            'alamat_pejabat' => $request['alamat_pejabat'], 
            'poskod_pejabat' => $request['poskod_pejabat'], 
            'bandar_pejabat' =>$request['bandar_pejabat'], 
            'no_tel_fax' => $request['no_tel_fax'], 
            'no_tel_bimbit' => $request['no_tel_bimbit'], 
            'jantina' => $request['jantina'],
            'agama' => $request['agama'],
            'agama_lain' => $request['agama'] != 'Lain-Lain' ? $request['agama_lain']: null,
            'bangsa' => $request['bangsa'], 
            'bangsa_lain' =>$request['bangsa'] != 'Lain-Lain' ? $request['bangsa_lain']: null,
            'sebab' => $request['sebab'],
        ];

        // Save loan application
        if ($this->user->insertMemberTerminationRequest($data)) {
            $this->view('menu_member/terminationAppSuccess');
            exit;
        } else {
            echo "Error saving application.";
        }
    }

    public function createMember()
    {
        // Example data you might collect from a form or API request
        $data = [
            'password' => '1234', // The raw password to be hashed and stored
        ];
        $memberId = $this->user->createMemberAcc($data);

        if (!$memberId) {
            die('member ID is required');
        }
    }

    public function createAdmin()
    {
        $id_number = $_POST['id_number'];
        // Example data you might collect from a form or API request
        $data = [
            'password' => '1234', // The raw password to be hashed and stored
        ];
        $memberId = $this->user->createAdminAcc($data, $id_number);

        if (!$memberId) {
            die('member ID is required');
        }

        header("Location: /successAddAdmin");
    }

    public function createALK()
    {
        // Example data you might collect from a form or API request
        $id_number = $_POST['id_number'];
        // Example data you might collect from a form or API request
        $data = [
            'password' => '1234', // The raw password to be hashed and stored
        ];
        $memberId = $this->user->createALKAcc($data, $id_number);

        if (!$memberId) {
            die('member ID is required');
        }
        
        header("Location: /successAddAdmin");
    }

    public function downloadLoanTemplate()
    {
        $filePath = realpath(__DIR__ . '/../assets/KADA_loan_template.pdf');

        if (file_exists($filePath)) {
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="loan_template.pdf"');
            readfile($filePath);
        } else {
            echo "File not found.";
        }
    }
    
    public function submitLoanApplication($request)
    {
        // Check if a file is uploaded
        if (isset($_FILES['uploaded_file_path']) && $_FILES['uploaded_file_path']['error'] === UPLOAD_ERR_OK) {
            // Access the uploaded file details
            $uploadedFile = $_FILES['uploaded_file_path'];
            $uploadDir = __DIR__ . '/../../public/uploads/';
            $uploadedFilePath = $uploadDir . basename($uploadedFile['name']);
    
            // Create the upload directory if it doesn't exist
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
    
            // Move the uploaded file to the upload directory
            if (move_uploaded_file($uploadedFile['tmp_name'], $uploadedFilePath)) {
                // Prepare loan application data
                // Prepare loan application data
                $loanData = [
                    'member_id' => $_SESSION['user_id'], 
                    'loan_type' => $request['loan_type'],
                    'other_loan_type' => $request['loan_type'] === 'Lain-Lain' ? $request['other_loan_type'] : null,
                    'loan_amount' => $request['loan_amount'],
                    'repayment_period_months' => $request['repayment_period_months'],
                    'monthly_installment' => $request['monthly_installment'],
                    'dokument_pengesahan' => false,
                    'uploaded_file_path' => '/uploads/' . basename($uploadedFile['name']),
                    'uploaded_at' => date('Y-m-d H:i:s'),
                    'bank_name' => $request['bank_name'],
                    'account_number' => $request['account_number'],
                ];

                // Save loan application
                if ($this->user->saveLoanApplication($loanData)) {
                    $this->view('menu_member/loanAppSuccess');
                    exit;
                } else {
                    echo "Error saving application.";
                }

            } else {
                // Handle file upload error
                echo "Error uploading file.";
            }
        } else {
            // Handle no file uploaded or upload error
            echo "No file uploaded or an error occurred.";
        }
    }
    
    public function loanStatus() 
    {
        $member_id = $_SESSION['user_id'];

        $loanApplication = $this->user->findLoanStatus($member_id);

        $applicantDetails = [];
        if (!empty($loanApplication)) {
            foreach ($loanApplication as $LoanID) {
                // Check approval status for each application
                    $details = $this->user->findLoanDetails($LoanID['LoanID']);
                
                    if (!empty($details)) {
                        $applicantDetails[] = $details[0]; // Only take the first result (assuming LoanID is unique)
                    } else {
                        $applicantDetails[] = null; // Store null if no details found
                    }        
            }
        }
    
        // Pass all loan applications and their details to the view
        $this->view('menu_member/loan_status', [
            'loanApplication' => $loanApplication,
            'applicantDetails' => $applicantDetails,
        ]);
    }

    public function loanBalance()
    {
        $member_id = $_SESSION['user_id'];
        
        $loanDetails = $this->user->checkLoanBalance($member_id);
        $transactionDetails = [];

        if (!empty($loanDetails)) {
            foreach ($loanDetails as $loan) {
                // Check approval status for each application
                    $balance = $this->user->getTransactionDetails($loan['LoanID']);
            
                    $transactionDetails[$loan['LoanID']] = $balance; // Store null if no details found
                
            }
        }

        $this->view('menu_member/loan_balance', ['loanDetails' => $loanDetails, 'transactionDetails' => $transactionDetails]);
    }

    public function listPendingApplications() {
        $users = $this->user->getPendingApplications();
        $this->view('menu_admin/viewLoanList', compact('users'));
    }

    public function listPendingTermination() {
        $users = $this->user->getTerminationRequests();
        $this->view('menu_admin/terminateApp_list', compact('users'));
    }

    // Update loan application status
    public function updateLoanStatus() {
        if (isset($_POST['loan_id'], $_POST['new_status'])) {
            $loanId = $_POST['loan_id'];
            $newStatus = $_POST['new_status'];
            $this->user->updateLoanStatus($loanId, $newStatus);
        }
        // Redirect back to the list view
        header("Location: /listPendingForm");
    }

    public function updateMemberTermination() {
        if (isset($_POST['id'], $_POST['new_status'])) {
            $id = intval($_POST['id']); // Ensure ID is an integer
            $newStatus = $_POST['new_status'];
            
            // Update the termination request status
            $this->user->updateTerminationAppStatus($id, $newStatus);
            
            if ($newStatus == "Approved") {
                // Get the member ID associated with the termination request
                $memberDetails = $this->user->getTerminationForm($id);
                
                if ($memberDetails && isset($memberDetails['member_id'])) {
                    $memberID = $memberDetails['member_id']; 
                    $status = "Non-active";
    
                    // Update the member's status in MemberLogin
                    $this->user->updateMemberActiveStatus($memberID, $status);
                } else{
                    echo "TKDE MEMBER ID";
                }
            }
        }
    
        // Redirect back to the list view
        header("Location: /listTermination");
        exit();
    }
    

    // View detailed application
    public function viewLoanApplication($loanId) {
        // Fetch loan application details
        $loanDetails = $this->user->getLoanApplicationById($loanId);
        
        if ($loanDetails) {
            // Fetch the member's ID number using member_id
            $idNumber = $this->user->getIdNumberByMemberId($loanDetails['member_id']);
            
            // Fetch member details from member_application if idNumber exists
            $memberDetails = $idNumber ? $this->user->getMemberDetailsByIdNumber($idNumber) : null;
    
            $this->view('menu_admin/viewLoanForm', compact('loanDetails', 'memberDetails'));
        } else {
            // Handle case when loan details are not found
            header("Location: /listPendingForm");
        }
    }
    
    
    public function reviewMembershipForm()
    {
        $viewMembershipFormList = $this->user->getMembershipFormList();
        $this->view('menu_admin/review_member_application', compact('viewMembershipFormList'));
    }

    public function storeMembershipFormStatus($data) {
        $stmt = $this->user->reviewMembershipForm($data);
        $this->view('menu_admin/kemaskini_success_staff');

    }

    public function viewMembershipForm($id_number)
    {
        $memberDetails = $this->user->getMemberAppForm($id_number);
        $this->view('menu_admin/viewMemberForm', compact('memberDetails'));
    }

    public function viewTerminationForm($id_number)
    {
        $memberDetails = $this->user->getTerminationForm($id_number);
        $this->view('menu_admin/viewTerminationForm', compact('memberDetails'));
    }
  
    public function approveMembershipForm()
    {
        $viewMembershipFormList = $this->user->getMembershipFormListALK();
        $this->view('menu_alk/approve_member_application', compact('viewMembershipFormList'));
    }

    public function updateMembershipFormStatusALK($data)
    {
        // Update the approval status in the Member_Application table
        $stmt = $this->user->approveMembershipFormALK($data);

        // If the status is approved, create a MemberLogin entry
        if ($data['approval'] === 'Approved') {

            $newAcc = [
                'password' => '1234', // The raw password to be hashed and stored
            ];
            $memberId = $this->user->createMemberAcc($newAcc);

            if ($memberId) {
                // Insert the new row into Member_Info
                $this->user->createMemberInfo([
                    'member_id' => $memberId,
                    'id_number' => $data['id_number']
                ]);
            } else {
                die('Error creating MemberLogin entry');
            }
        }

        // Redirect to a success page or display a success message
        $this->view('menu_alk/kemaskini_success_ALK');
    }


    public function viewMembershipFormALK()
    {
        $memberDetails = $this->user->getMembershipFormListALK();
        $this->view('menu_admin/edit_member_application', ['memberDetails' => $memberDetails]);
    }
  
    public function listReviewedLoanApp() {
        $users = $this->user->getReviewedLoanApp();
        $this->view('menu_alk/viewReviewedLoan', compact('users'));
    }

    public function LoanApproval() {
        if (isset($_POST['loan_id'], $_POST['new_status'])) {
            $loanId = $_POST['loan_id'];
            $newStatus = $_POST['new_status'];
            $this->user->updateLoanStatus($loanId, $newStatus);
        }
        // Redirect back to the list view
        header("Location: /listReviewedLoan");
    }

    public function calendar()
    {
        // Get the month and year from the URL parameters (defaults to current month and year)
        $month = isset($_GET['month']) ? (int)$_GET['month'] : date('m');
        $year = isset($_GET['year']) ? (int)$_GET['year'] : date('Y');
        $selectedDay = isset($_GET['day']) ? (int)$_GET['day'] : null;
        $approval = isset($_GET['approval']) ? $_GET['approval'] : null;

        // Get the calendar data from the model
        $calendar = $this->user->generateCalendar($month, $year);

        // Get the month name for the view
        $monthName = date('F', mktime(0, 0, 0, $month, 10));

        // Fetch reports
        $monthlyReport = $this->user->getMonthlySyerReport($month, $year, $selectedDay);
        $annualReport = $this->user->getAnnualSyerReport($year);
        $applications = $this->user->getApplicationsByDate($year, $month, $selectedDay, $approval);
        $applicationCounts = $this->user->getApplicationsCountByStatus($year, $month, $selectedDay);
        $loanapplications = $this->user->getLoanApplicationsByDate($year, $month, $selectedDay, $approval);
        $loanapplicationCounts = $this->user->getLoanApplicationsCountByStatus($year, $month, $selectedDay);

        // Pass the data to the view
        $this->view('menu_alk/annual_report', [
            'calendar' => $calendar,
            'monthName' => $monthName,
            'currentMonth' => $month,
            'currentYear' => $year,
            'selectedDay' => $selectedDay,
            'approval' => $approval,
            'monthlyReport' => $monthlyReport,
            'annualReport' => $annualReport,
            'applications' => $applications,
            'applicationCounts' => $applicationCounts,
            'loanapplications' => $loanapplications,
            'loanapplicationCounts' => $loanapplicationCounts
        ]);
    }

    public function calendarAdmin()
    {
    // Get the month and year from the URL parameters (defaults to current month and year)
    $month = isset($_GET['month']) ? (int)$_GET['month'] : date('m');
    $year = isset($_GET['year']) ? (int)$_GET['year'] : date('Y');
    $selectedDay = isset($_GET['day']) ? (int)$_GET['day'] : null;
    $approval = isset($_GET['approval']) ? $_GET['approval'] : null;

    // Get the calendar data from the model
    $calendar = $this->user->generateCalendar($month, $year);

    // Get the month name for the view
    $monthName = date('F', mktime(0, 0, 0, $month, 10));

    // Fetch reports
    $monthlyReport = $this->user->getMonthlySyerReport($month, $year, $selectedDay);
    $annualReport = $this->user->getAnnualSyerReport($year);
    $applications = $this->user->getApplicationsByDate($year, $month, $selectedDay, $approval);
    $applicationCounts = $this->user->getApplicationsCountByStatus($year, $month, $selectedDay);
    $loanapplications = $this->user->getLoanApplicationsByDate($year, $month, $selectedDay, $approval);
    $loanapplicationCounts = $this->user->getLoanApplicationsCountByStatus($year, $month, $selectedDay);

    // Pass the data to the view
    $this->view('menu_admin/annual_reportAdmin', [
        'calendar' => $calendar,
        'monthName' => $monthName,
        'currentMonth' => $month,
        'currentYear' => $year,
        'selectedDay' => $selectedDay,
        'approval' => $approval,
        'monthlyReport' => $monthlyReport,
        'annualReport' => $annualReport,
        'applications' => $applications,
        'applicationCounts' => $applicationCounts,
        'loanapplications' => $loanapplications,
        'loanapplicationCounts' => $loanapplicationCounts
    ]);
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /homepage');
    }

    public function showSavings() {
        // Assuming session holds logged-in member ID
        $memberId = $_SESSION['user_id']; 

        // Use User model to fetch member's details
        $infoID = $this->user->getIdNumberByMemberId($memberId); // Fetch member details

        // Fetch savings data (as before)
        $savings = $this->user->getSavingsByMemberId($memberId); 
        $share = $this->user->getShareByMemberId($memberId);
        $memberDetails = $this->user->getMemberDetailsByIdNumber($infoID); 

        // Pass data to the view
        $this->view('menu_member/saving', compact('memberDetails', 'savings', 'share'));
    }

    public function showInvoice() {
        // Assuming session holds logged-in member ID
        $memberId = $_SESSION['user_id']; 

        // Use User model to fetch member's details
        $infoID = $this->user->getIdNumberByMemberId($memberId); // Fetch member details

        // Fetch savings data (as before)
        $memberDetails = $this->user->getMemberDetailsByIdNumber($infoID);

        // Fetch savings data (as before)
        $invoice = $this->user->getInvoiceDetails($memberId);

        // Pass data to the view
        $this->view('menu_member/invoice', compact('memberDetails', 'invoice'));
    }

    public function showCheckAccountForm() {
        $this->view('auth/checkAccount');
    }

    public function checkAccount() {
        $idNumber = $_POST['id_number'] ?? '';

        $accountDetails = null;
        $message = null;
        $application = $this->user->getMemberDetailsByIdNumber($idNumber);

        $memberID = $this->user->getMemberIDByIdNumber($idNumber);
        $adminID = $this->user->getAdminIDByIdNumber($idNumber);
        $alkID = $this->user->getALKIDByIdNumber($idNumber);

        if (!$adminID) {
            if(!$alkID) {
                if ($memberID) {
                $accountDetails = $this->user->getAccountDetails($memberID);
                } else if ($application) {
                    if ($application['approval'] === 'Pending') {
                        $message = 'Permohonan anda sedang diproses.';
                    } elseif ($application['approval'] === 'Reviewed') {
                        $message = 'Permohonan anda dalam penilaian.';
                    } elseif ($application['approval'] === 'Disapproved') {
                        $message = 'Permohonan anda ditolak.';
                    }
                }        
            }
        }

        $this->view('auth/AccInfo', compact('accountDetails', 'message', 'application', 'adminID', 'alkID'));
    }

    public function showProfile() {
        // Assuming session holds logged-in member ID
        $memberId = $_SESSION['user_id']; 

        // Use User model to fetch member's details
        $infoID = $this->user->getIdNumberByMemberId($memberId); // Fetch member details

        // Fetch savings data (as before)
        $memberDetails = $this->user->getMemberDetailsByIdNumber($infoID);

        // Pass data to the view
        $this->view('menu_member/viewPersonalInfo', compact('memberDetails'));
    }

    public function editPersonalInfo() {
        $memberId = $_SESSION['user_id']; 

        // Use User model to fetch member's details
        $infoID = $this->user->getIdNumberByMemberId($memberId); // Fetch member details

        // Fetch savings data (as before)
        $memberDetails = $this->user->getMemberDetailsByIdNumber($infoID);
        $this->view('menu_member/editPersonalInfo', compact('memberDetails'));
    }
    
    public function updateMemberInfo()
    {
        $member_id = $_SESSION['user_id'];
        $id_number = $this->user->getIdNumberByMemberId($member_id);
        $this->user->updateMemberInfo($id_number, $_POST);
        $this->view('menu_member/kemaskini_success');
    }

    public function changePasswordMember() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_number = $_POST['id_number'];
            $new_password = $_POST['new_password'];

            $memberID = $this->user->getMemberIDByIdNumber($id_number);
            $success = [];

        if ($memberID) {
            $success = $this->user->updatePasswordMember($memberID, $new_password);
        }
            $this->view('auth/kemaskini_password_member', compact('success'));
        }
    }

    public function changePasswordALK() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_number = $_POST['id_number'];
            $new_password = $_POST['new_password'];

            $alkID = $this->user->getALKIDByIdNumber($id_number);
            $success = [];

        if ($alkID) {
            $success = $this->user->updatePasswordALK($alkID, $new_password);
        }
            $this->view('auth/kemaskini_password_alk', compact('success'));
        }
    }

    public function changePasswordAdmin() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_number = $_POST['id_number'];
            $new_password = $_POST['new_password'];

            $adminID = $this->user->getAdminIDByIdNumber($id_number);
            $success = [];

        if ($adminID) {
            $success = $this->user->updatePasswordAdmin($adminID, $new_password);
        }
            $this->view('auth/kemaskini_password_admin', compact('success'));
        }
    }
    
    public function newPasswordMember()
    {
        $this->view('auth/newPasswordMember');
    }

    public function newPasswordALK()
    {
        $this->view('auth/newPasswordALK');
    }

    public function newPasswordAdmin()
    {
        $this->view('auth/newPasswordAdmin');
    }
}


