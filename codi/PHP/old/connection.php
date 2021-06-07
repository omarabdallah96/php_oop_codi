<?php

$host = "localhost";
$user = "khaldoun";
$password = "root";
$db = "php_session";

$conn = new mysqli($host, $user, $password, $db);
if($conn->connect_errno){
    echo "Connection Failed: " . $conn->connect_error;
    exit();
}