<?php

namespace App\Classes;

use App\Connection;
use PDOException;

class User
{
    private $db;

    public function __construct()
    {
        $conn = new Connection();
        $this->db = $conn->openConnection();
    }

    public function index()
    {
        $query = 'SELECT * FROM users';
        return $this->db->query($query);
    }

    public function store($name, $username, $password, $email)
    {
        try {
            $query = 'INSERT INTO users (name, username, password, email) 
                    VALUES (?, ?, ?, ?)';

            $stmt = $this->db->prepare($query);
            $password = password_hash($password, PASSWORD_BCRYPT);
            $stmt->execute([$name, $username, $password, $email]);
        } catch (PDOException $exception) {
            echo 'Internal Error';
            exit();
        }
    }

}