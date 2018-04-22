<html>
<head>
<style>
table
{
color:white;
border-color:black;
font-size:20px;
font-family:Copperplate Gothic Light;
font-weight:bold;
}
input
{
font-size:15px;
font-family:Copperplate Gothic Light;
font-weight:bold;
}
 .paytm
 {
    font-family:"Copperplate Gothic Light";
	text-shadow:10px 10px 21px black;
	font-weight:bold;
    color:white;
    font-size:100px;
    position: absolute;
    top: 20%;
    left:51%;
    transform: translate(-50%, -50%);
   }

.d1
{background-color:white;
position:absolute;
top:35%;
left:35%;
width:33%;
height:45%;
}
	
.d2
{background-color:black;
position:absolute;
top:10px;
left:8px;
width:96%;
height:93%;
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
	font-size:12px;
	
}
</style>
</head>
<?php
include('datacon.php');

$sid=$_GET['sid'];
$sql="SELECT * FROM `customer` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<body>
<div class="container">
<img src="brown.jpg" alt="Green" style="width:99%;" >
   <div class="paytm">EWALLET</div>
 <div class="d1"> 
 <div class="d2">
<table border="1";>
<form action="upd.php"  method="post">
<tr>
<br/>
<td>NAME</td>
<td> <input type="text" name="name" value=<?php echo $data['name'];?>></td>
</tr>
<tr>
<td>ADDRESS </td>
<td><input type="text" name="address" value=<?php echo $data['address'];?> ></td>
</tr>
<tr>
<td>AGE</td>
<td><input type="number" name="age" value=<?php echo $data['age'];?> ></td>
</tr>
<tr>
<td>MOBILE NO.</td>
 <td><input type="text" name="mobile" value=<?php echo $data['mobile'];?> ></td>
</tr>
<tr>
<td>PASSWORD</td>
 <td><input type="text" name="password" value=<?php echo $data['password'];?>></td>
</tr>
<tr>
<td>EMAIL ID </td>
<td><input type="text" name="email" value=<?php echo $data['email'];?> ></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="hidden" name="sid" value=<?php echo $data['id'];?>>
</td>
</tr>
<td></td>
<td><input id="b1" type="submit" value="UPDATE DETAIL" name="button"></td>
</form>
</table> 
</div>
</div>
</div>
</body>
</html>