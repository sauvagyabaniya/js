<!-- 3. write a program using different PHP loops  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>
<body>
    <h1>PHP Loops</h1>

    <?php
    // 1. For Loop
    echo "<h2>For Loop:</h2>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Iteration $i <br>";
    }

    // 2. While Loop
    echo "<h2>While Loop:</h2>";
    $j = 1;
    while ($j <= 5) {
        echo "Iteration $j <br>";
        $j++;
    }

    // 3. Do-While Loop
    echo "<h2>Do-While Loop:</h2>";
    $k = 1;
    do {
        echo "Iteration $k <br>";
        $k++;
    } while ($k <= 5);

    // 4. Foreach Loop
    echo "<h2>Foreach Loop:</h2>";
    $fruits = array("Apple", "Strawberry", "Orange", "Grape");
    foreach ($fruits as $fruit) {
        echo "$fruit <br>";
    }
    ?>

</body>
</html>
