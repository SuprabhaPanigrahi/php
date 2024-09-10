<?php
include_once '../config/Database.php';
include_once '../classes/Employee.php';

$database = new Database();
$db = $database->getConnection();

$employee = new Employee($db);

$stmt = $employee->read();
$employee_data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$output = '';
foreach ($employee_data as $row) {
    $output .= '
    <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['address'].'</td>
        <td>'.$row['phone'].'</td>
        <td>
            <button class="btn btn-warning btn-sm edit"  data-id="'.$row['id'].'">Edit</button>
            <button class="btn btn-danger btn-sm delete" data-id="'.$row['id'].'">Delete</button>
        </td>
    </tr>';
}

echo $output;
?>
