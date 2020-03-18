<?php
include('dbcon.php');

$sql ="select * fom user";
$result = mysqli_query($con,$sql);
?>
<table border="1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Last Name</td>
<td>Edit</td>
<td>Delete</td>
</tr>
<?php
while($row = mysqli_fetch_array($result)){
	?>
	<tr>
	
<td><?php echo $row['Id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['lname'];?></td>
</tr>
<?php
//echo $row['id'].'***************'.$row['name'].'*****************'.$row['lname'].'<br>';
}
?>
</table>