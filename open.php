<?php
$servername = "localhost";
$username = $_POST["username"];
$dob = $_POST["dob"];
$number = $_POST["number"];
$email = $_POST["email"];
$password = $_POST["pass"];
$dbname = "DBMS";
$name="root";
$pass="";

$myfile = fopen("C:\ xampp\ htdocs\ newfile.txt", "w") or die("Unable to open file!");
$txt = $servername;
fwrite($myfile, $txt);
$txt = $username;
fwrite($myfile, $txt);
$txt = $dob;
fwrite($myfile, $txt);
$txt = $number;
fwrite($myfile, $txt);
$txt = $email;
fwrite($myfile, $txt);
$txt = $password;
fwrite($myfile, $txt);
$txt = $dbname;
fwrite($myfile, $txt);
fclose($myfile);
?>
