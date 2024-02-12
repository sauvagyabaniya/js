<!-- 1. Write a PHP program using if-else statement -->
<!DOCTYPE html>
<html>
<head>
    <title>Checker</title>
</head>
<body>
    <h2>Even or Odd Checker</h2>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number entered by the user
        $number = $_POST["number"];

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            echo "<p>$number is even.</p>";
        } else {
            echo "<p>$number is odd.</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>
</body>
</html>
