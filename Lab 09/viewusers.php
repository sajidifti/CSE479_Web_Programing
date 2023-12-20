<?php
session_start();
require_once('db.php');

if ($_SESSION["role"] !== "admin") {
    header("Location: dashboard.php");
    exit();
}

$sql = "SELECT id, stu_id, name, email, username, role FROM users";
$result = $conn->query($sql);
$users = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>View Users</title>
    <style>
        table,
        th,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h2>View Users</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Student ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Role</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php echo $user["id"]; ?>
                </td>
                <td>
                    <?php echo $user["stu_id"]; ?>
                </td>
                <td>
                    <?php echo $user["name"]; ?>
                </td>
                <td>
                    <?php echo $user["email"]; ?>
                </td>
                <td>
                    <?php echo $user["username"]; ?>
                </td>
                <td>
                    <?php echo $user["role"]; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br><br>
    <button onclick="location.href='dashboard.php'">Dashboard</button>
    <button onclick="location.href='profile.php'">Profile</button>
    <button onclick="location.href='changepassword.php'">Change Password</button>
    <button onclick="location.href='logout.php'">Logout</button>
</body>

</html>