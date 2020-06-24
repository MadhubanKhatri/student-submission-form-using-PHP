<?php
include("connection.php");
error_reporting(0);
?>
<h1>Updata Your Data Here</h1>
<form action="" method="GET">
	Roll No. <input type="text" name="roll" value="<?php echo $_GET['rn'];?>"><br><br>
	Name <input type="text" name="name" value="<?php echo $_GET['sn'];?>"><br><br>
	Class <input type="text" name="class" value="<?php echo $_GET['cls'];?>"><br><br>
	Phone No. <input type="text" name="phone" value="<?php echo $_GET['pn'];?>"><br><br>
	Address <input type="text" name="address" value="<?php echo $_GET['add'];?>"><br><br>
	<input type="submit" name="submit" value="update">
</form>

<?php
if (isset($_GET['submit'])) {
	$rollno = $_GET['roll'];
	$name = $_GET['name'];
	$class = $_GET['class'];
	$phone = $_GET['phone'];
	$add=$_GET['address'];
	$query = "UPDATE DETAILS SET NAME='$name', CLASS='$class',PHONE='$phone',ADDRESS='$add' WHERE ROLLNO='$rollno'";
	$data = mysqli_query($conn,$query);
	if ($data)
	{
		echo "Updataed Successfully";
	}
	else
	{
		echo "Not updated";
	}
}
?>
<a href="studentData.php">Click to Get Data</a>