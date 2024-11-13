<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Header</title>
    <?php include "header.php"; ?>
    <link rel="stylesheet" href="../css/adstyle.css">
</head>

<body>
    <header class="header">
        <a href="../admin/dashboard.php" class="logo">Admin <span>Panel</span></a>

        <div class="profile">
            <?php
            // Check if the admin_id is set and fetch the admin profile
            if (isset($admin_id)) {
                $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
                $select_profile->execute([$admin_id]);
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

                // Display the admin name if the profile is found
                if ($fetch_profile) {
                    echo '<p>' . htmlspecialchars($fetch_profile['name']) . '</p>';
                } else {
                    echo '<p>Profile not found</p>';
                }
            }
            ?>
        </div>

        <!-- Hamburger Icon -->
        <div class="hamburger" onclick="toggleMenu()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        <!-- Navbar inside the hamburger -->
        <div class="navbar">
        <a href="updateprofile.php" class="btnn">Update Profile</a>
            <a href="dashboard.php"><i class="fa-regular fa-house"></i><span>Home</span></a>
            <a href="addpost.php"><i class="fa-regular fa-pen"></i><span>Add Post</span></a>
            <a href="viewpost.php"><i class="fa-regular fa-eye"></i><span>View Post</span></a>
            <a href="adaccount.php"><i class="fa-regular fa-user"></i><span>Account</span></a>
            <a href="../components/adlogout.php" onclick="return confirm('Logout from The Website?');"><i class="fa-regular fa-sign-out"></i><span>Logout</span></a>
        
       

        <div class="flex-btn">
            <a href="adlogin.php" class="adlogin-btn">Login</a>
            <a href="regadmin.php" class="reg-btn">Sign-Up</a>
        </div>
       
        </div>
    </header>

    <script src="../js/adscript.js"></script>
</body>

</html>
