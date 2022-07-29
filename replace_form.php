<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$newfirstname = $_POST["newfirstname"];
$newlastname = $_POST["newlastname"];
$newemail = $_POST["newemail"];
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
        
$sql = "update customer set firstname = '$newfirstname', lastname = '$newlastname', email = '$newemail'
where customerID='$customerID'";


if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$customerID."-".$newfirstname."-".$newlastname."-".$newemail;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>