<?php
class Employee {
    private $conn;
    private $table_name = "employees";

    public $id;
    public $name;
    public $email;
    public $address;
    public $phone;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create Employee
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (name, email, address, phone) VALUES (:name, :email, :address, :phone)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':phone', $this->phone);

        return $stmt->execute();
    }

    // Read Employees
    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Update Employee
    public function update() {
        // SQL query to update employee data
        $query = "UPDATE " . $this->table_name . " 
                  SET name = :name, email = :email, address = :address, phone = :phone 
                  WHERE id = :id";
    
        // Prepare the SQL statement
        $stmt = $this->conn->prepare($query);
    
        // Bind parameters to prevent SQL injection
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':phone', $this->phone);
    
        // Execute the query and check if the update was successful
        if ($stmt->execute()) {
            return true;  // Successfully updated
        } else {
            // Print error if any issue occurs
            print_r($stmt->errorInfo());
            return false;  // Failed to update
        }
    }
    

    // Delete Employee
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        // Bind the ID parameter
        $stmt->bindParam(':id', $this->id);

        // Execute the query
        return $stmt->execute();
    }

    public function getEmployeeById(){
        // Prepare the SQL query with a placeholder for the ID
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        
        // Prepare the statement
        $stmt = $this->conn->prepare($query);
        
        // Bind the ID parameter securely
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        
        // Execute the query
        $stmt->execute();
        
        // Return the fetched employee record as an associative array
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}  
    
?>
