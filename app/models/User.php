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
        $stmt = $this->getConnection()->prepare("INSERT INTO account (name, email, password) VALUES (:name, :email, :password)"); 

        // Execute the query with the provided data
        $stmt->execute([ 
            ':name' => $data['name'], 
            ':email' => $data['email'],
            ':password' => password_hash($data['password'], PASSWORD_BCRYPT), // Hash the password for security
        ]);

        // Return the statement object to check execution if needed
        return $stmt;
    }


    public function findByEmail($email)
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM account WHERE email = :email");
        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

}
