<style>
h1
{   
    font-family:"Copperplate Gothic Light";
	text-shadow:10px 10px 21px white;
	font-weight:bold;
    text-align:center;
	color:white;	
	font-size:30px;
}
.detail
{
   font-size:10px;
    position: absolute;
    top: 15%;
    left: 20%;
    width:60%;
	height:70%;
	background-color:black;}	

table
{
font-family:"Copperplate Gothic Light";
font-weight:bold;
color:white;
background-color:green;
border:5px solid white;
}	

.table
{left: 10%;
	width:80%;
	height:80%;
position: absolute;
	top:2%;

}
a
{
	color:white;
	font-size:20px;
}
.HOME
{
position:absolute;
top:15%;
left:92%;
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
</style>
<html>
<head>
</head>
<body>
<div class="container">
  <img src="brown.jpg" alt="brown" style="width:99%;" >
  </div>
 <div class="detail">


<?php
include('datacon.php');

$sid=$_GET['sid'];
$sql="SELECT * FROM `customer` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);

$data=mysqli_fetch_assoc($run);
?>
<div class="table">
<table align="center" border="1" style="width:80%; height:80%;">
<br/>
<br/>
<br/>
<br/>
<tr>
<th colspan="3">USER DETAILS</th>
</tr>
<tr>
<td>NAME</td>
<td><?php echo $data['name'];?></td>
</tr>
<tr>
<td>ADDRESS</td>
<td><?php echo $data['address'];?></td>
</tr>
<tr>
<td>AGE</td>
<td><?php echo $data['age'];?></td>
</tr>
<tr>
<td>MOBILE</td>
<td><?php echo $data['mobile'];?></td>
</tr>
<tr>
<td>EMAIL</td>
<td><?php echo $data['email'];?></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><?php echo $data['password'];?></td>
</tr>
<tr>
<td>BALANCE</td>
<td><?php echo $data['balance'];?></td>
</tr>
<br/>
<br/>
</table>
<p style="align-text:right";>

<div class="HOME"><button id="home" onclick="location.href='index.php';">LOGOUT</button></div>

</p>
</div>
</div>
</body>
</html>