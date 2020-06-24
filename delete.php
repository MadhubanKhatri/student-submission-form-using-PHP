<?php
include("connection.php");
$rollno = $_GET['rn'];
$query = "DELETE FROM DETAILS WHERE ROLLNO='$rollno'";
$data = mysqli_query($conn,$query);
if($data) 
{
	echo "Data Deleted Successfully";
}
else
{
	echo "Data not deleted";
}
?>