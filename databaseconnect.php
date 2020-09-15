<?php
require_once 'conexion.php';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    echo "Connected to $database at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}