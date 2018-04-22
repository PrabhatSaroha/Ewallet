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
#home
{
    background-color:gold;
    color:black;
    font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;
	font-size:12px;
	align:top;
	
}
.HOME
{
position:absolute;
top:5%;
left:90%;
}

</style>

 </head>
 <body>
<div class="container">
  <img src="brown.jpg" alt="Green" style="width:99%;" >
   <div class="paytm">EWALLET</div>
    <div class="d1">
    <div class="d2">
     <form action="manager.php" method="post">
      <br/><br/><br/>MANAGER NAME<br/><input type="text" placeholder="Manager Name" name="uname"/>
	  <br/><br/>PASSWORD <br/><input type="password" placeholder="Password" name="pass"/>
	 <br/><br/><br/><br/><input id="b1" type="submit" value="Log in" name="button"/>
	  </form>
    </div> 
 
    </div>
	<div class="HOME"><button id="home" onclick="location.href='index.php';">HOME</button></div>
</div>

 </body>
 </html>
 <?php
   
   include('datacon.php');
   if(isset($_POST['button']))
   {
	   $user=$_POST['uname'];
	   $pass=$_POST['pass'];
	   $query="SELECT * FROM `manager` WHERE `name`='$user' AND `password`='$pass'";
	   $run = mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	if($row<1)
	{
		?>
		<script>
		alert('Username or Password is incorrect!!');
		window.open('manager.php','_self');
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('Successfully log in');
		window.open('NewMoney.php','_self');
		</script>
		<?php
	}

	   
	   
   }
   
   ?>