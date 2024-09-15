<?php
require_once("interfaces/crud.php");
class User
{
    private $conn;
    private $table_name = "user";
    private $id;
    private $name;
    private $email;
    private $password;



    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this -> name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this -> email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this -> password;
    }

    //Define Methods for CRUD
    public function readAll()
    {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id desc";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function create($object)
    {
        $query = "INSERT INTO " . $this->table_name . " (name, email,password) VALUES (:name, :email, :password)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $object->name);
        $stmt->bindParam(':email', $object->email);
        $stmt->bindParam(':password', $object->password);
        return $stmt->execute();
    }
    public function update($object)
    {

    }
    public function delete($id)
    {

    }
    public function readById($id)
    {

    }
}