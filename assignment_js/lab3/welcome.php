<!-- 11.Write a program for implementing login with username and password and redirect to welcome page if validated otherwise prints 
an error. -->
<?php
// Start session to access username
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
    // If not logged in, redirect to login page
    header("Location: index.php");hb 
    exit();
}

// Display welcome message
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>You have successfully logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
