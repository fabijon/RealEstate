<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("db", "user", "pass", "real_estate_db");

if ($conn->connect_error) {
    die("DB ERROR: " . $conn->connect_error);
}
?>