<html>
	<head>
	<title>CheckUserLogin</title>
	</head>
	<body>
	<?php 
		session_start();
		include("Connection.php");
		$uid=$_POST["uid"];
		$pwd=$_POST["pwd"];
		$_SESSION["uid"]=$uid;
		$_SESSION["pwd"]=$pwd;
		
		$sql= "select User_ID, New_Password from user_details where User_ID='$uid' && New_Password= '$pwd'";
		
		$result= mysql_query($sql);
		
		if (mysql_num_rows($result)) {
				$_SESSION['loggedin'] = true;
				$_SESSION['uid'] = $uid; // $username coming from the form, such as $_POST['username']
				header("location:Welcome.php");				
			}			// something like this is optional, of course
			else
			  {				  
				  header("location: Login.php");				   				 
			  }
		
		
			
			

	?>
	</body>
	</html>
	