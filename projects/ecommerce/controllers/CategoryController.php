<?php
include_once '../config/Database.php';
include_once '../models/Category.php';

$database = new Database();
$db = $database->getConnection();

if ($_POST['action'] == 'read') {

    $category = new Category($db);
    $stmt = $category->readAll();
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $output = '';
    foreach ($categories as $row) {
        $output .= '<li class=list-group-item id='.$row['id'] .'>'. $row['name'].'</li>';
    }

    echo $output;
}

?>