<html>
	<head>
	<title>Change PASSWORD OPERATION</title>
	</head>
	<body>
	<?php 
		session_start();
		include("Connection.php");
		$uid=$_SESSION["uid"];
		$pwd=$_POST["pwd"];
		$cpwd=$_POST["cpwd"];	
		$sql="update user_details set New_Password='$pwd', Confirm_Password='$cpwd' where User_ID ='$uid'";		
		$result= mysql_query($sql);
		if($result == FALSE) { 
			die(mysql_error()); // TODO: better error handling
		}
		else{
			header("location:Home.php");
		}
			

	?>
	</body>
</html>
	