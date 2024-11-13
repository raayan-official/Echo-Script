<?php
include "../components/connect.php";
session_start();

// Check if admin_id is set in the session
if (!isset($_SESSION['admin_id'])) {
   // If admin_id is not set, redirect to the login page
   header('location:adlogin.php');
   exit; // Ensure the script stops executing after the redirect
}

$admin_id = $_SESSION['admin_id']; // Assign the admin_id from the session to the variable
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- CDN Link -->
    <?php include "../components/header.php"; ?>
    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- Header Section Start -->
<header class="header">
    <a href="../admin/dashboard.php">Admin <span>Panel</span></a>
    <div class="profile">
        <p>Admin ID: <?= htmlspecialchars($admin_id); ?></p> <!-- Displaying the admin_id -->
    </div>
</header>
<!-- Header Section End -->

<!-- Custom JS Link -->
<script src="../js/script.js"></script>
</body>
</html>
