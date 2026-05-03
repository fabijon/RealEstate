<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once('db.php');

if (isset($_POST['submit'])) {

    $company = $_POST['company'];
    $broker  = $_POST['broker'];
    $address = $_POST['address'];
    $price   = $_POST['price'];
    $finnid  = (int) $_POST['finnid'];

    if (empty($company) || empty($broker) || empty($address) || empty($price) || empty($finnid)) {
        header("Location: createrealestates.php?error=empty");
        exit;
    }

    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM real_estates WHERE finnid = ?");
    $stmt->bind_param("i", $finnid);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row['total'] > 0) {
    header("Location: createrealestates.php?error=exists");
    exit;
}

    // INSERT
    $sql = "INSERT INTO real_estates (company, broker, address, price, finnid)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssdi", $company, $broker, $address, $price, $finnid);

    if ($stmt->execute()) {
        header("Location: realestates.php");
        exit;
    } else {
        die("Error saving data: " . $stmt->error);
    }
}
?>