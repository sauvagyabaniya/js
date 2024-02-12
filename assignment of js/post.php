<!-- 7.Write a program to handle form using POST method -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method</title>
</head>
<body>
    <h2>PHP Form Handling</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $key => $value) {
            echo "<p><strong>$key:</strong> $value</p>";
        }
    }
    ?>
    <form method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
