<?php
class Student {
  private $id;
  private $name;
  private $email;
  private $phone;
  private $gender;
  private $fees;
  private $course;

  public function __construct($id, $name, $email, $phone, $gender, $fees, $course) {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;
    $this->gender = $gender;
    $this->fees = $fees;      
    $this->course = $course;
  }

  public function getId() {     
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }
  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getPhone() {
    return $this->phone;
  }
  public function setPhone($phone) {
    $this->phone = $phone;
  }
  public function getGender() {
    return $this->gender; 
  }
  public function setGender($gender) {
    $this->gender = $gender;
  } 
  public function getFees() {
    return $this->fees;
  }
  public function setFees($fees) {
    $this->fees = $fees;
  }
  public function getCourse() {
    return $this->course;
  }
  public function setCourse($course) {
    $this->course = $course;
  }

  public function __toString(){
    return "{id:" . $this->id . ", name:" . ($this->gender=='Male'?'Mr.':'Miss.').$this->name . ", email:" . $this->email . ", phone:" . $this->phone . ", gender:" . $this->gender . ", fees:" . $this->fees . ", course:" . $this->course . "}";
  }
}

$student1 = new Student(1, "Alice", "alice@example.com", "1234567890", "Female", 1500, "Computer Science");
echo $student1;

$student2 = new Student(2, "Bob", "bob@example.com", "0987654321", "Male", 2000, "Mathematics");

$students = [
  $student1, 
  $student2,
  new Student(3, "Charlie", "charlie@example.com", "1122334455", "Male", 1800, "Physics"),
  new Student(4, "Diana", "diana@example.com", "2233445566", "Female", 1700, "Chemistry"),
  new Student(5, "Eve", "eve@example  .com", "3344556677", "Female", 1600, "Biology")
];

foreach ($students as $student) {
  echo $student . "\n";
}

$totalFees = array_reduce($students,function($prev,$curr){
      return $prev + $curr->getFees();
},0);

echo "Total Fees: " . $totalFees;

$maleStudents = array_filter($students,function($student){
  return $student->getGender() == 'Male';
});
echo "\nMale Students:\n";
foreach ($maleStudents as $student) {
  echo $student . "\n";
}