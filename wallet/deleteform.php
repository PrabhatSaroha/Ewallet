

<?php

include('datacon.php');
$id=$_REQUEST['sid'];
 
 $query = "DELETE FROM `customer` WHERE `id`='$id';" ;
 $run = mysqli_query($con,$query);
 if($run == true)
	{
		?>
		<script>
		alert('Data Delete Successfully!!');
		window.open('NewMoney.php?sid=<?php echo $id;?>','_self');
		</script>
		<?php
	}

?>
