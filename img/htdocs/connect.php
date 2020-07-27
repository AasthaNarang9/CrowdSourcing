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

// Create connection
$conn = new mysqli($servername, $name,$pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sign (username, dob , number, email,pass) VALUES ('$username', '$dob', '$number','$email','$password')";

if ($conn->query($sql) == TRUE) {
    header("location: index.html?account_created");
 
} else {

	    header("location: index.html?account_is _not_created");
}

$conn->close();
?>
<?php
$cookie_name = $_POST["username"];
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>