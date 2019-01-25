<?php 
include("conn.php");
?>

<html>
<body>
<table border="1" width="500">
	<tr>
		<th>Sr no</th>
		<th>Name</th>
		<th>Password</th>
	</tr>
<?php
	$sql="select * from random";	
	$result=mysqli_query($con,$sql);

//$row=mysqli_fetch_array($result,MYSQLI_NUM);
//printf ("%s (%s)\n",$row[0],$row[1]);


	while($row=mysqli_fetch_array($result))
	{
?>
	<tr>
		<td><?php echo $row['Sr no']; ?></td>
		<td><?php echo $row['Name']; ?></td>
		<td><?php echo $row['Password']; ?></td>
	</tr>
<?php
	}
?>
</table>
</body>
</html>
