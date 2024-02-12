<!-- 2. write a program using PHP switch statement -->
<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>
    <h2>Day of the Week</h2>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the day number entered by the user
        $dayNumber = $_POST["dayNumber"];

        // Use a switch statement to determine the day of the week
        switch ($dayNumber) {
            case 1:
                $dayName = "Monday";
                break;
            case 2:
                $dayName = "Tuesday";
                break;
            case 3:
                $dayName = "Wednesday";
                break;
            case 4:
                $dayName = "Thursday";
                break;
            case 5:
                $dayName = "Friday";
                break;
            case 6:
                $dayName = "Saturday";
                break;
            case 7:
                $dayName = "Sunday";
                break;
            default:
                $dayName = "Invalid day number";
        }

        // Display the day of the week
        echo "<p>Day of the week: $dayName</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter a day number (1-7): <input type="number" name="dayNumber" min="1" max="7">
        <input type="submit" value="Check">
    </form>
</body>
</html>
