<?php
session_start();
require_once('db.php');

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION["user_id"];

$sql = "SELECT id, stu_id, name, email, username FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
</head>

<body>
    <h2>Profile</h2>
    <p>ID:
        <?php echo $user["id"]; ?>
    </p>
    <p>Student ID:
        <?php echo $user["stu_id"]; ?>
    </p>
    <p>Name:
        <?php echo $user["id"]; ?>
    </p>
    <p>Email:
        <?php echo $user["email"]; ?>
    </p>
    <p>Username:
        <?php echo $user["username"]; ?>
    </p>

    <br><br>
    <button onclick="location.href='dashboard.php'">Back to Dashboard</button>
    <button onclick="location.href='changepassword.php'">Change Password</button>
    <?php if ($_SESSION["role"] == "admin"): ?>
        <button onclick="location.href='viewusers.php'">View Users</button>
    <?php endif; ?>
    <button onclick="location.href='logout.php'">Logout</button>
</body>

</html>