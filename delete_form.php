<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$customerID = $_POST["customerID"];

  

$host = "localhost";
$dbname = "myDB";
$username = "root";
$password = "";
         
$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}           
        
$sql = "DELETE FROM Customer WHERE customerID = '$customerID'";


if ($conn->query($sql) === TRUE) {
	echo "Records updated: ";
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>