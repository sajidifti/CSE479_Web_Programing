<?php
session_start();
require_once('db.php');

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION["user_id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    $confirm_new_password = $_POST["confirm_new_password"];

    $sql = "SELECT password FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stored_password = $row["password"];

    if (!password_verify($old_password, $stored_password)) {
        $error = "Incorrect old password";
    } elseif ($new_password !== $confirm_new_password) {
        $error = "New passwords do not match";
    } else {
        $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
        $update_query = "UPDATE users SET password = ? WHERE id = ?";
        $stmt_update = $conn->prepare($update_query);
        $stmt_update->bind_param("si", $new_password_hash, $user_id);
        if ($stmt_update->execute()) {
            $success_message = "Password changed successfully. You will be logged out automatically in 5 seconds.";
        } else {
            $error = "Failed to change password";
        }
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Change Password</title>
</head>

<body>
    <h2>Change Password</h2>

    <?php
    if (isset($error)) {
        echo '<p style="color: red;">' . $error . '</p>';
    } elseif (isset($success_message)) {
        echo '<p style="color: green;">' . $success_message . '</p>';
    }

    if (isset($success_message)) {
        sleep(5);
        header("Location: logout.php");
        exit();
    }
    ?>

    <form method="post" action="">
        <label>Old Password:</label>
        <input type="password" name="old_password" required><br>
        <label>New Password:</label>
        <input type="password" name="new_password" required><br>
        <label>Confirm New Password:</label>
        <input type="password" name="confirm_new_password" required><br>
        <button type="submit">Change Password</button>
    </form>
    <br><br>
    <button onclick="location.href='dashboard.php'">Back to Dashboard</button>
    <button onclick="location.href='profile.php'">Profile</button>
    <?php if ($_SESSION["role"] == "admin"): ?>
        <button onclick="location.href='viewusers.php'">View Users</button>
    <?php endif; ?>
    <button onclick="location.href='logout.php'">Logout</button>
</body>

</html>