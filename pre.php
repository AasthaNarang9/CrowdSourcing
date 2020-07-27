<?php
session_start();
$servername = "localhost";
$dbname = "dbms";
$name="root";
$pass="";
$project_name=$_POST['project_name'];

// Create connection
$conn = mysqli_connect($servername,$name,$pass,$dbname);
// Check connect

if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
$sql="Select img1,img2,img3 from basic where name='".$project_name."'";

$result=$conn->query($sql);

if($result->num_rows == 1)
{
  while($row =$result->fetch_assoc())
  {
  
  echo $img1= $row['img1'];
  echo $img2= $row['img2'];
  echo $img3= $row['img3'];
  
  }
}

?>