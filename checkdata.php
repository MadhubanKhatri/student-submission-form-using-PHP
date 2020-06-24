<?php
include("connection.php");
// error_reporting(0);
?>
<form action="" method="get">
	Name <input type="" name="name" value="">
	<input type="submit" name="submit" value="submit">
</form>
<?php
if (isset($_GET['name'])) 
{
	$name = $_GET['name'];
	$query = "SELECT * FROM DETAILS WHERE name='$name'";
	$data = mysqli_query($conn,$query);
	$result = mysqli_fetch_assoc($data);
	echo "Your Name is: ".$result['name']."<br><br>";
	echo "Your Roll No is: ".$result['rollno']."<br><br>";
	echo "Your Class is: ".$result['class']."<br><br>";
	echo "Your Phone is: ".$result['phone']."<br><br>";
	echo "Your Address is: ".$result['address'];
	
}


?>
