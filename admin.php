<?php 

session_start();



?>



<style> 
	
	.logo{
	position: absolute;
	left: 360px;
	top: 36px;
	width: 461px;
	height: 325px;
	}
	.button{
	font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial," sans-serif";
	font-size: 22px;
	background-color: lawngreen;
	border-color: black;
	border-radius: 10px;
	position: absolute;
	left: 854px;
	top: 27px;		
		
	
	}
	
	.border{
	position: absolute;
	left: 294px;
	top: 268px;
	width: 324px;
	height: 348px;
	padding: 70px;
	background-color: lavender;
	border-radius: 10px;
	padding-left: 100px;
	}
	#a1{ 
	
	font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial," sans-serif";
		
		background-color: aquamarine;
		width: 130px;
		height: 60px;
		font-size: 40px;
		border-radius: 10px;
		padding-top: 10px;
		padding-left: 10px;
		
	}

#a2{ 
	
	font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial," sans-serif";
		
		background-color:darkgray;
		width: 130px;
		height: 60px;
		font-size: 40px;
		border-radius: 10px;
	padding-top: 10px;
		padding-left: 10px;
		
		
		
	}
#a3{ 
	
	font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial," sans-serif";
		
		background-color:burlywood;
		width: 130px;
		height: 60px;
		font-size: 40px;
		border-radius: 10px;
	padding-top: 10px;
		padding-left: 10px;
		
		
		
	}
</style>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<div class="border">      
	<p id=a1> <a href="insert.php"> Insert  </a>        </p>
	<p id=a2> <a href="#"> Update  </a>               </p>
	<p id=a3>	<a href=delete.php>  Delete  </a>				</p>
</div> 

<img src="logo.png" width="254" height="239" alt=""/ class="logo">
<form action="admin.php" method="post" >
	<input type=submit name="logout" value="logout" class="button">
	</form>
	
	
	

</body>
</html>


<?php 

if((isset($_POST['logout']))){
	
	unset($_SESSION['id']);
	
	header("location:login.php");
		
	
}



?>



