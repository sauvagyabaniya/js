<!-- 4. wite a program using PHP continue. -->
<!DOCTYPE html>
<html>
<head>
    <title>PHP Continue</title>
</head>
<body>
    <h2>PHP Continue</h2>

    <ul>
        <?php
        // Using a for loop to generate numbers from 1 to 10
        for ($i = 1; $i <= 10; $i++) {
            // Skip the number 5 using continue
            if ($i == 5) {
                continue; // Skip the rest of the loop's body for this iteration
            }
            echo "<li>$i</li>";
        }
        ?>
    </ul>

</body>
</html>
