<?php    include("connection.php");            ?>


<style> 

	.ins{
	font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial," sans-serif";
	font-size: 52px;
	position: absolute;
	left: 440px;
	top: 98px;		
	}

	.form{
		
		font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial," sans-serif"; 
		margin: auto;
		padding: auto;
		font-size: 24px;
		padding: 20px; 
		background-color: aliceblue;
		border-color: aliceblue;
		border-radius: 10px; 
		
	}
	
	
</style> 

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>





<body>

<p><img src="logo.png" width="222" height="225" alt=""/>  </p>  <div class="ins">  Insert           </div>
<table width="555" height="316" border="0" class="form">
  <tbody>
    <tr>
      <td>
      	<form method= "post" action="insert.php">
   
 		<label>  Team name   &nbsp;  &nbsp;   &nbsp; &nbsp;  &nbsp;                            
			<input type="text" name="team">  	</label>  
			
			 <br>  
			
			
			<label>  Player      &nbsp;    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp;    &nbsp;  &nbsp;                        
			  <input type="text" name="player">  	</label>  
			<br> 
				
				<label>  Role  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;   &nbsp;    &nbsp;  &nbsp;   &nbsp;                         
			      <input type="text" name="role">  	</label> 
				<br> 
				<label>  Highest Score      &nbsp;                       
			      <input type="text" name="score">  	</label> 
			<br> 
				
				<label>  Wickets   &nbsp;   &nbsp;  &nbsp;   &nbsp;     &nbsp;  &nbsp;   &nbsp;                        
			<input type="text" name="wickets">  	</label> 
				
				<br> 
				<label>  T20s   &nbsp;     &nbsp;  &nbsp;   &nbsp;    &nbsp;  &nbsp;   &nbsp;    &nbsp;  &nbsp;   &nbsp;                      
			<input type="text" name="t20">  	</label> 
					

<br> <br>

<input type="submit" value="submit"> 















</form>
    	
<?php 
	
	
	
	
	if(isset($_POST['team'])) {
		
		$team=$_POST['team'];
		
		$player=$_POST['player'];
		
		$role=$_POST['role'];
		$score=$_POST['score'];
		$wickets=$_POST['wickets'];
		$t20=$_POST['t20'];
		
		
		
		$query=" insert into $team(Players,Role,Highest_Score,Wickets,T20s) values ('$player','$role','$score','$wickets','$t20')  							";
		
		
		$execute=sqlsrv_query($con,$query); 
		
	
		
		
	}
	
	
	
	
	
	
	
	
	
	?>   	
      	
      </td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="555" height="73" border="0" class="form">
  <tbody>
    <tr>
      <td>
      <?php 
		  
		  	if(isset($execute)) {
			
			echo "successful"; 
			
			
		}
		
	
		  
		  
		  ?>
       
        
         
           </td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>






</body>
</html>