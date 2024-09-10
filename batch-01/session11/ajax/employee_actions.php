<?php
include_once '../config/Database.php';
include_once '../classes/Employee.php';

$database = new Database();
$db = $database->getConnection();
$employee = new Employee($db);

// Handle Employee Actions (add, edit, delete)

if ($_POST['action'] == 'add') {
    $employee->name = $_POST['name'];
    $employee->email = $_POST['email'];
    $employee->address = $_POST['address'];
    $employee->phone = $_POST['phone'];

    if ($employee->create()) {
        echo 'Employee Added Successfully';
    } else {
        echo 'Failed to Add Employee';
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'edit') {
    
        $employee->id = $_POST['id'];
        $employee_data = $employee->getEmployeeById();
        // print_r($employee_data);
        //Return the employee data in JSON format
        echo json_encode($employee_data);
    
}


if (isset($_POST['action']) && $_POST['action'] == 'update') {
    $employee->id = $_POST['id'];
    $employee->name = $_POST['name'];
    $employee->email = $_POST['email'];
    $employee->address = $_POST['address'];
    $employee->phone = $_POST['phone'];
    
    if ($employee->update()) {
        echo 'Employee updated Successfully';
    } else {
        echo 'Failed to Update Employee';
    }
}

if ($_POST['action'] == 'delete' && isset($_POST['id'])) {
    // Set employee ID to be deleted
    $employee->id = $_POST['id'];

    // Attempt to delete the employee
    if ($employee->delete()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to delete employee.']);
    }
}
?>
