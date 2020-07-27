<?php
$con=mysqli_connect("localhost", "root","","dbms");

$select=mysqli_query($con,"SELECT img1 from basic");
echo "<table>";
while ($row=mysqli_fetch_array($select))
 {
	echo "<tr>";

	echo "<td>";?><img src="<?php echo $row['img1']; ?>" style="width : 100%"> <?php echo "</td>";
	
	echo "</td>"; 

}
echo "</table>";
?>

</body>
</html>