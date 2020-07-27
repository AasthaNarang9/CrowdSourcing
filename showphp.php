<!DOCTYPE html>
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
$cookie_name = "user";
$cookie_value = "1";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/sign.html"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>