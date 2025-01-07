<?php
namespace App\Models;

use App\Core\Model;

class User extends Model
{
    public function all() 
    {
        $stmt = $this->getConnection()->query("SELECT * FROM applicant"); // Use query() for SELECT statements
        return $stmt->fetchAll(); // Use fetchAll() to get all records

    }

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

    public function findByStaffID($staff_ID)
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM staff_account WHERE staff_ID = :staff_ID");
        $stmt->bindParam(':staff_ID', $staff_ID, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findByALKID($alk_ID)
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM alk_account WHERE alk_ID = :alk_ID");
        $stmt->bindParam(':alk_ID', $alk_ID, \PDO::PARAM_STR);
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
                name, id_number, marital_status, gender, religion, ethnicity, home_address, postcode, state,
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
    public function saveLoanApplication($data)
    {
        // SQL query for inserting loan application data
        $sql = "INSERT INTO loan_application 
                (member_id, LoanType, OtherLoanType, LoanAmount, RepaymentPeriodMonths, MonthlyInstallment, dokument_pengesahan, UploadedFilePath, UploadedAt)
                VALUES 
                (:member_id, :loan_type, :other_loan_type, :loan_amount, :repayment_period_months, :monthly_installment, :dokument_pengesahan, :uploaded_file_path, :uploaded_at)";
        
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
            ':uploaded_at' => $data['uploaded_at']
        ]);
    }

    public function findLoanStatus($member_id) 
    {
        $stmt = $this->getConnection()->prepare("SELECT member_id, approval FROM loan_application WHERE member_id = :member_id");
        $stmt->execute([':member_id' => $member_id]);
        return $stmt->fetch();
    }

    public function findLoanDetails($member_id)
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM loan_application WHERE member_id = :member_id");
        $stmt->execute([':member_id' => $member_id]);
        return $stmt->fetch();
    }


    public function checkLoanBalance($member_id) 
    {
        $stmt = $this->getConnection()->prepare("
                SELECT 
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
                    la.member_id = t.member_id
                WHERE 
                    la.member_id = :member_id
                AND 
                    la.approval = 'Approved'
                GROUP BY 
                    la.member_id, la.LoanAmount;
        ");
        $stmt->execute([':member_id' => $member_id]);
        return $stmt->fetch();
    }

    public function getTransactionDetails($member_id)
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
                t.member_id = :member_id;
        ");
        $stmt->execute([':member_id' => $member_id]);
        return $stmt->fetchAll();
    }
}
