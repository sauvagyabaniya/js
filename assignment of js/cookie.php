<!-- 10.write a program using $_COOKIE in php -->
<?php
// Check if the cookie is set
if(isset($_COOKIE['user'])){
    $user = $_COOKIE['user'];
    echo "Welcome back, $user!";
} else {
    // If the cookie is not set, display a form to set it
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user = $_POST['username'];
        setcookie('user', $user, time() + (86400 * 30), "/"); // Set the cookie for 30 days
        echo "Cookie is set!";
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
    <h2>Set Cookie</h2>
    <form method="post">
        <label for="username">Enter your name:</label><br>
        <input type="text" id="username" name="username"><br>
        <input type="submit" value="Set Cookie">
    </form>
</body>
</html>
<?php
    }
}
?>
