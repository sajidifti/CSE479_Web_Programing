<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $raw_password = $_POST["password"];
    $con_password = $_POST["con_password"];
    $email = $_POST["email"];
    $studentId = $_POST["student_id"];
    $name = $_POST["name"];
    

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    }

    if ($raw_password != $con_password) {
        $error = "Password and Confirm Password does not match";
    }
    
    $pass_regex = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()-_+=])(?=.*[0-9]).{8,}$/";


    if (!preg_match($pass_regex, $raw_password)) {
        $error = "Invalid password format";
    } else {
        $password = password_hash($raw_password, PASSWORD_DEFAULT); // Hash the password
    }
    

    $stu_regex = "/^\d{4}-\d{1}-\d{2}-\d{3}$/";


    if (!preg_match($stu_regex, $studentId)) {
        $error = "Invalid student ID format";
    }
    
    if (empty($error)) {
        $check_username_query = "SELECT id FROM users WHERE username = ?";
        $stmt_check_username = $conn->prepare($check_username_query);
        $stmt_check_username->bind_param("s", $username);
        $stmt_check_username->execute();
        $result_check_username = $stmt_check_username->get_result();

        if ($result_check_username->num_rows > 0) {
            $error = "Username already taken. Please choose a different one.";
        } else {
            $insert_query = "INSERT INTO users (stu_id, name, username, email, password, role) VALUES (?, ?, ?, ?, ?, ?)";

            $role = "admin";

            $stmt_insert = $conn->prepare($insert_query);
            $stmt_insert->bind_param("ssssss",$studentId, $name, $username, $email, $password, $role);

            if ($stmt_insert->execute()) {
                header("Location: login.php");
                exit();
            } else {
                $error = "Registration failed. Please try again later.";
            }
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <h2></h2>Sign Up</h2>
    <?php
    if (isset($error)) {
        echo '<p style="color: red;">' . $error . '</p>';
    }
    ?>

    <form method="post" action="">
        <label>Student ID:</label>
        <input type="text" name="student_id" required><br>
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <label>Confirm Password:</label>
        <input type="password" name="con_password" required><br>
        <button type="submit">Sign Up</button>
    </form>
    <br><br>
    <p>Already have an account?</p><br>
    <button onclick="location.href='login.php'">Log In</button>
</body>
</html>
