<!DOCTYPE html>
<html data-ng-app="">
 <head>
 <title>Title</title>
 <meta charset="UTF-8" />
<?php
$servername = "13.233.65.175";
$username = "phpmyadmin";
$password = "toor";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully","\n";


// Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

$conn->close();
?>
</body>

</html>