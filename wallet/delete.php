<html>
 <head>
DELETE
 </head>
 <body>
 <table>
     <form action="delete.php" method="post">
      <tr>
	  <th>Enter Name</th>
	  <td><input type="text" placeholder="Name" name="name"/></td>
	  <th>Email</th>
	  <td><input type="text" placeholder="Email" name="email"/></td>
	<td colspan="2"><input type="submit" value="SEARCH" name="button"/></td>
	</tr>
	  </form>
   </table>
 </body>
 </html>
 
 
 
 
<table align="center" width="80%" border="1" style="margin-top:10px;">
<tr>
<th>S.no</th>
<th>Name</th>
<th>Age</th>
<th>Mobile</th>
<th>Email</th>
<th>Edit</th>
</tr>
<?php
 if(isset($_POST['button']))
 {
include('datacon.php');
$name=$_POST['name'];
$email=$_POST['email'];
$sql="SELECT * FROM `customer` WHERE `name`LIKE '%$name%' AND `email` LIKE '%$email%'";
$run= mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
	echo "<tr><td colspan='6'>No Record Found</td></tr>";
}

else
{
	$count=0;
	while($data=mysqli_fetch_assoc($run))
	{
		$count++;
		?>
		
<tr>
<td><?php echo $count;?></td>
<td><?php echo $data['name'];?></td>
<td><?php echo $data['age'];?></td>
<td><?php echo $data['mobile'];?></td>
<td><?php echo $data['email'];?></td>
<td><a href="deleteform.php?sid=<?php echo $data['id'];?>">Delete</a></td>
</tr>
<?php
	}
}
 }
?>
</table>