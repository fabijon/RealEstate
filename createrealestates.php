<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];

include_once('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Real Estate</title>

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>

<div class="navbar">
    <h1>Fab<span>ijon</span></h1>

    <div class="profile">
        <i class="fa-solid fa-user" style="color:#fff;"></i>
        <div class="editprofile">
            <h4><?php echo htmlspecialchars($username); ?></h4>
            <p>Editor</p>
        </div>
    </div>
</div>


<div class="pages-left">
    <a href="dashboard.php"><i class="fa-solid fa-gauge"></i> Dashboard</a>
    <a href="realestates.php" style="color:#f6ae3f;"><i class="fa-solid fa-house"></i> Real Estates</a>
    <a href="logout.php" class="logout"><i class="fa-solid fa-right-from-bracket"></i> Log out</a>
</div>


<div class="realestates">
        <div class="info">
            <a href="dashboard.php">Fabijon</a>
            <p>/</p>
            <a href="realestates.php">Real Estates</a>
            <p>/</p>
            <p>Create Real Estates</p>
        </div>
        <form class="realestatesinfo" action="registerrealestates.php" method="post">
        <div class="realestates-content">
            <p>Company</p>
            <input type="text" placeholder="company" name="company" required>
        </div>
        <div class="realestates-content">
            <p>Broker</p>
            <input type="text" placeholder="broker"  name="broker" required>
        </div>
        <div class="realestates-content">
            <p>Address</p>
            <input type="text" placeholder="Address"  name="address" required>
        </div>
        <div class="realestates-content">
            <p>Price</p>
            <input type="text" name="price" placeholder="price" required  oninput="this.value = this.value.replace(/[^0-9]/g, '');">
        </div>
        <div class="realestates-content">
            <p>Finn id</p>
            <input type="text" name="finnid" placeholder="finn id" required pattern="\d{9}" title="Finn ID must be exactly 9 digits." maxlength="9" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
         <?php if (isset($_GET['error']) && $_GET['error'] == 'exists'): ?>
    <span class="error-msg">Ky Finn ID ekziston tashmë</span>
<?php endif; ?></div> 
        <button type="submit" name="submit"><i class="fa-solid fa-floppy-disk"></i>Save</button>
        </form>  
    </div>  

</body>
</html>