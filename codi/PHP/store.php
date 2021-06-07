<?php

require_once 'vendor/autoload.php';
use App\Classes\User;

$model = new User();
$model->store($_POST['name'], $_POST['username'], $_POST['password'], $_POST['email']);

$data = [
    'status' => 200,
    'message' => 'Success'
];

header('Content-Type: application/json');
echo json_encode($data);