<!-- Write a program for implementing login with username andnpassword and redirect to welcome page if validated otherwise prints an error. -->
<?php
session_start();

// Define valid username and password
$valid_username = "user";
$valid_password = "password";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password are valid
    if ($username === $valid_username && $password === $valid_password) {
        // Valid credentials, redirect to welcome page
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        // Invalid credentials, display error message
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
