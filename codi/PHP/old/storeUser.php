<?php

require_once 'connection.php';

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// validation ..

$query = "INSERT INTO users (name, username, password, email) 
            VALUES (?, ?, ?, ?)";

if($stmt = $conn->prepare($query)){

    $stmt->bind_param('ssss', $name, $username, $password, $email);
    $stmt->execute();

    $data = [
        'status' => 200,
        'message' => 'Successfully Added'
    ];

    header('Content-Type: application/json');
    echo json_encode($data);

    $stmt->close();
}

$conn->close();