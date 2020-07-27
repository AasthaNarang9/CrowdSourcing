<?php
$servername = "localhost";
$name= $_POST["name"];
$num = $_POST["num"];
$date = $_POST["date"];
$dbname = "dbms";
$name="root";
$pass="";

// Create connection
$conn = mysqli_connect($servername,$name,$pass,$dbname);
// Check connec

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO card VALUES ('".$name."', '".$num."', '".$date."')";

if ($conn->query($sql)) {
    header("location: final.html" );
 
} else {

	    header("location: perks.html?not_stored");
}

$conn->close();
?>

