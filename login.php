<?php   	
session_start(); 

if(isset($_SESSION['id'])) {
	
header("location:admin.php"); 	
	
	
}

?>
<style>
	
	.logo {
	position: absolute;
	left: 346px;
	top: 50px;		
	}
	.form{ 
	
	
	font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial," sans-serif"; 
		position: absolute;
		background-color: cornflowerblue;
		border-radius: 10px;
		margin-top: 300px;
		margin-left: 300px;
		padding: 20px;
		length: 50px;
		width: 350px;
		font-size: 22px;
	
	}
	
	.border{
	background-color: antiquewhite;
	length: 1000px;
	width: 726px;
	position: absolute;
	top: 53px;
	height: 643px;
	left: 143px;
		border-radius: 10px;
	}
	
</style> 

<?php   

include("connection.php"); 



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<div class="border">  </div>
<form action="login.php" method="post" class="form">
  
  <label> User Name :
  <input type="textfield" name="user1">    </label> 
	
	<br>   <br>
	<label> Password : &nbsp;
	<input type="password" name="password1">    </label> 
	
	<br>  <br>
	<input type="submit" name="login">
	
	
	
	
</form>
<img src="logo.png" width="281" height="255" alt=""/ class="logo">
 
	</body>



</html>


<?php 


if(isset($_POST['login'])) {
	
	
	$user=$_POST['user1']; 
	$pass=$_POST['password1']; 
	
	
	$query=" select * from users where names='$user' and password='$pass' ";
	
	$execute=sqlsrv_query($con,$query); 
	
	$fetch=sqlsrv_fetch_array($execute); 
	
	
	if($user=$fetch['names'] and $pass=$fetch['password'] )
		
	{
	
		session_start(); 
		
		$_SESSION['id']=$user; 
	
	
	
	header('location:admin.php');  } 
	
	else {  
	
	echo"invalid";
	
	}
	
	
	
	
}




?>













