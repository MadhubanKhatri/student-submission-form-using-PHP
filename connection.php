<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formsubmission";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
	echo "";
}
else
{
	echo "Connection Fail".$conn;
}
?>