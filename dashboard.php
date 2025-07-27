<?php
require_once 'config/db.php';
require_once 'includes/functions.php';

if (!isLoggedIn()) {
    redirect('login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authify - Dashboard</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>This is your dashboard.</p>
        <a href="logout.php">Logout</a>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>