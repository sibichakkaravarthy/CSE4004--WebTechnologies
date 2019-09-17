<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

$color = "red";
echo "My car is " . $color . "<br>";
//echo "My house is " . $COLOR . "<br>";
//echo "My boat is " . $coLOR . "<br>";

$txt = "Hello world!";
$x = 5;
$y = 10.5;

print $x + $y."</br>";

$cars = array("VIT","VIT-AP","VIT-CHENNAI");

//echo $cars[0];

for($i = 0; $i < count($cars); $i++)
{ 
    echo $cars[$i]. "\n"; 
}
 
$servername = "localhost";
$username = "root";
$password = "";
$db = "cse_4004";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully","\n";

$db_select= mysqli_select_db( $conn,$db );

if(!$db_select){
	die("DB not found:"." </br>" . mysqli_connect_error());
}
echo "DB communication is perfect"."<br>";

$date = date('Y-m-d H:i:s');
$date1 = date('Y-m-d') . " - " . date(" H:i:s", time()); 
$sql = "INSERT IGNORE INTO sibi (EmpID, name, date)
VALUES ('70084', 'Sibi Chakkaravarthy S', '$date1')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);

?>



</body>
</html>