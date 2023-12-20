<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $router_ip = $_POST["router_ip"];
    $personal_url = $_POST["personal_url"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $mobile_number = $_POST["mobile_number"];
    $brief_info = $_POST["brief_info"];

    // Validation with Regular Expressions
    $namePattern = '/^[A-Za-z]{1,20}(?: [A-Za-z]{1,20}){0,2}$/';
    $emailPattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{7,25}$/';
    $ipPattern = '/^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$/';
    $urlPattern = '/^(http|https):\/\/[a-zA-Z0-9_\-\.]+\.[a-zA-Z]{2,}(\/\S*)?$/';
    $dobPattern = '/^(0[1-9]|[1-2]\d|3[0-1])-(0[1-9]|1[0-2])-(19|20)\d{2}$/';
    $mobilePattern = '/^(?:\+?88)?01[3-9]\d{8}$/';
    $briefInfoPattern = '/^[A-Za-z0-9 ]{1,250}$/';

    $errors = [];

    // Validate Name
    if (!preg_match($namePattern, $name)) {
        $errors[] = "Invalid Name format. It must be 4-20 characters long with only alphabets and a single space between words.";
    }

    // Validate Email
    if (!preg_match($emailPattern, $email)) {
        $errors[] = "Invalid Email address.";
    }

    // Validate Password
    if (!preg_match($passwordPattern, $password)) {
        $errors[] = "Invalid Password format. It must contain at least one uppercase letter, one lowercase letter, one digit, and no special characters. Password length should be between 7 and 25 characters.";
    }

    // Validate IP Address
    if (!preg_match($ipPattern, $router_ip)) {
        $errors[] = "Invalid IP address format.";
    }

    // Validate Personal URL
    if (!preg_match($urlPattern, $personal_url)) {
        $errors[] = "Invalid Personal Web URL.";
    }

    // Validate Date of Birth
    if (!preg_match($dobPattern, $dob)) {
        $errors[] = "Invalid Date of Birth format. Use dd-mm-yyyy format.";
    }

    // Validate Mobile Number
    if (!preg_match($mobilePattern, $mobile_number)) {
        $errors[] = "Invalid Mobile Number. Must be a valid Bangladeshi number.";
    }

    // Validate Brief Info
    if (!preg_match($briefInfoPattern, $brief_info)) {
        $errors[] = "Invalid Brief Info. It should not contain more than 50 words and must contain only alphanumeric characters.";
    }

    // Display errors if any
    if (!empty($errors)) {
        echo "<p style='color: red;'>Error:</p>";
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        // If validation passes, you can proceed with further actions (e.g., saving to database, etc.)
        echo "<p style='color: green;'>Registration Successful!</p>";
    }
}
?>