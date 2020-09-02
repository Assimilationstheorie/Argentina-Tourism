<html>
	<head>
		<title>Book connect</title>
	</head>
	<body>
	
	<?php 
	session_start();
		$people=$_SESSION["people"];
		$dateofbooking=$_SESSION["dateofbooking"];
		$packagename=$_SESSION['Packagename'];
		$totalprice=$_SESSION["totalprice"];
		
		
		
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
				{  								
					include("../Connection.php");
					$uid=$_SESSION["uid"];
					$sql="insert into booking_details
					(
					User_ID,
					People,
					Date_Of_Booking,
					Package_Name,
					Total_Price)
					values('$uid','$people','$dateofbooking','$packagename','$totalprice')";
					$result=mysql_query($sql);
					if($result)
					{
						//echo "Data inserted";
						header('Location:BookingDetails.php');
					}
					else
					{
						echo die(mysql_error());
					}
					
				}
				else{
					
					//echo 'Please Log In first <a href="../Login.php">Log In</a>'; 
					header('Location:../Login.php');
					
				}
		
		//echo $people." ".$dateofbooking." ".$packagename." ".$totalprice." ".$uid;
		
		?>
		</body>
		</html>