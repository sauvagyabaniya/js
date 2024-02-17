<!-- 9. write a program using $_SESSION in php -->
<?php
session_start(); // Start the session

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the submitted name in a session variable
    $_SESSION['username'] = $_POST['username'];
    header("Location: ".$_SERVER['PHP_SELF']); // Redirect to the same page to prevent form resubmission
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION</title>
</head>
<body>
    <h2>Welcome</h2>
    
    <?php
    // Check if username is set in session
    if (isset($_SESSION['username'])) {
        echo "<p>Hello, " . $_SESSION['username'] . "!</p>";
        echo "<p><a href='logout.php'>Logout</a></p>"; 
    } else {
    ?>
    <form method="post">
        <label for="username">Enter your name:</label><br>
        <input type="text" id="username" name="username"><br>
        <input type="submit" value="Submit">
    </form>
    <?php } ?>
</body>
</html>
