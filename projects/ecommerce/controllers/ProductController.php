<?php
include_once '../config/Database.php';
include_once '../models/Product.php';

$database = new Database();
$db = $database->getConnection();

if ($_POST['action'] == 'read') {

    $product = new Product($db);
    $stmt = $product->readAll();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($products);
}

?>