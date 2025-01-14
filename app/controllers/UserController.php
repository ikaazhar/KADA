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

    public function authenticateMember()
    {
        $member_id = $_POST['member_id'];
        $password = $_POST['password'];
    
        $user = $this->user->findByMemberID($member_id);
    
        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['member_id'];
            $_SESSION['role'] = $user['user_role'];
            header('Location: /homepageMember');
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

    //utk form family detail
    //public function createFamilyDetails()
    //{
    //    $applicantId = $_GET['applicant_id'] ?? null;
    //    if (!$applicantId) {
    //        die('Applicant ID is required');
    //    }

    //    $familyDetails = $this->user->getFamilyDetails($applicantId);
    //    $this->view('users/family_details', ['applicant_id' => $applicantId, 'familyDetails' => $familyDetails]);
    //}

    //
    //public function storeFamilyDetails()
    //{
    //    if (empty($_POST['applicant_id'])) {
    //        die('Applicant ID is required');
    //    }
    //
    //    $this->user->createFamilyDetails($_POST);
    //
    //    // Redirect to show the family details for the specific applicant_id
    //    $applicantId = $_POST['applicant_id'];
    //    header("Location: /createFamilyDetails?applicant_id=$applicantId");
    //    exit;
    //}

    
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
        // Example data you might collect from a form or API request
        $data = [
            'password' => '1234', // The raw password to be hashed and stored
        ];
        $memberId = $this->user->createAdminAcc($data);

        if (!$memberId) {
            die('member ID is required');
        }
    }

    public function createALK()
    {
        // Example data you might collect from a form or API request
        $data = [
            'password' => '1234', // The raw password to be hashed and stored
        ];
        $memberId = $this->user->createALKAcc($data);

        if (!$memberId) {
            die('member ID is required');
        }
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
        'applicationCounts' => $applicationCounts
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

        $memberID = $this->user->getMemberIDByIdNumber($idNumber);

        if ($memberID) {
            $accountDetails = $this->user->getAccountDetails($memberID);
            $message = null;
        } else {
            $application= $this->user->getMemberDetailsByIdNumber($idNumber);
        
            if ($application) {
                if ($application['approval'] === 'Pending') {
                    $message = 'Permohonan anda sedang diproses.';
                } elseif ($application['approval'] === 'Reviewed') {
                    $message = 'Permohonan anda dalam penilaian.';
                } elseif ($application['approval'] === 'Disapproved') {
                    $message = 'Permohonan anda ditolak.';
                }
            } else {
                $message = 'Tiada akaun atau permohonan ditemui untuk nombor KP yang diberikan.';
            }

            $accountDetails = null;
        }

        $this->view('auth/AccInfo', compact('accountDetails', 'message'));
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
}


