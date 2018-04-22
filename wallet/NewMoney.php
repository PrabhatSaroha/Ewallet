
<html>
 <head>
 <style>
 .paytm{
   
    font-family:"Copperplate Gothic Light";
	text-shadow:10px 10px 25px black;
	font-weight:bold;
    color:white;
    font-size:100px;
    position: absolute;
    top: 20%;
    left: 47%;
    transform: translate(-50%, -50%);
    
	}

 .add{
      width:200px;
      height:60px;
	  border-radius:12px;
	  text-align:center;
      background-color:black;
      font-family:"Copperplate Gothic Light";
      color:white;
      text-shadow:15px 15px 25px black;
	  font-weight:bold;
      font-size:50px;
      position: absolute;
      top: 45%;
      left: 22%;
}


.withdraw {
        width:400px;
	    height:60px;
	    border-radius:12px;
	    text-align:center;
        background-color:black;
        font-family:"Copperplate Gothic Light";
        color:white;
	 	text-shadow:15px 15px 25px black;
		font-weight:bold;
	    font-size:50px;
        position: absolute;
        top: 45%;
        right: 22%
}

.update{
      width:300px;
      height:60px;
	  border-radius:12px;
	  text-align:center;
      background-color:black;
      font-family:"Copperplate Gothic Light";
      color:white;
      text-shadow:15px 15px 25px black;
	  font-weight:bold;
      font-size:50px;
      position: absolute;
      top: 70%;
      left: 19%;
}
.delete{
      width:300px;
      height:60px;
	  border-radius:12px;
	  text-align:center;
      background-color:black;
      font-family:"Copperplate Gothic Light";
      color:white;
      text-shadow:15px 15px 25px black;
	  font-weight:bold;
      font-size:50px;
      position: absolute;
      top: 70%;
      left: 52%;
}

.container .addbutton {
   
    position:absolute;
    top: 55%;
    left: 25%;
    background-color:gold;
    color:black;
    font-size: 16px;
	font-family:"Copperplate Gothic Light";
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;
	}

.container .addbutton:hover 
{   color:white;
    background-color:black;
}


.container .wbutton {
   
    position:absolute;
    top: 55%;
    left: 60%;
    background-color:gold;
    color:black;
    font-size: 16px;
	font-family:"Copperplate Gothic Light";
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;
	}

.container .wbutton:hover 
{ 
    color:white;
    background-color: black;
}
.container .Ubutton {
   
    position:absolute;
    top: 80%;
    left: 25%;
    background-color:gold;
    color:black;
    font-size: 16px;
	font-family:"Copperplate Gothic Light";
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;
	}

.container .Ubutton:hover 
{ 
    color:white;
    background-color: black;
}

.container .Dbutton {
   
    position:absolute;
    top: 80%;
    left: 60%;
    background-color:gold;
    color:black;
    font-size: 16px;
	font-family:"Copperplate Gothic Light";
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;

	}

.container .Dbutton:hover 
{ 
    color:white;
    background-color: black;
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
  <img src="brown.jpg" alt="Green" style="width:99%;">
   <div class="paytm">EWALLET</div>
  
  <div class="add">ADD</div>
  <div><button class="addbutton" onclick="location.href='add.php';">CLICK</button></div>
  
  <div class="withdraw">WITHDRAW</div>
  <div><button class="wbutton" onclick="location.href='withdraw.php';">CLICK</button></div>
  
  <div class="delete">DELETE</div>
  <div><button class="Dbutton" onclick="location.href='delete.php';">CLICK</button></div>
 
  <div class="update">UPDATE</div>
  <div><button class="Ubutton" onclick="location.href='update.php';">CLICK</button></div>
  
  <div class="HOME"><button id="home" onclick="location.href='index.php';">logout</button></div>
  
 
 
</div>

 </body>
 </html>