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
     <form action="withdraw.php" method="post">
      <br/>NAME<br/><input type="text" placeholder="Name" name="name"/>
	  <br/><br/>PASSWORD <br/><input type="password" placeholder="Password" name="password"/>
       <br/><br/>WITHDRAW MONEY FROM WALLET <br/><input type="number" placeholder="Enter Amount(Rs.)" name="withdraw"/>
	  <br/><br/><br/><input id="b1" type="submit" value="WITHDRAW MONEY" name="button"/>
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
	 $withdraw=$_POST['withdraw'];
	 include('datacon.php');
	 $qry="SELECT `id`, `balance` FROM `customer` WHERE `name`LIKE'$name' AND `password`LIKE '$password'";
	 $run= mysqli_query($con,$qry);
	 
	 if($run==true)
	 {
	while($data=mysqli_fetch_assoc($run))
	{
		$bal=$data['balance'];
		if($bal>=$withdraw)
		{
		?>
		<script>
		alert('Withdraw Successfully!!');
		window.open('wd.php?sid=<?php echo $data['id'];?>&wd=<?php echo $withdraw;?>','_self');
		</script>
<?php
		}
		else
	 {
		 ?>
		<script>
	alert('You have not enough balance');
	window.open('withdraw.php','_self');
	</script> 
	<?php
	 }
	}
    }
	 

 }
 
 ?>
 
 
 
 