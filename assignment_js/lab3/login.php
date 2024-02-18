<!--11. Write a program for implementing login with username andnpassword and redirect to welcome page if validated otherwise prints an error. -->
<?php
// Start session to store login status
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username and password (for demonstration purposes, just hardcoded values)
    $validUsername = "Sabby";
    $validPassword = "password";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $validUsername && $password === $validPassword) {
        // Store username in session to indicate user is logged in
        $_SESSION["username"] = $username;
        
        // Redirect to welcome page
        header("Location: welcome.php");
        exit();
    } else {
        // Print error message
        echo "Invalid username or password";
    }
}
?>

<!--then write welcome. php -->