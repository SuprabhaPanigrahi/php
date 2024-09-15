<?php
require_once("interfaces/crud.php");
class Category implements Crud{
     private $conn;
     private $table_name = "categories";
     private $id;
     private $name;

     public function __construct($db){
        $this->conn = $db;
     }
     public function getId(){
        return $this->id;
     }
     public function setId($id){
       $this->id =$id;
     }
     public function getName(){
        return $this->name;
     }
     public function setName($name){
         $this->name=$name;
     }
     //Define Methods for CRUD
     public function readAll(){
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY name";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
     }
     public function create($object){
     
     }
     public function update($object){
     
     }
     public function delete($id){
     
     }
     public function readById($id){
     
     }

}

?>