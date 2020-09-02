<html>
	<head>
		<title>Welcome</title>
		<link href="css/style.css" type="text/css" rel="stylesheet">	
		<link href="css/menu.css" type="text/css" rel="stylesheet">

		<style type="text/css">
			td.margin{
				margin-right:100px;
			}
			i.wel{
				
				font-weight:bold;
			}
			p.welcome{
			font-size:25px;
			margin:15px;
			text-align:center;
		}
		</style>
		
	</head>
	<body>
		<?php
			session_start();
			
			
				//$_SESSION['loggedin'] = true;
				//$_SESSION['uid'] = $uid; // $username coming from the form, such as $_POST['username']
				//$_SESSION['fnme'] = $fnm;
				//$_SESSION['lnme'] = $lnm;
			
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
									<a href="#openModalRest">Restaurants</a>
									<div id="openModalRest" class="modalDialog">
										<div><a href="#close" title="Close" class="close">X</a>
											 <b class="inner-heading">Restaurants in Argentina</b>
											<form  name="rest" action ="Main.php" onSubmit="return validation()" method="post">
												<table>											
													<tr>
														<td class="modalselect">
															<Select name="location" class="select">
																<Option value="0">----Choose a Location----</Option>
																<Option value="Restaurants in Buenos Aires">BUENOS AIRES</Option>
																<Option value="Restaurants in Bariloche">BARILOCHE</Option>
																<Option value="Restaurants in Mendoza">MENDOZA</Option>
																<Option value="Restaurants in Mar Del Plata">Mar Del Plata</Option>
																<Option value="Restaurants in Ushuaia">Ushuaia</Option>
																<Option value="Restaurants in Puerto Iguazu">Puerto Iguazu</Option>
																<Option value="Restaurants in Cordoba">Cordoba</Option>
																<Option value="Restaurants in El Chalten">El Chalten</Option>
														</td>
													</tr>
													<tr>
														<td class="modalbutton"><input type="Submit" value="Search" class="button">		 
													</tr>
												</table>
											</form>
										</div>
									</div>
									<a href="Explore/Attractions.php">Attractions</a>
									<a href="Explore/Beaches.php">Beaches</a>
									<a href="Explore/Hills.php">Hills</a>
									<a href="Explore/shopping.php">Shopping</a>
									<a href="#openModalSpa">Spa & Salons</a>
									<div id="openModalSpa" class="modalDialog">
										<div><a href="#close" title="Close" class="close">X</a>
											 <b class="inner-heading">Spa & Salons in Argentina</b>
											<form  name="spa" action ="Main.php" onSubmit="return validation()" method="post">
												<table>											
													<tr>
														<td class="modalselect">
															<Select name="location" class="select">
																<Option value="0">----Choose a Location----</Option>
																<Option value="Spa & Salons in Buenos Aires">BUENOS AIRES</Option>
																<Option value="Spa & Salons in Bariloche">BARILOCHE</Option>
																<Option value="Spa & Salons in Mendoza">MENDOZA</Option>
																<Option value="Spa & Salons in Mar Del Plata">Mar Del Plata</Option>
																<Option value="Spa & Salons in Ushuaia">Ushuaia</Option>
																<Option value="Spa & Salons in Puerto Iguazu">Puerto Iguazu</Option>
																<Option value="Spa & Salons in Cordoba">Cordoba</Option>
																<Option value="Spa & Salons in El Chalten">El Chalten</Option>
														</td>
													</tr>
													<tr>
														<td class="modalbutton"><input type="Submit" value="Search" class="button">		 
													</tr>
												</table>
											</form>
										</div>
									</div>
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
					//$fnm=$_SESSION["fnme"];
					//$lnm=$_SESSION["lnme"];					
					$sql="select * from user_details where User_ID='$uid'";
					$result=mysql_query($sql);
					if($result == FALSE) { 
						die(mysql_error()); // TODO: better error handling
					}
					while($row=mysql_fetch_array($result))
					{ 
				?>
						<div id="user">
							Welcome,<?php echo "$row[First_Name] "." $row[Last_Name]"; ?> <br>
							<a href="Change Password.php">Change Password</a><a> | </a>
							<a href="Logout.php">Log Out</a>					
						</div>	
						<?php			
					}
				}
				else{
					 ?> <div id="user">
							<a href="Login.php">LOGIN</a><a> | </a>
							<a href="SignUp.php">SIGN UP</a>					
						</div>
				<?php } ?>
				</div>	
				<div id="wrapper">										
					<div id="header">
						<div id="header-logo"></div>					
						<div id="header-title" align="left">
							<a class="title" href="Home.php"><h1>LA&nbsp ARGENTINE&nbsp TURISMO</h1></a>	
						</div>														
					</div>
		<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
				{
					include("Connection.php");
					$uid=$_SESSION["uid"];
					//$fnm=$_SESSION["fnme"];
					//$lnm=$_SESSION["lnme"];					
					$sql="select * from user_details where User_ID='$uid'";
					$result=mysql_query($sql);
					if($result == FALSE) { 
						die(mysql_error()); // TODO: better error handling
					}
				while($row=mysql_fetch_array($result))
				{ 
			?>
				<div id="contents">
					<div id="content-heading"><b><u>Hola,&nbsp&nbsp Bienvenido!</u></b></div>
					<table>
						<tr><td><p class="welcome" align="center"> <b class="inner-heading">Personal Information:</b><br>
							<i class="wel">Name:</i><?php echo " $row[First_Name] "." $row[Last_Name]"; ?><br>
							<i class="wel">Email ID:</i><?php echo " $row[Email_ID]"; ?><br><br><br><br><br><br></p></td>
							
							<td><p class="welcome" align="center"><b class="inner-heading">Address Information:</b><br>
							<i class="wel">Address: </i><?php echo "$row[Address] "; ?><br>
							<i class="wel">City: </i><?php echo "$row[City]"; ?><br>
							<i class="wel">Pin Code: </i><?php echo "$row[Pin_Code]"; ?><br>
							<i class="wel">District: </i><?php echo "$row[District]"; ?><br>
							<i class="wel">State: </i><?php echo "$row[State]"; ?><br>
							<i class="wel">Country: </i><?php echo "$row[Country]"; ?><br><br></p></td>
							
							<td><p class="welcome" align="center"><b class="inner-heading">Contact Information:</b><br>
							<i class="wel">Mobile No: </i><?php echo "$row[Mobile_No] "; ?><br>
							<i class="wel">Phone No: </i><?php echo "$row[Phone_No]"; ?><br><br><br><br><br><br></p></td>
						</tr>
					</table>
						<p class="welcome">No plans yet? No problem.<br>
								With all the trips we offer, we're sure you can find an excellent adventure.<br>
								Start the search for your next great adventure. <a href="PlanYourTrip/Pack_disc.php">Search Trips</a><br>
								Or, view your <a href="PlanYourTrip/BookingDetails.php">Booked Trip.</a> 
						</p>						
				</div>
			<?php			
				}
			}
				else{
			?>					
						<div id="contents"><p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><b class="inner-heading">Please &nbsp<a href="Login.php"> Login </a> &nbspto continue</b></p></div>
				<?php
				}
					
				?>
				<div id="footer">
					<div id="footer1">
						<a href="Home.php">Home</a><a> | </a>
						<a href="PlanYourTrip/Hotel.php">Plan Your Trip</a><a> | </a>
						<a href="Explore/Attractions.php">Explore</a><a> | </a>
						<a href="Events/January.php">Events</a><a> | </a>
						<a href="Gallery.php">Gallery</a><a> | </a>
						<a href="About.php">About Us</a><a> | </a>
						<a href="Contact.php">Contact Us</a><a> | </a>
						<a href="SignUp.php">SignUp</a><a> | </a>
						<a href="Home.php">Log Out</a>
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