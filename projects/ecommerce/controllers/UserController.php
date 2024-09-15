<?php
include_once '../config/Database.php';
include_once '../models/User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);
//print_r($_POST);
if ($_POST['action'] == 'add') {
    $user->setName($_POST['uname']);
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    if ($user->create($user)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}

?>