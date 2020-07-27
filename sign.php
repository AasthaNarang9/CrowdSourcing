<?php
$servername = "localhost";
$username = $_POST["username"];
$dob = $_POST["dob"];
$number = $_POST["number"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm = $_POST["confirm"];
$dbname = "dbms";
$name="root";
$pass="";

// Create connection
$conn = mysqli_connect($servername,$name,$pass,$dbname);
// Check connec

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO sign VALUES ('".$username."', '".$dob."', '".$number."','".$email."','".$password."','".$confirm."')";

if ($conn->query($sql)) {
    header("location: login.html");
 
} else {

	    header("location: index.html?account_is _not_created");
}

$conn->close();
?>

