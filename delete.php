<?php 
session_start();
include_once("db.php");

if (isset($_GET['finnid'])) {

    $finnid = (int) $_GET['finnid'];

    $stmt = $conn->prepare("DELETE FROM real_estates WHERE finnid = ?");
    $stmt->bind_param("i", $finnid);

    if ($stmt->execute()) {
        header("Location: realestates.php");
        exit;
    } else {
        echo "Error deleting record.";
    }

} else {
    echo "Finn ID not provided.";
}
?>