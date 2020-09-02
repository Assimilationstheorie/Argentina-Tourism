<html>
	<head>
		<title>connect</title>
	</head>
	<body>
		<?php
		session_start();
			$uid=$_POST["uid"];
			$fnm=$_POST["fnme"];
			$lnm=$_POST["lnme"];
			$count=$_POST["coun"];
			$state=$_POST["state"];
			$city=$_POST["city"];
			$district=$_POST["dist"];
			$address=$_POST["address"];
			$pincode=$_POST["pin"];
			$mobile=$_POST["mob"];
			$phone=$_POST["pho"];
			$emailid=$_POST["eml"];			
			$newpwd=$_POST["pwd"];
			$cnfrmpwd=$_POST["cpwd"];
			
			$_SESSION["uid"]=$uid;
			/*$_SESSION["fnme"]=$fnm;
			$_SESSION["lnme"]=$lnm;
			$_SESSION["coun"]=$count;
			$_SESSION["state"]=$state;
			$_SESSION["city"]=$city;
			$_SESSION["dist"]=$district;
			$_SESSION["address"]=$address;
			$_SESSION["pin"]=$pincode;
			$_SESSION["mob"]=$mobile;
			$_SESSION["pho"]=$phone;
			$_SESSION["eml"]=$emailid;
			$_SESSION["pwd"]=$newpwd;
			$_SESSION["cpwd"]=$cnfrmpwd;*/
			
			

			include("Connection.php");
			
			
			$sql="insert into user_details
			(User_ID,
			First_Name,
			Last_Name,
			Country,
			State,
			City,
			District,
			Address,
			Pin_Code,
			Mobile_No,
			Phone_No,
			Email_ID,
			New_Password,
			Confirm_Password) 
			values('$uid','$fnm','$lnm','$count','$state','$city','$district','$address','$pincode','$mobile','$phone','$emailid','$newpwd','$cnfrmpwd')";
			
			$result=mysql_query($sql);
			if($result)
			{				
				$_SESSION['loggedin'] = true;
				$_SESSION['uid'] = $uid;
				header('Location:Welcome.php');
			}
			else
			{
				echo die(mysql_error());
				header("Location: SignUp.php");
				//echo "Error";
			}
			
		?>
	</body>
</html>