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

    public function findByMemberID($member_id)
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM member_account WHERE member_id = :member_id");
        $stmt->execute([':member_id' => $member_id]);
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

    

    //aq dh tukar code ikut database yg aq bagi dlm group 
    public function createYuran($data)
    {
        $stmt = $this->getConnection()->prepare(
            "INSERT INTO yuran (
                applicant_id, yuran_masuk, yuran_masuk_value, modal_syer, modal_syer_value,
                modal_yuran, modal_yuran_value, wang_deposit, wang_deposit_value,
                sumbangan_kebajikan, sumbangan_kebajikan_value, simpanan_tetap, simpanan_tetap_value,
                lain_lain, lain_lain_value, slip_gaji
            ) VALUES (
                :applicant_id, :yuran_masuk, :yuran_masuk_value, :modal_syer, :modal_syer_value,
                :modal_yuran, :modal_yuran_value, :wang_deposit, :wang_deposit_value,
                :sumbangan_kebajikan, :sumbangan_kebajikan_value, :simpanan_tetap, :simpanan_tetap_value,
                :lain_lain, :lain_lain_value, :slip_gaji
            )"
        );

        $stmt->execute([
            ':applicant_id' => $data['applicant_id'],
            ':yuran_masuk' => $data['yuran_masuk'],
            ':yuran_masuk_value' => $data['yuran_masuk_value'] ?? null,
            ':modal_syer' => $data['modal_syer'],
            ':modal_syer_value' => $data['modal_syer_value'] ?? null,
            ':modal_yuran' => $data['modal_yuran'],
            ':modal_yuran_value' => $data['modal_yuran_value'] ?? null,
            ':wang_deposit' => $data['wang_deposit'],
            ':wang_deposit_value' => $data['wang_deposit_value'] ?? null,
            ':sumbangan_kebajikan' => $data['sumbangan_kebajikan'],
            ':sumbangan_kebajikan_value' => $data['sumbangan_kebajikan_value'] ?? null,
            ':simpanan_tetap' => $data['simpanan_tetap'],
            ':simpanan_tetap_value' => $data['simpanan_tetap_value'] ?? null,
            ':lain_lain' => $data['lain_lain'],
            ':lain_lain_value' => $data['lain_lain_value'] ?? null,
            ':slip_gaji' => $data['slip_gaji']
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
}
