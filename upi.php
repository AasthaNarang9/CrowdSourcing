<?php
$servername = "localhost";
$id= $_POST["upi"];
$gpay = $_POST["gpay"];
$paytm = $_POST["paytm"];
$pay = $_POST["pay"];
$dbname = "dbms";
$name="root";
$pass="";

// Create connection
$conn = mysqli_connect($servername,$name,$pass,$dbname);
// Check connec

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO upi VALUES ('".$upi."', '".$gpay."', '".$paytm."', '".$pay."')";

if ($conn->query($sql)) {
    header("location: final.html" );
 
} else {

	    header("location: perks.html?not_stored");
}

$conn->close();
?>

