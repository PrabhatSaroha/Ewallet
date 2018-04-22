<html>
 <head>
 <style>
 .paytm
 {
    font-family:"Copperplate Gothic Light";
	text-shadow:10px 10px 21px black;
	font-weight:bold;
    color:white;
    font-size:100px;
    position: absolute;
    top: 20%;
    left: 51%;
    transform: translate(-50%, -50%);
   
	}

.d1
{background-color:white;
position:absolute;
top:35%;
left:37.5%;
width:25%;
height:55%;
}
	
.d2
{background-color:black;
position:absolute;
top:10px;
left:8px;
width:95%;
height:95%;
}

form
{
color:white;
font-size:20px;
text-align:center;
}

#b1
{
background-color:gold;
    color:black;
 
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;
}


</style>

 </head>
 <body>
<div class="container">
  <img src="brown.jpg" alt="Green" style="width:99%;" >
   <div class="paytm">EWALLET</div>
    <div class="d1">
    <div class="d2">
     <form action="add.php" method="post">
      <br/><br/>NAME<br/><input type="text" placeholder="Name" name="name"/>
	  <br/><br/>PASSWORD <br/><input type="password" placeholder="Password" name="password"/>
       <br/><br/>ADD MONEY TO WALLET <br/><input type="number" placeholder="Enter Amount(Rs.)" name="add"/>
	  <br/><br/><br/><input id="b1" type="submit" value="ADD MONEY" name="button"/>
	  </form>
    </div> 
 
    </div>
</div>

 </body>
 </html>
 <?php
 if(isset($_POST['button']))
 {
	 $name=$_POST['name'];
	 $password=$_POST['password'];
	 $add=$_POST['add'];
	 include('datacon.php');
	
$sql="UPDATE `customer` SET `balance`=balance+$add WHERE `name`LIKE '$name'AND `password`LIKE '$password'";
$run= mysqli_query($con,$sql);
if($run==true)
{
	?>
	<script>
	alert('Add Amount Successfully');
	window.open('NewMoney.php','_self');
	</script>
	<?php
}

 }
 
 ?>
 
 
 
 