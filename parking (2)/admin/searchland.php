<?php

$server="localhost";
$user_name="root";
$password="";
$data_base="parking";

$con=new mysqli($server,$user_name,$password,$data_base);
if($con->connect_error)
{
	die("failed".$con->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>My Customers</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <!-- <th style="width:60%;">Name</th>
    <th style="width:40%;">Country</th> -->
                    <th style="width:40%;">District</th>

    <th style="width:60%;">Location</th>
                    <th style="width:40%;">City</th>
                    <th style="width:40%;">Capacity</th>
                    <th style="width:40%;">Ploat No</th>
                    <th style="width:40%;">Total Area</th>
  </tr>
 <?php
		$s="SELECT * FROM location";
		if(!$stmt=mysqli_query($con,$s))
		{
			die("Prepare error");
		}
		$d=array();
		while($row=mysqli_fetch_array($stmt))
		{
			$d[]=$row;
			$Location_no=$row['Location_no'];
			$District=$row['District'];
			$City=$row['City'];
			$Capacity=$row['Capacity'];
			$plot_no=$row['plot_no'];
			$Total_area=$row['Total_area'];


		

		?>
		
		
		<tr>
						<td><?php echo $District;?></td>
			
			<td><?php echo $Location_no;?></td>

			<td><?php echo $City;?></td>
						<td><?php echo $Capacity;?></td>
						<td><?php echo $plot_no;?></td>
						<td><?php echo $Total_area;?></td>

			<td><a href="" ><button class="btn-info">Download</button></a></td>
			<!-- <td>
  <a href="editsyllabus.php?y_id=<?php echo $y_id;?>"><button class="btn-success">Edit</button></a></td>
  <td><a href="deletesyllabus.php?y_id=<?php echo $y_id ;?>"><button  class="btn-danger">Delete</button></a></td> -->
</tr>
	<?php }?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
