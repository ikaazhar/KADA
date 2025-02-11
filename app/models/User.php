<?php
namespace App\Models;

use App\Core\Model;

class User extends Model
{

    public function getFamilyDetails($applicantId) 
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM family_details WHERE applicant_id = :applicant_id");
        $stmt->execute([':applicant_id' => $applicantId]);
        return $stmt->fetchAll(); // Fetch all records
    }


    public function findByMemberID($member_id)
    {
       // $stmt = $this->getConnection()->prepare("SELECT * FROM member_account WHERE member_id = :member_id");
       // $stmt->execute([':member_id' => $member_id]);
       // return $stmt->fetch();

        $stmt = $this->getConnection()->prepare("SELECT * FROM memberlogin WHERE member_id = :member_id");
        $stmt->bindParam(':member_id', $member_id, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findByStaffID($admin_id)
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM adminlogin WHERE admin_id = :admin_id");
        $stmt->bindParam(':admin_id', $admin_id, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findByALKID($alk_id)
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM alklogin WHERE alk_id = :alk_id");
        $stmt->bindParam(':alk_id', $alk_id, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function find($id)
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM applicant WHERE id = :id"); // Use prepare() for SQL statements with variables
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT); // Use bindParam() to bind variables
        $stmt->execute(); // Use execute() to run the query
        return $stmt->fetch(); // Use fetch() to get a single record
    }

    public function create($data)
    {
        $stmt = $this->getConnection()->prepare(
            "INSERT INTO applicant (
                name, id_number, marital_status, gender, age, religion, ethnicity, home_address, postcode, state,
                staff_number, pf_number, position_grade, office_address, office_postcode, city, phone_office,
                phone_mobile, phone_home, monthly_salary
            ) VALUES (
                :name, :id_number, :marital_status, :gender, :religion, :ethnicity, :home_address, :postcode, :state,
                :staff_number, :pf_number, :position_grade, :office_address, :office_postcode, :city, :phone_office,
                :phone_mobile, :phone_home, :monthly_salary
            )"
        );

        $stmt->execute([
            ':name' => $data['name'],
            ':id_number' => $data['id_number'],
            ':marital_status' => $data['marital_status'],
            ':gender' => $data['gender'],
            ':age' => $data['age'],
            ':religion' => $data['religion'],
            ':ethnicity' => $data['ethnicity'],
            ':home_address' => $data['home_address'],
            ':postcode' => $data['postcode'],
            ':state' => $data['state'],
            ':staff_number' => $data['staff_number'],
            ':pf_number' => $data['pf_number'],
            ':position_grade' => $data['position_grade'],
            ':office_address' => $data['office_address'],
            ':office_postcode' => $data['office_postcode'],
            ':city' => $data['city'],
            ':phone_office' => $data['phone_office'],
            ':phone_mobile' => $data['phone_mobile'],
            ':phone_home' => $data['phone_home'],
            ':monthly_salary' => $data['monthly_salary']
        ]);

        return $stmt;
    }

    public function createFamilyDetails($data)
    {
        $stmt = $this->getConnection()->prepare(
            "INSERT INTO family_details (
                applicant_id, name, relationship, id_number
            ) VALUES (
                :applicant_id, :name, :relationship, :id_number
            )"
        );
    
        $stmt->execute([
            ':applicant_id' => $data['applicant_id'],
            ':name' => $data['name'],
            ':relationship' => $data['relationship'],
            ':id_number' => $data['id_number']
        ]);
    
        return $stmt;
    }

    
    public function createMembershipForm($data)
    {
        $stmt = $this->getConnection()->prepare(
            "INSERT INTO Member_Application (
                name, id_number, email, marital_status, gender, age, religion, ethnicity, home_address, postcode, state, 
                membership_number, pf_number, position_grade, office_address, office_postcode, city, 
                phone_office, phone_mobile, phone_home, monthly_salary, famName1, famRelationship1, famIC1, famName2, famRelationship2, famIC2,
                yuran_masuk_value, modal_syer_value, modal_yuran_value, wang_deposit_value, 
                sumbangan_kebajikan_value, simpanan_tetap_value, lain_lain_value, approval
            ) VALUES (
                :name, :id_number, :email, :marital_status, :gender, :age, :religion, :ethnicity, :home_address, :postcode, :state, 
                :membership_number, :pf_number, :position_grade, :office_address, :office_postcode, :city, 
                :phone_office, :phone_mobile, :phone_home, :monthly_salary, :famName1, :famRelationship1, :famIC1, :famName2, :famRelationship2, :famIC2,
                :yuran_masuk_value, :modal_syer_value, :modal_yuran_value, :wang_deposit_value, 
                :sumbangan_kebajikan_value, :simpanan_tetap_value, :lain_lain_value, :approval
            )"
        );

        $stmt->execute([
            ':name' => $data['name'],
            ':id_number' => $data['id_number'],
            ':email' => $data['email'],
            ':marital_status' => $data['marital_status'],
            ':gender' => $data['gender'],
            ':age' => $data['age'],
            ':religion' => $data['religion'],
            ':ethnicity' => $data['ethnicity'],
            ':home_address' => $data['home_address'],
            ':postcode' => $data['postcode'],
            ':state' => $data['state'],
            ':membership_number' => $data['membership_number'],
            ':pf_number' => $data['pf_number'],
            ':position_grade' => $data['position_grade'],
            ':office_address' => $data['office_address'],
            ':office_postcode' => $data['office_postcode'],
            ':city' => $data['city'],
            ':phone_office' => $data['phone_office'],
            ':phone_mobile' => $data['phone_mobile'],
            ':phone_home' => $data['phone_home'],
            ':monthly_salary' => $data['monthly_salary'],
            ':famName1' => $data['famName1'],
            ':famRelationship1' => $data['famRelationship1'],
            ':famIC1' => $data['famIC1'],
            ':famName2' => $data['famName2'],
            ':famRelationship2' => $data['famRelationship2'],
            ':famIC2' => $data['famIC2'],
            ':yuran_masuk_value' => $data['yuran_masuk_value'],
            ':modal_syer_value' => $data['modal_syer_value'],
            ':modal_yuran_value' => $data['modal_yuran_value'],
            ':wang_deposit_value' => $data['wang_deposit_value'],
            ':sumbangan_kebajikan_value' => $data['sumbangan_kebajikan_value'],
            ':simpanan_tetap_value' => $data['simpanan_tetap_value'],
            ':lain_lain_value' => $data['lain_lain_value'],
            ':approval' => $data['approval'] ?? 'Pending' // Default to 'Pending' if not provided
        ]);

        return $stmt;
    }



    public function update($id, $data)
    {
        $stmt = $this->getConnection()->prepare("UPDATE applicant SET name = :name, email = :email WHERE id = :id"); // Use prepare() for SQL statements with variables
        $stmt->execute([ // Use execute() to run the query
            ':name' => $data['name'], // Use named placeholders to prevent SQL injection
            ':email' => $data['email'], // Use named placeholders to prevent SQL injection
            ':id' => $id, // Use named placeholders to prevent SQL injection
        ]);
        return $stmt; // Return the PDOStatement object
    }

    public function delete($id)
    {
        $stmt = $this->getConnection()->prepare("DELETE FROM applicant WHERE id = :id"); // Use prepare() for SQL statements with variables
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT); // Use bindParam() to bind variables
        $stmt->execute(); // Use execute() to run the query
        return $stmt; // Return the PDOStatement object
    }

    public function make($data)
    {
        // Assuming your 'account' table has 'name', 'email', and 'password' columns
        $stmt = $this->getConnection()->prepare("INSERT INTO account (member_ID, password) VALUES (:member_ID, :password)"); 

        // Execute the query with the provided data
        $stmt->execute([ 
            ':member_ID' => $data['member_ID'], 
            ':password' => password_hash($data['password'], PASSWORD_BCRYPT), // Hash the password for security
        ]);

        // Return the statement object to check execution if needed
        return $stmt;
    }

    public function getLastInsertedId() 
    {
        return $this->getConnection()->lastInsertId();
    }

    public function createMemberAcc($data)
    {
        // Prepare the SQL query for inserting into MemberLogin table
        $stmt = $this->getConnection()->prepare("INSERT INTO MemberLogin (password) VALUES (:password)");

        // Execute the query with the hashed password
        $stmt->execute([
            ':password' => password_hash($data['password'], PASSWORD_BCRYPT), // Hash the password for security
        ]);

        // Optionally, return the ID of the newly inserted row
        return $this->getConnection()->lastInsertId();
    }

    public function createAdminAcc($data, $id_number)
    {
        $hashed_password = password_hash($data['password'], PASSWORD_BCRYPT);

        // Prepare the SQL query for inserting into MemberLogin table
        $query = "INSERT INTO AdminLogin (password, id_number) VALUES (:password, :id_number)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':id_number', $id_number);

        return $stmt->execute();

        // Optionally, return the ID of the newly inserted row
        return $this->getConnection()->lastInsertId();
    }

    public function createALKAcc($data, $id_number)
    {
        $hashed_password = password_hash($data['password'], PASSWORD_BCRYPT);

        // Prepare the SQL query for inserting into MemberLogin table
        $query = "INSERT INTO alklogin (password, id_number) VALUES (:password, :id_number)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':id_number', $id_number);

        return $stmt->execute();

        // Optionally, return the ID of the newly inserted row
        return $this->getConnection()->lastInsertId();
    }

    public function saveLoanApplication($data)
    {
        // SQL query for inserting loan application data
        $sql = "INSERT INTO loan_application 
                (member_id, LoanType, OtherLoanType, LoanAmount, RepaymentPeriodMonths, MonthlyInstallment, dokument_pengesahan, UploadedFilePath, UploadedAt, BankName, AccountNumber)
                VALUES 
                (:member_id, :loan_type, :other_loan_type, :loan_amount, :repayment_period_months, :monthly_installment, :dokument_pengesahan, :uploaded_file_path, :uploaded_at, :bank_name, :account_number)";
        
        // Prepare and execute the statement
        $stmt = $this->db->prepare($sql);
    
        return $stmt->execute([
            ':member_id' => $data['member_id'],
            ':loan_type' => $data['loan_type'],
            ':other_loan_type' => $data['other_loan_type'],
            ':loan_amount' => $data['loan_amount'],
            ':repayment_period_months' => $data['repayment_period_months'],
            ':monthly_installment' => $data['monthly_installment'],
            ':dokument_pengesahan' => $data['dokument_pengesahan'],
            ':uploaded_file_path' => $data['uploaded_file_path'],
            ':uploaded_at' => $data['uploaded_at'],
            ':bank_name' => $data['bank_name'],
            ':account_number' => $data['account_number'],
        ]);
    }
    
    public function insertMemberTerminationRequest($data)
    {
        // SQL query for inserting membership termination request data
        $sql = "INSERT INTO membership_termination_requests 
                (Member_id, nama, no_kp, tarikh_lahir, umur, alamat_rumah, poskod_rumah, bandar_rumah, negeri, 
                no_anggota, no_pf, jawatan, alamat_pejabat, poskod_pejabat, bandar_pejabat, no_tel_fax, no_tel_bimbit, 
                jantina, agama, agama_lain, bangsa, bangsa_lain, sebab, uploaded_at) 
                VALUES 
                (:member_id, :nama, :no_kp, :tarikh_lahir, :umur, :alamat_rumah, :poskod_rumah, :bandar_rumah, :negeri, 
                :no_anggota, :no_pf, :jawatan, :alamat_pejabat, :poskod_pejabat, :bandar_pejabat, :no_tel_fax, :no_tel_bimbit, 
                :jantina, :agama, :agama_lain, :bangsa, :bangsa_lain, :sebab, :uploaded_at)";

        // Prepare and execute the statement
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':member_id'      => $data['member_id'],
            ':nama'           => $data['nama'],
            ':no_kp'          => $data['no_kp'],
            ':tarikh_lahir'   => $data['tarikh_lahir'],
            ':umur'           => $data['umur'],
            ':alamat_rumah'   => $data['alamat_rumah'],
            ':poskod_rumah'   => $data['poskod_rumah'],
            ':bandar_rumah'   => $data['bandar_rumah'],
            ':negeri'         => $data['negeri'],
            ':no_anggota'     => $data['no_anggota'],
            ':no_pf'          => $data['no_pf'],
            ':jawatan'        => $data['jawatan'],
            ':alamat_pejabat' => $data['alamat_pejabat'],
            ':poskod_pejabat' => $data['poskod_pejabat'],
            ':bandar_pejabat' => $data['bandar_pejabat'],
            ':no_tel_fax'     => $data['no_tel_fax'],
            ':no_tel_bimbit'  => $data['no_tel_bimbit'],
            ':jantina'        => $data['jantina'],
            ':agama'          => $data['agama'],
            ':agama_lain'     => $data['agama_lain'],
            ':bangsa'         => $data['bangsa'],
            ':bangsa_lain'    => $data['bangsa_lain'],
            ':sebab'          => $data['sebab'],
            ':uploaded_at'    => date('Y-m-d H:i:s'), // Automatically set the timestamp
        ]);
    }

    public function getTerminationRequests() {
        $stmt = $this->getConnection()->prepare("SELECT * FROM membership_termination_requests WHERE status = 'Pending'");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findLoanStatus($member_id) 
    {
        $stmt = $this->getConnection()->prepare("SELECT member_id, approval, LoanID FROM loan_application WHERE member_id = :member_id");
        $stmt->execute([':member_id' => $member_id]);
        return $stmt->fetchAll();
    }

    public function findLoanDetails($LoanID)
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM loan_application WHERE LoanID = :LoanID AND approval = 'Approved'");
        $stmt->execute([':LoanID' => $LoanID]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function checkLoanBalance($member_id) 
    {
        $stmt = $this->getConnection()->prepare("
                SELECT 
                    la.LoanID,
                    la.LoanAmount,
                    IFNULL(SUM(t.PaymentAmount), 0) AS TotalPayments,
                    (la.LoanAmount - IFNULL(SUM(t.PaymentAmount), 0)) AS OutstandingAmount,
                    la.RepaymentPeriodMonths,
                    la.MonthlyInstallment,
                    la.LoanType
                FROM 
                    loan_application la
                LEFT JOIN 
                    transaction t
                ON 
                    la.LoanID = t.LoanID
                WHERE 
                    la.member_id = :member_id
                AND 
                    la.approval = 'Approved'
                GROUP BY 
                    la.LoanID, la.LoanAmount, la.LoanType, la.RepaymentPeriodMonths, la.MonthlyInstallment
        ");
        $stmt->execute([':member_id' => $member_id]);
        return $stmt->fetchAll();
    }

    public function getTransactionDetails($loan_id)
    {
        $stmt = $this->getConnection()->prepare("
            SELECT 
                t.PaymentDate,
                t.PaymentAmount,
                t.PaymentReference,
                t.PaymentMethod
            FROM 
                transaction t
            WHERE 
                t.LoanID= :LoanID;
        ");
        $stmt->execute([':LoanID' => $loan_id]);
        return $stmt->fetchAll();
    }

    public function getPendingApplications() {
        $stmt = $this->db->prepare("SELECT LoanID, approval FROM loan_application WHERE approval = 'Pending'");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateTerminationAppStatus($id, $newStatus) {
        $stmt = $this->db->prepare("UPDATE membership_termination_requests SET status = :status WHERE id = :id");
        $stmt->bindParam(':status', $newStatus);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function updateMemberActiveStatus($member_id, $status) {
        $stmt = $this->db->prepare("UPDATE memberlogin SET memberStatus = :status WHERE member_id = :member_id");
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':member_id', $member_id);
        $stmt->execute();
    }
    

    // Update loan status
    public function updateLoanStatus($loanId, $newStatus) {
        $stmt = $this->db->prepare("UPDATE loan_application SET approval = :status WHERE LoanID = :loan_id");
        $stmt->bindParam(':status', $newStatus);
        $stmt->bindParam(':loan_id', $loanId);
        $stmt->execute();
    }

    // Get loan application details by ID
    public function getLoanApplicationById($loanId) {
        $stmt = $this->db->prepare("SELECT * FROM loan_application WHERE LoanID = :loan_id");
        $stmt->bindParam(':loan_id', $loanId);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getMemberAppForm($IdNum) {
        $stmt = $this->db->prepare("SELECT * FROM member_application WHERE id_number = :id_number");
        $stmt->bindParam(':id_number', $IdNum);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function getTerminationForm($IdNum) {
        $stmt = $this->db->prepare("SELECT * FROM membership_termination_requests WHERE id = :id");
        $stmt->bindParam(':id', $IdNum);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getMembershipFormList() 
    {
        $stmt = $this->getConnection()->prepare("SELECT name, id_number, applicant_id, approval FROM member_application WHERE approval = 'Pending'");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function reviewMembershipForm($data) 
    {
        $stmt = $this->getConnection()->prepare("UPDATE member_application SET approval = :approval WHERE id_number = :id_number");
        $stmt->execute([':approval' => $data['approval'], ':id_number' =>  $data['id_number']]);
        return $stmt->fetch();
    }

    public function approveMembershipForm($data) 
    {
        $stmt = $this->getConnection()->prepare("UPDATE member_application SET approval = :approval WHERE id_number = :id_number");
        $stmt->execute([':approval' => $data['approval'], ':id_number' =>  $data['id_number']]);
        return $stmt->fetch();
    }

    public function getMembershipFormListALK() 
    {
        $stmt = $this->getConnection()->prepare("SELECT name, id_number, applicant_id, approval FROM member_application WHERE approval = 'Reviewed'");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function approveMembershipFormALK($data) 
    {
        $stmt = $this->getConnection()->prepare("UPDATE member_application SET approval = :approval WHERE id_number = :id_number");
        $stmt->execute([':approval' => $data['approval'], ':id_number' =>  $data['id_number']]);
        return $stmt->fetch();
    }
  
    public function getReviewedLoanApp() {
        $stmt = $this->db->prepare("SELECT LoanID, approval FROM loan_application WHERE approval = 'Reviewed'");
        $stmt->execute();
        return $stmt->fetchAll();
    }
  
    public function generateCalendar($month, $year)
    {
        // Get the number of days in the given month
        $numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

        // Get the first day of the month (1 = Sunday, 7 = Saturday)
        $firstDay = date('w', strtotime("$year-$month-01"));

        // Prepare the calendar array (empty slots are represented as null)
        $calendar = [];

        // Fill in the empty slots before the first day of the month
        for ($i = 0; $i < $firstDay; $i++) {
            $calendar[] = null;
        }

        // Fill in the actual days of the month
        for ($day = 1; $day <= $numDays; $day++) {
            $calendar[] = $day;
        }

        // Return the full calendar
        return $calendar;
    }
      
    public function getMemberDetails($memberId) {
        // Query to fetch member details
        $sql = "SELECT * FROM member_application WHERE applicant_id = :memberId";
        
        // Prepare and execute the query
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':memberId' => $memberId]);
    
        // Fetch and return the results
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    
    // Method to get savings by member ID (as before)
    public function getSavingsByMemberId($memberId) {
        $sql = "SELECT * FROM membersavings WHERE Member_id = :memberId";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':memberId' => $memberId]);
        return $stmt;
    }

    public function getShareByMemberId($memberId) {
        $sql = "SELECT * FROM membersyer WHERE Member_id = :memberId";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':memberId' => $memberId]);
        return $stmt;
    }

    public function getInvoiceDetails($memberId) {
        $sql = "SELECT * FROM transaction WHERE member_id = :memberId";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':memberId' => $memberId]);
        return $stmt;

    }

    public function createMemberInfo($data)
    {
        // Prepare the SQL query for inserting into Member_Info
        $stmt = $this->getConnection()->prepare(
            "INSERT INTO Member_Info (member_id, id_number) VALUES (:member_id, :id_number)"
        );

        // Execute the query with the provided data
        return $stmt->execute([
            ':member_id' => $data['member_id'],
            ':id_number' => $data['id_number']
        ]);
    }

    // Fetch id_number from member_info table using member_id
    public function getIdNumberByMemberId($memberId) {
        $stmt = $this->db->prepare("SELECT id_number FROM Member_Info WHERE member_id = :member_id");
        $stmt->bindParam(':member_id', $memberId);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    // Fetch member details from member_application using id_number
    public function getMemberDetailsByIdNumber($idNumber) {
        $stmt = $this->db->prepare("SELECT * FROM member_application WHERE id_number = :id_number");
        $stmt->bindParam(':id_number', $idNumber);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getMonthlySyerReport($month, $year, $upToDay)
    {
    // Add the upToDay condition only if $upToDay is provided
    $upToDayCondition = $upToDay ? "AND DAY(created_at) <= :upToDay" : "";
    
    $query = "SELECT 
                  SUM(Syer_majikan) AS total_syer_majikan, 
                  SUM(Syer_pekerja) AS total_syer_pekerja
              FROM membersyer
              WHERE MONTH(created_at) = :month 
              AND YEAR(created_at) = :year
              $upToDayCondition";

    $stmt = $this->db->prepare($query);
    $stmt->bindValue(':month', $month);
    $stmt->bindValue(':year', $year);

    if ($upToDay) {
        $stmt->bindValue(':upToDay', $upToDay);
    }

    $stmt->execute();
    return $stmt->fetch();
    }

    public function getAnnualSyerReport($year)
    {
    $query = "SELECT 
                  SUM(Syer_majikan) AS total_syer_majikan, 
                  SUM(Syer_pekerja) AS total_syer_pekerja
              FROM membersyer
              WHERE YEAR(created_at) = :year";

    $stmt = $this->db->prepare($query);
    $stmt->bindValue(':year', $year);
    $stmt->execute();
    return $stmt->fetch();
    }

    public function getApplicationsByDate($year, $month, $day = null, $approval = null)
    {
        $sql = "SELECT name, id_number, approval, created_at 
                FROM member_application 
                WHERE MONTH(created_at) = :month AND YEAR(created_at) = :year";
    
    //    // If a specific day is selected, add it to the query
       if ($day !== null) {
            $sql .= " AND DAY(created_at) <= :day";
        }
    
        if ($approval !== null) {
            $sql .= " AND approval = :approval";
        }

        $stmt = $this->getConnection()->prepare($sql);
    
    //    // Bind parameters
       $params = [
            ':month' => $month,
            ':year' => $year,
        ];
        if ($day !== null) {
            $params[':day'] = $day;
       }

       if ($approval !== null) {
        $params[':approval'] = $approval;
    }
    
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function getApplicationsCountByStatus($year, $month, $day = null)
    {
        $statuses = ['Pending', 'Reviewed', 'Approved', 'Disapproved'];

        $sql = "SELECT approval, COUNT(*) AS count
                FROM member_application
                WHERE MONTH(created_at) = :month AND YEAR(created_at) = :year";

        if ($day !== null) {
            $sql .= " AND DAY(created_at) <= :day";
        }

        $sql .= " GROUP BY approval";

        $stmt = $this->getConnection()->prepare($sql);

        // Bind parameters
        $params = [
            ':month' => $month,
            ':year' => $year,
        ];
        if ($day !== null) {
            $params[':day'] = $day;
        }

        $stmt->execute($params);
        $result = $stmt->fetchAll();

        // Format result into a more usable associative array
        $counts = array_fill_keys($statuses, 0);

        // Map query results to the counts array
        foreach ($result as $row) {
            $counts[$row['approval']] = $row['count'];
        }

        return $counts;
    }

    public function getLoanApplicationsByDate($year, $month, $day = null, $approval = null)
    {
        $sql = "SELECT member_id, approval, created_at 
                FROM loan_application 
                WHERE MONTH(created_at) = :month AND YEAR(created_at) = :year";
    
    //    // If a specific day is selected, add it to the query
       if ($day !== null) {
            $sql .= " AND DAY(created_at) <= :day";
        }
    
        if ($approval !== null) {
            $sql .= " AND approval = :approval";
        }

        $stmt = $this->getConnection()->prepare($sql);
    
    //    // Bind parameters
       $params = [
            ':month' => $month,
            ':year' => $year,
        ];
        if ($day !== null) {
            $params[':day'] = $day;
       }

       if ($approval !== null) {
        $params[':approval'] = $approval;
    }
    
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function getLoanApplicationsCountByStatus($year, $month, $day = null)
    {
        $statuses = ['Pending', 'Reviewed', 'Approved', 'Disapproved'];
        
        $sql = "SELECT approval, COUNT(*) AS count
                FROM loan_application
                WHERE MONTH(created_at) = :month AND YEAR(created_at) = :year";
    
        if ($day !== null) {
            $sql .= " AND DAY(created_at) <= :day";
        }
    
        $sql .= " GROUP BY approval";
    
        $stmt = $this->getConnection()->prepare($sql);
    
        // Bind parameters
        $params = [
            ':month' => $month,
            ':year' => $year,
        ];
        if ($day !== null) {
            $params[':day'] = $day;
        }
    
        $stmt->execute($params);
        $result = $stmt->fetchAll();
    
        // Format result into a more usable associative array
        $counts = array_fill_keys($statuses, 0);
    
        // Map query results to the counts array
        foreach ($result as $row) {
            $counts[$row['approval']] = $row['count'];
        }
    
        return $counts;
    }

    public function getTerminateApplicationsByDate($year, $month, $day = null, $approval = null)
    {
        $sql = "SELECT id, status, uploaded_at 
                FROM  membership_termination_requests  
                WHERE MONTH(uploaded_at) = :month AND YEAR(uploaded_at) = :year";
    
    //    // If a specific day is selected, add it to the query
       if ($day !== null) {
            $sql .= " AND DAY(uploaded_at) <= :day";
        }
    
        if ($approval !== null) {
            $sql .= " AND status = :status";
        }

        $stmt = $this->getConnection()->prepare($sql);
    
    //    // Bind parameters
       $params = [
            ':month' => $month,
            ':year' => $year,
        ];
        if ($day !== null) {
            $params[':day'] = $day;
       }

       if ($approval !== null) {
        $params[':status'] = $status;
    }
    
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function getTerminateApplicationsCountByStatus($year, $month, $day = null)
    {
        $statuses = ['Pending', 'Approved', 'Rejected'];

        $sql = "SELECT status, COUNT(*) AS count
                FROM membership_termination_requests
                WHERE MONTH(uploaded_at) = :month AND YEAR(uploaded_at) = :year";

        if ($day !== null) {
            $sql .= " AND DAY(uploaded_at) <= :day";
        }

        $sql .= " GROUP BY status";

        $stmt = $this->getConnection()->prepare($sql);

        // Bind parameters
        $params = [
            ':month' => $month,
            ':year' => $year,
        ];
        if ($day !== null) {
            $params[':day'] = $day;
        }

        $stmt->execute($params);
        $result = $stmt->fetchAll();

        // Format result into a more usable associative array
        $counts = array_fill_keys($statuses, 0);

        // Map query results to the counts array
        foreach ($result as $row) {
            $counts[$row['status']] = $row['count'];
        }

        return $counts;
    }

    public function getMembershipListReport() 
    {
    $stmt = $this->getConnection()->prepare("SELECT name, id_number, applicant_id, approval FROM member_application");
        $stmt->execute();
       return $stmt->fetchAll();
    }

    public function getMemberIDByIdNumber($IdNum) {
        $stmt = $this->db->prepare("SELECT member_id FROM member_info WHERE id_number = :id_number");
        $stmt->bindParam(':id_number', $IdNum);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function getAccountDetails($memberId) {
        $stmt = $this->db->prepare("SELECT * FROM MemberLogin WHERE member_id = :member_id");
        $stmt->bindParam(':member_id', $memberId);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function updateMemberInfo($id_number, $data)
    {
        $stmt = $this->getConnection()->prepare("UPDATE member_application 
        SET name = :name, 
            id_number = :id_number, 
            email = :email, 
            marital_status = :marital_status, 
            gender = :gender, 
            religion = :religion, 
            ethnicity = :ethnicity, 
            home_address = :home_address, 
            postcode = :postcode, 
            state = :state, 
            membership_number = :membership_number, 
            pf_number = :pf_number, 
            position_grade = :position_grade, 
            office_address = :office_address, 
            office_postcode = :office_postcode, 
            city = :city, 
            phone_office = :phone_office, 
            phone_mobile = :phone_mobile, 
            phone_home = :phone_home, 
            monthly_salary = :monthly_salary, 
            famName1 = :famName1, 
            famRelationship1 = :famRelationship1, 
            famIC1 = :famIC1, 
            famName2 = :famName2, 
            famRelationship2 = :famRelationship2, 
            famIC2 = :famIC2,
            yuran_masuk_value = :yuran_masuk_value, 
            modal_syer_value = :modal_syer_value, 
            modal_yuran_value = :modal_yuran_value, 
            wang_deposit_value = :wang_deposit_value, 
            sumbangan_kebajikan_value = :sumbangan_kebajikan_value, 
            simpanan_tetap_value = :simpanan_tetap_value, 
            lain_lain_value = :lain_lain_value
        WHERE id_number = :id_number"); // Use prepare() for SQL statements with variables
        $stmt->execute([ // Use execute() to run the query
            ':name' => $data['name'],
            ':id_number' => $data['id_number'],
            ':email' => $data['email'],
            ':marital_status' => $data['marital_status'],
            ':gender' => $data['gender'],
            ':religion' => $data['religion'],
            ':ethnicity' => $data['ethnicity'],
            ':home_address' => $data['home_address'],
            ':postcode' => $data['postcode'],
            ':state' => $data['state'],
            ':membership_number' => $data['membership_number'],
            ':pf_number' => $data['pf_number'],
            ':position_grade' => $data['position_grade'],
            ':office_address' => $data['office_address'],
            ':office_postcode' => $data['office_postcode'],
            ':city' => $data['city'],
            ':phone_office' => $data['phone_office'], 
            ':phone_mobile' => $data['phone_mobile'],
            ':phone_home' => $data['phone_home'],
            ':monthly_salary' => $data['monthly_salary'],
            ':famName1' => $data['famName1'],
            ':famRelationship1' => $data['famRelationship1'],
            ':famIC1' => $data['famIC1'],
            ':famName2' => $data['famName2'],
            ':famRelationship2' => $data['famRelationship2'],
            ':famIC2' => $data['famIC2'],
            ':yuran_masuk_value' => $data['yuran_masuk_value'],
            ':modal_syer_value' => $data['modal_syer_value'],
            ':modal_yuran_value' => $data['modal_yuran_value'],
            ':wang_deposit_value' => $data['wang_deposit_value'],
            ':sumbangan_kebajikan_value' => $data['sumbangan_kebajikan_value'],
            ':simpanan_tetap_value' => $data['simpanan_tetap_value'],
            ':lain_lain_value' => $data['lain_lain_value'] 
        ]);
        return $stmt; // Return the PDOStatement object
    }

    public function updatePasswordMember($memberID, $new_password) {
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

        $query = "UPDATE memberlogin SET password = :password WHERE member_id = :member_id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':member_id', $memberID);

        return $stmt->execute();
    }

    public function getALKIDByIdNumber($IdNum) {
        $stmt = $this->db->prepare("SELECT alk_id FROM alklogin WHERE id_number = :id_number");
        $stmt->bindParam(':id_number', $IdNum);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function updatePasswordALK($alkID, $new_password) {
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

        $query = "UPDATE alklogin SET password = :password WHERE alk_id = :alk_id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':alk_id', $alkID);

        return $stmt->execute();
    }

    public function getAdminIDByIdNumber($IdNum) {
        $stmt = $this->db->prepare("SELECT admin_id FROM adminlogin WHERE id_number = :id_number");
        $stmt->bindParam(':id_number', $IdNum);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function updatePasswordAdmin($adminID, $new_password) {
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

        $query = "UPDATE adminlogin SET password = :password WHERE admin_id = :admin_id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':admin_id', $adminID);

        return $stmt->execute();
    }
}
