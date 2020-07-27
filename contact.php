<?php
$servername = "localhost";
$username = $_POST["name"];
$card = $_POST["card"];
$date = $_POST["date"];
$code = $_POST["code"];
$dbname = "dbms";
$name="root";
$pass="";

// Create connection
$conn = mysqli_connect($servername,$name,$pass,$dbname);
// Check connec

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO bank VALUES ('".$username."', '".$card."', '".$date."','".$code."')";

if ($conn->query($sql)) {
    header("location: login.html");
 
} else {

	    header("location: index.html?error");
}

$conn->close();
?>

