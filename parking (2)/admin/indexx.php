<?php
if(isset($_GET['edit_id'])){
	echo $_GET['editid'];
	include('dbcon.php');
	$sql="select * from user";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_object($result);
	echo $row->name;
	echo $row->lname;
}
?>
<html>
<header>
	</header>
	<body>
		<form action="save.php" method="get">
			<table border="1">
				<tr><td>Name</td><td><input type="text" name="firstname" placeholder="firstname" value="<?php if(isset($row->name)){echo $row->name;} ?>"></td></tr>
				<tr><td>Email</td><td><input type="email" name="email" value="<?php if(isset($row->lname)){ echo $row->lname;} ?>"></td></tr>
				<tr><td align="center" colspan="2"><input type="submit" name="formsubmit" value="Register"></td></tr>
			</table>
		</form>
	</body>
	</html>