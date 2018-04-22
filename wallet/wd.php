<?php
include('datacon.php');

$sid=$_GET['sid'];
$wd=$_GET['wd'];
$sql="UPDATE `customer` SET `balance`=balance-$wd WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
?>
<script>
window.open('NewMoney.php','_self');
</script>
<?php

?>