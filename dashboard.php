<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <h1>Fab<span>ijon</span></h1>
        <div class="profile">
            <i class="fa-solid fa-user" style="color: #ffffff;"></i>
            <div class="editprofile">
                <h4><?php echo htmlspecialchars($username); ?></h4>
                <p>Editor</p>
            </div>
        </div>
    </div>
    <div class="pages-left">
        <a href="dashboard.php" style="color: #f6ae3f;"><i class="fa-solid fa-gauge"></i>Dashboard</a>
        <a href="realestates.php"><i class="fa-solid fa-house"></i>Real Estates</a>
        <a href="logout.php" class="logout"><i class="fa-solid fa-right-from-bracket"></i>Log out</a>
    </div>
</body>
</html>
