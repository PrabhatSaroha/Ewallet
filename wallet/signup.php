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
    left: 51%;
    transform: translate(-50%, -50%);
   }

.d1
{background-color:white;
position:absolute;
top:35%;
left:35%;
width:35%;
height:52%;
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
<table border="1";>
<form action="signup.php"  method="post">
<tr>
<br/>
<td>NAME</td>
<td> <input type="text" name="name" size="30"; required/></td>
</tr>
<tr>
<td>ADDRESS </td>
<td><input type="text" name="address" size="30"; required/></td>
</tr>
<tr>
<td>AGE</td>
<td><input type="number" name="age" size="30"; required/></td>
</tr>
<tr>
<td>MOBILE NO.</td>
 <td><input type="number" name="mobile" size="30"; required/></td>
</tr>
<tr>
<td>EMAIL ID </td>
<td><input type="text" name="email" size="30"; required/></td>
</tr>
<tr>
<td>CREATE PASSWORD </td>
<td><input type="text" name="password" size="30"; required/></td>
</tr>
<td></td>
<td><input id="b1" type="submit" value="CREATE ACCOUNT" name="button"></td>
</form>
</table> 
</div>
</div>
<div class="HOME"><button id="home" onclick="location.href='index.php';">HOME</button></div>
</div>
</body>
</html>

<?php
if(isset($_POST['button']))
{
 include('datacon.php');
 $name=$_POST['name'];
 $address=$_POST['address'];
 $age=$_POST['age'];
 $mobile=$_POST['mobile'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 
 $query = "insert into customer(name,address,age,mobile,email,password) values('$name','$address','$age','$mobile','$email','$password')" ;
 $run = mysqli_query($con,$query);
 if($run == true)
	{
		?>
		<script>
		alert('Signup Successfully!!');
		window.open('index.php','_self');
		</script>
		<?php
	}
}
?>