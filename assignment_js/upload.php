<!-- 13.Write a PHP program to upload a file to the server. -->
<?php
$target_dir = "uploads/"; // Directory where the file will be uploaded
$target_file = $target_dir . basename($_FILES["file"]["name"]); // Path to store the uploaded file

// Check if the file is uploaded successfully
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>
