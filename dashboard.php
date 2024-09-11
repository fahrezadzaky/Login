<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>This is your dashboard. You have successfully logged in.</p>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
