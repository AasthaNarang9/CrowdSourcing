<?php

session_start();
$servername = "localhost";
$username = $_POST["username"];
$password = $_POST["password"];
$dbname = "dbms";
$name="root";
$pass="";





 

// Create connection
$conn = mysqli_connect($servername,$name,$pass,$dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$sql = "SELECT * From sign where username='$username' and pass='$password'";
$res= mysqli_query($conn,$sql) or die(mysqli_error($conn));

$count=mysqli_num_rows($res);



if ($count == 1) 

{
	if($row=$res->fetch_assoc())
	{
		$_SESSION['name']=$row['username'];	
	}
	$_SESSION['login']=true;
    header("location: profile.php");
 
} else 

{

	    header("location: index.php");
}

$conn->close();
?>
