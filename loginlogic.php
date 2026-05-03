<?php
session_start();
include "db.php";

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $stmt->bind_result($db_username, $db_password);

    if ($stmt->fetch()) {
        
        if (trim($password) == trim($db_password)) {

            $_SESSION['username'] = $db_username;

            header("Location: realestates.php");
            exit;

        } else {
            header("Location: login.php?error=wrong_password");
            exit;
        }

    } else {
        header("Location: login.php?error=wrong_password");
        exit;
    }
}
?>