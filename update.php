<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once('db.php');

if (!isset($_POST['submit'])) {
    header("Location: realestates.php");
    exit;
}

$finnid  = (int) $_POST['finnid'];
$company = $_POST['company'];
$broker  = $_POST['broker'];
$address = $_POST['address'];
$price   = $_POST['price'];

$stmt = $conn->prepare("
    UPDATE real_estates 
    SET company=?, broker=?, address=?, price=? 
    WHERE finnid=?
");

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sssii", $company, $broker, $address, $price, $finnid);

if ($stmt->execute()) {
    header("Location: realestates.php");
    exit;
} else {
    die("Update error: " . $stmt->error);
}
?>