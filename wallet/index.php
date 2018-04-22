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
    left: 45%;
    transform: translate(-50%, -50%);
    width:90%;
	
   	
	}

.d1
{background-color:white;
position:absolute;
top:35%;
left:37.5%;
width:25%;
height:60%;
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
#b2
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
#BM
{
background-color:gold;
    color:black;
    
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius:5px;
    text-align: center;
    border-radius:12px;
   

	}
.BM{
text-align:right;
}
#BS
{
background-color:gold;
    color:black;
    
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius:5px;
    text-align: center;
    border-radius:12px;
 }

</style>

 </head>
 <body>
<div class="container">
  <img src="brown.jpg" alt="Green" style="width:99%;" >
   <div class="paytm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EWALLET
  <form class="manager" action="manager.php">
  <div class="BM"><input id="BM" type="submit" name="managerbutton" value="MANAGER LOGIN"/></div> 
  </form></div>
   <div class="d1">
    <div class="d2">
     <form action="index.php" method="post">
      <br/><br/>NAME <br/><input type="text" placeholder="Username" name="name"/>
	  <br/><br/>PASSWORD <br/><input type="password" placeholder="Password" name="password"/>
	 <br/><br/><input id="b1" type="submit" value="Log in" name="button"/>
	 <br/><br/>OR
	</form>
	<form class="Signup" action="signup.php">
  <div class="BS"><input id="BS" type="submit" name="Sign up" value="Sign up"/></div> 
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
	 include('datacon.php');
	
$sql="SELECT * FROM `customer` WHERE `name`LIKE '$name' AND `password` LIKE '$password'";
$run= mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
	?>
	<script>
	alert('Your name or password is incorrect');
	window.open('index.php?','_self');
	</script>
	<?php
}
else
{
while($data=mysqli_fetch_assoc($run))
{
		?>
		<script>
		alert('You Login Successfully!!');
		window.open('show.php?sid=<?php echo $data['id'];?>','_self');
		</script>
<?php
	
}
 }

 }
 
 ?>
 