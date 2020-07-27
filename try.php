<?php
$servername = "localhost";
$username = $_POST['username'];
$password = $_POST['password'];
$dbname = "wt";
$name="root";
$pass="";
// Create connection
$conn = new mysqli($servername,$name,$pass,$dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

if(isset($_POST['add']))
{



$sql = "INSERT INTO idk VALUES ('".$username."','".$password."')";

if ($conn->query($sql)) {
    echo "Successful";
    echo $username;
    echo $password;
    echo $sql;
 
} 
else {

	    echo "error".$sql."<br>".$conn->error;
}
}
else if(isset($_POST['display']))
{
	$sql="SELECT * FROM idk";
	$result=$conn->query($sql);

	if($result->num_rows > 0)
	{
	
		while($row=$result->fetch_assoc())
		{
			echo "USERNAME : ".$row['username'];
			echo "PASSWORD : ".$row['password'];
		}
	}
	else
		echo "No result found";
}

else if(isset($_POST['delete']))
{
	$sql="DELETE FROM idk WHERE username='".$username."'";
	if($conn->query($sql)==TRUE)
		{
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

}
 else if (isset($_POST['update']))
 {
 	$sql="UPDATE idk SET username='".$username."', password='".$password."' WHERE username='".$username."'";
 	if ($conn->query($sql) === TRUE) {
		    echo "Record updated successfully";
		} else {
		    echo "Error updating record: " . $conn->error;
		}


 }
$conn->close();
?>