<html>
	<head>
		<title>Forget password</title>
		<link href="css/style.css" type="text/css" rel="stylesheet">	
		<link href="css/menu.css" type="text/css" rel="stylesheet">
		<style type="text/css">
			td.margin{
				margin-right:100px;
			}
		</style>
		<Script type="text/Javascript">
				function validation()
				{
					
					var p1=document.getElementById("pd").value;
					if( p1=="" )
					{
						alert(" Password can not be Blank");
						return false;
					}
					var p2=document.getElementById("cpd").value;
					if( p2=="")
					{
						alert(" Confirm Password can not be Blank");
						return false;						
					}
					if(p1!=p2)
					{
						alert("Password and Confirm Password should match.");
						return false;
					}
				}
			</Script>
	</head>
	<body>
		<?php
		session_start();						
	?>
		<center>
				<div id="top-fixed">
					<div id="nav">
						<ul>
							<li><a href="PlanYourTrip/Hotel.php">PLAN YOUR TRIP</a></li>					
							<li class="dropdown">
								<a href="#" class="dropbtn">EXPLORE</a>						
								<div class="dropdown-content">		
									<a href="Home.php#c2">Virtual Argentina</a>
									<a href="Explore/Attractions.php">Attractions</a>
									<a href="Explore/Beaches.php">Beaches</a>
									<a href="Explore/Hills.php">Hills</a>
									<a href="Explore/shopping.php">Shopping</a>									
									<a href="Explore/Sports.php">Sports</a>
								</div>
							</li>					
							<li><a href="Events/January.php">EVENTS</a></li>
							<li><a href="Gallery.php">GALLERY</a></li>
							<li><a href="About.php">ABOUT</a></li>
							<li><a href="Contact.php">CONTACT</a></li>
						</ul>
					</div>
					<?php							
						if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
						{  								
							include("Connection.php");
							$uid=$_SESSION["uid"];
							$sql="select * from user_details where User_ID='$uid'";
							$result=mysql_query($sql);
							if($result == FALSE) { 
								die(mysql_error()); // TODO: better error handling
							}
							while($row=mysql_fetch_array($result))
							{ ?>
								<div id="user">								
								   <?php echo "Welcome, $row[First_Name] "." $row[Last_Name] <br>"; 
								   echo '<a href="Welcome.php">My Profile</a><a> | </a>
										<a href="Logout.php">Log out</a>'; ?>
								</div>
						<?php
							}
						}
						 else{
						?>
							 <div id="user">
								<a href="Login.php">LOGIN</a><a> | </a>
								<a href="SignUp.php">SIGN UP</a>					
							</div>	
					<?php
				          }					
					?>					
			</div>	
			<div id="wrapper">										
				<div id="header">
					<div id="header-logo"></div>					
					<div id="header-title" align="left">
						<a class="title" href="Home.php"><h1>LA&nbsp ARGENTINE&nbsp TURISMO</h1></a>	
					</div>														
				</div>
				<?php 
					if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
					{  								
						include("Connection.php");
						$uid=$_SESSION["uid"];
						$sql="select * from user_details where User_ID='$uid'";
						$result=mysql_query($sql);
						if($result == FALSE) { 
							die(mysql_error()); // TODO: better error handling
						}
					?>
						<div id="content-heading"><b><u>Change password</u></b></div>
						<div id="contents">
						<form  name="relogin" action ="OperateChangePassword.php" onSubmit="return validation()" method="post">					
						<table>
								<tr>									
									<td class="margin">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="pwd" id="pd" placeholder="New Password"></td>
								</tr>
								
								<tr>
									<td class="margin">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="cpwd" id="cpd" placeholder="Confirm Password"></td>
									
									
								</tr>
								<tr>
									<td><input class="btn" type="submit" value="Confirm"><input class="btn" type="reset" value="Cancel"></td>
								</tr>
								<tr>
									<td class="link" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="Home.php">Back to Home</a></td>
									
								</tr>
						</table>
						</form>
				</div>
				<?php 
					}
					else{?>										
						<div id="contents"><p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><b class="inner-heading">Please &nbsp<a href="Login.php"> Login </a> &nbspto continue</b></p></div>
					<?php }?>
				
				<div id="footer">
					<div id="footer1">
						<a href="Home.php">Home</a><a> | </a>
						<a href="PlanYourTrip/Hotel.php">Plan Your Trip</a><a> | </a>
						<a href="Explore/Attractions.php">Explore</a><a> | </a>
						<a href="Events/January.php">Events</a><a> | </a>
						<a href="Gallery.php">Gallery</a><a> | </a>
						<a href="About.php">About Us</a><a> | </a>
						<a href="Contact.php">Contact Us</a>
							
					</div>
					<div id="footer2">
						<a href="Others/TermsConditions.php">Terms & Conditions</a><a> | </a>						
						<a href="Others/Feedback.php">Feedback</a><a> | </a>
						<a href="Others/Faq.php">FAQ</a><a> | </a>					
						<a href="Others/Links.php">Useful Links</a><a> | </a>
						<a href="Others/Site.php">Site Map</a>
					</div>
					<p>© 2016 Argentina Tourism Board. All rights reserved. | Developed by Webtek Students.</p>				
				</div>				
			</div>
		</center>			
	</body>
</html>