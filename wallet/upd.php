<?php

include('datacon.php');
 $name=$_POST['name'];
 $address=$_POST['address'];
 $age=$_POST['age'];
 $mobile=$_POST['mobile'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $id=$_POST['sid'];
 
 $query = "UPDATE `customer` SET `name` = '$name', `address` = '$address', `age` = '$age', `mobile` = '$mobile', `email` = '$email', `password` = '$password' WHERE `id` = $id;" ;
 $run = mysqli_query($con,$query);
 if($run == true)
	{
		?>
		<script>
		alert('Data Updated Successfully!!');
		window.open('NewMoney.php?sid=<?php echo $id;?>','_self');
		</script>
		<?php
	}

?>