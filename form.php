<?php
include("connection.php")
?>
<h1>Student Form Submission</h1>
<form action="" method="GET">
	Roll No. <input type="text" name="roll"><br><br>
	Name <input type="text" name="name"><br><br>
	Class <input type="text" name="class"><br><br>
	Phone No. <input type="text" name="phone"><br><br>
	Address <input type="text" name="address"><br><br>
	<input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_GET['submit'])) 
{
	$rn = $_GET['roll'];
	$name = $_GET['name'];
	$class = $_GET['class'];
	$phone = $_GET['phone'];
	$add = $_GET['address'];
	if ($rn!="" && $name!="" && $class!="" && $phone!="" && $add!="") 
	{
		$insert_data = "INSERT INTO DETAILS VALUES ('$rn','$name','$class','$phone','$add')";
		$data = mysqli_query($conn,$insert_data);
		if ($data)
		{
		echo "Data inserted";
		header("location:checkdata.php");
		}
	}
	else
	{
		echo "All fields are required";
	}
}

?>


