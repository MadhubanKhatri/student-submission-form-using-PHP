<style>
td{
	padding: 20px;
}
</style>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM DETAILS";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
if ($total!=0) 
{
	?>
	<table>
		<tr>
			<th>Roll No.</th>
			<th>Name</th>
			<th>class</th>
			<th>Phone</th>
			<th>Address</th>
			<th colspan="2">Operation</th>
		</tr>
	
	<?php
	while ($result = mysqli_fetch_assoc($data)) 
	{
		echo "<tr>
				<td>".$result['rollno']."</td>
				<td>".$result['name']."</td>
				<td>".$result['class']."</td>
				<td>".$result['phone']."</td>
				<td>".$result['address']."</td>
				<td><a href='update.php?rn=$result[rollno]&sn=$result[name]&cls=$result[class]&pn=$result[phone]&add=$result[address]'>Edit</a></td>
				<td><a href='delete.php?rn=$result[rollno]' onclick='return checkdelete()'>Delete</a></td>
		</tr>";
		// echo $result['rollno']."".$result['name']."".$result['class']."".$result['phone']."".$result['address']."<br>";
	}
}
else
{
	echo "No records";
}

?>
</table>
<script type="text/javascript">
	function checkdelete() {
		return confirm("Are you sure?");
	}

</script>