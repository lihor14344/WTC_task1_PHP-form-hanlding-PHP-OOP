<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));
    $confirm_password = trim(htmlspecialchars($_POST['confirm_password']));

    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "<h2>Oops! All fields must be completed.</h2>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h2>Oops! The email format is invalid. Please enter a valid email.</h2>";
        } 
        elseif ($password !== $confirm_password) {
            echo "<h2>Oops! Your passwords don't match. Please try again.</h2>";
        } 
        else {
            echo "<h2>Registration Successful!</h2>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Password:</strong>$password</p>";
        }
    }
} else {
    echo "<h2>Invalid form submission. Please submit the form correctly.</h2>";
}
?>
