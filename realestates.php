<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include_once "db.php";

$username = $_SESSION['username'];

$sql = "SELECT company, broker, address, price, finnid FROM real_estates";
$result = $conn->query($sql);

if (!$result) {
    die("SQL ERROR: " . $conn->error);
}

$realEstates = [];

while ($row = $result->fetch_assoc()) {
    $realEstates[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estates</title>
    <link rel="stylesheet" type="text/css" href="css/realestates.css">
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
        <a href="dashboard.php"><i class="fa-solid fa-gauge"></i>Dashboard</a>
        <a href="realestates.php" style="color: #f6ae3f;"><i class="fa-solid fa-house"></i>Real Estates</a>
        <a href="logout.php" class="logout"><i class="fa-solid fa-right-from-bracket"></i>Log out</a>
    </div>
    <div class="info">
            <a href="dashboard.php">Fabijon</a>
            <p>/</p>
            <a href="realestates.php">Real Estates</a>
            <a href="createrealestates.php" id="buttona"><button><i class="fa-solid fa-plus"></i>Create real estates</button></a>
        </div>
<table>
    <thead>
        <tr>
            <th>Company</th>
            <th>Broker</th>
            <th>Address</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($realEstates as $info): ?>
        <tr>
            <td><?= htmlspecialchars($info['company']) ?></td>
            <td><?= htmlspecialchars($info['broker']) ?></td>
            <td><?= htmlspecialchars($info['address']) ?></td>
            <td><?= htmlspecialchars($info['price']) ?></td>
            <td>
                <a href="edit.php?finnid=<?= urlencode($info['finnid']) ?>" class="edit-link">Edit</a>

<a href="delete.php?finnid=<?= urlencode($info['finnid']) ?>" class="delete-link" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>

</body>
</html>