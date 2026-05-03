<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['username'])) {
    header("Location: realestates.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="home">
        <h1>Fab<span>ijon</span></h1>
		<div class="login">
            <form action="loginlogic.php" method="post">
                <h4>Login</h4>
                <input type="text" placeholder="Username" name="username" required autofocus>
                <input type="password"  placeholder="Password" name="password" required>

                 <?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'wrong_password') {
        echo "<p style='color:red; font-size:12px;'>Password i gabuar</p>";
    }
}
?>
                
                <button type="submit" name="submit">Login</button>
                
            </form>
        </div>
    </div>
</body>
</html>