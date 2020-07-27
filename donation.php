<?php
$servername = "localhost";
$radio = $_POST["radio"];
$num = $_POST["num"];
$currency = $_POST["currency"];
$dbname = "dbms";
$name="root";
$pass="";

// Create connection
$conn = mysqli_connect($servername,$name,$pass,$dbname);
// Check connec

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO donation VALUES ('".$radio."', '".$num."', '".$currency."')";

if ($conn->query($sql)) {
    header("location: cont.php?type=d&amt=$num&curr=$currency");
 
} else {

	    header("location: perks.html?not_stored");
}

$conn->close();
?>

