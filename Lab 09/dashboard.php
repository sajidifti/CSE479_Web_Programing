<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["username"]; ?></h2>
    
    <?php if ($_SESSION["role"] == "admin"): ?>
        <button onclick="location.href='profile.php'">Profile</button>
        <button onclick="location.href='changepassword.php'">Change Password</button>
        <button onclick="location.href='viewusers.php'">View Users</button>
        <button onclick="location.href='logout.php'">Logout</button>
    <?php else: ?>
        <button onclick="location.href='profile.php'">Profile</button>
        <button onclick="location.href='changepassword.php'">Change Password</button>
        <button onclick="location.href='logout.php'">Logout</button>
    <?php endif; ?>
</body>
</html>
