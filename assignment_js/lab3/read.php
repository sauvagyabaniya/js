<!--8. Write a PHP program to read a file and display the content using PHP. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read File with PHP</title>
</head>
<body>
    <h2>File Content</h2>
    
    <?php
    // Specify the file path
    $file_path = "js.txt";
    
    // Check if the file exists
    if (file_exists($file_path)) {
        // Read the file content
        $content = file_get_contents($file_path);
        
        // Display the file content
        echo nl2br($content); // nl2br() function adds HTML line breaks before newlines
    } else {
        echo "File not found.";
    }
    ?>
    
</body>
</html>
