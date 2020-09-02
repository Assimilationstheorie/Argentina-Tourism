<html>
	<head>
		<title>SiteMap</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">
		<link href="../css/menu.css" type="text/css" rel="stylesheet">
		<style>
			c{
				padding-left:70px;
				border:none;
				
			}
			c a{
				text-decoration:none;
				border:none;
				font-size:25px;
				color:black;
			}
			h{
				padding-left:30px;
			}
			h a{
				text-decoration:none;
				font-size:45px;
				color:black;
			}
			#site1{
				width:400px;
				//height:720px;
				float:left;
			}
			#site2{
				width:400px;
				//height:720px;
				float:left;
			}
			#site3{
				width:400px;
				//height:720px;
				float:left;
			}
		</style>
	</head>
	<body>
	<?php
		session_start();						
	?>
		<center>
			<div id="top-fixed">
				<div id="nav">
					<ul>
						<li><a href="../PlanYourTrip/Hotel.php">PLAN YOUR TRIP</a></li>					
						<li class="dropdown">
							<a href="#" class="dropbtn">EXPLORE</a>						
							<div class="dropdown-content">
									<a href="../Home.php#c2">Virtual Argentina</a>
									<a href="#openModalRest">Restaurants</a>
									<div id="openModalRest" class="modalDialog">
										<div><a href="#close" title="Close" class="close">X</a>
											 <b class="inner-heading">Restaurants in Argentina</b>
											<form  name="rest" action ="../Main.php" onSubmit="return validation()" method="post">
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
									<a href="../Explore/Attractions.php">Attractions</a>
									<a href="../Explore/Beaches.php">Beaches</a>
									<a href="../Explore/Hills.php">Hills</a>
									<a href="../Explore/shopping.php">Shopping</a>
									<a href="#openModalSpa">Spa & Salons</a>
									<div id="openModalSpa" class="modalDialog">
										<div><a href="#close" title="Close" class="close">X</a>
											 <b class="inner-heading">Spa & Salons in Argentina</b>
											<form  name="spa" action ="../Main.php" onSubmit="return validation()" method="post">
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
									<a href="../Explore/Sports.php">Sports</a>
							</div>
						</li>					
						<li><a href="../Events/January.php">EVENTS</a></li>
						<li><a href="../Gallery.php">GALLERY</a></li>
						<li><a href="../About.php">ABOUT</a></li>
						<li><a href="../Contact.php">CONTACT</a></li>
					</ul>
				</div>
				<div id="user">
					<?php							
							if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
							{  								
								include("../Connection.php");
								$uid=$_SESSION["uid"];
								$sql="select * from user_details where User_ID='$uid'";
								$result=mysql_query($sql);
								if($result == FALSE) { 
									die(mysql_error()); // TODO: better error handling
								}
								while($row=mysql_fetch_array($result))
								{ 	
									echo "Welcome, $row[First_Name] "." $row[Last_Name] <br>"; 
									  echo '<a href="../Welcome.php">My Profile</a><a> | </a>
											<a href="../Logout.php">Log out</a>';
								}
							} 						
							else{
								
						
						?>
								<a href="../Login.php">LOGIN</a><a> | </a>
								<a href="../SignUp.php">SIGN UP</a>	
						<?php
					
							}
						?>						
				</div>				
			</div>	
			<div id="wrapper">										
				<div id="header">
					<div id="header-logo"></div>					
					<div id="header-title" align="left">
						<a class="title" href="../Home.php"><h1>LA&nbsp ARGENTINE&nbsp TURISMO</h1></a>	
					</div>														
				</div>				
				<div id="contents">
					<div id="content-heading"><b><u>Site Map</u></b></div>
					<div id="site1">
						<p align="left"><b  class="inner-heading"><h><a href="../PlanYourTrip/Hotel.php">Plan Your Trip</a></h></b><br>
							<c><a href="../PlanYourTrip/Hotel.php">>Hotel</a></c><br>
							<c><a href="../PlanYourTrip/Car.php">>Rental Cars</a></c><br>
							<c><a href="../PlanYourTrip/Bus.php">>Buses</a></c><br>
							<c><a href="../PlanYourTrip/Flight.php">>Flights</a></c><br>
							<c><a href="../PlanYourTrip/Pack_Disc.php">>Packages & Discounts</a></c><br><br></p>
						<p align="left"><b  class="inner-heading"><h><a>Explore</a></h></b><br>
							<c><a href="../Explore/Attractions.php">>Attractions</a></c><br>	
							<c><a href="../Explore/Beaches.php">>Beaches</a></c><br>	
							<c><a href="../Explore/Hills.php">>Hills</a></c><br>	
							<c><a href="../Explore/shopping.php">>Shopping</a></c><br>									
							<c><a href="../Explore/Sports.php">>Sports</a></c><br><br></p>
					</div>
					<div id="site2">
						<p align="left"><b  class="inner-heading"><h><a href="../Events/January.php">Events</a></h></b><br>
							<c><a href="../Events/January.php">>January</a></c><br>
							<c><a href="../Events/February.php">>February</a></c><br>
							<c><a href="../Events/March.php">>March</a></c><br>
							<c><a href="../Events/April.php">>April</a></c><br>
							<c><a href="../Events/May.php">>May</a></c><br>
							<c><a href="../Events/June.php">>June</a></c><br>
							<c><a href="../Events/July.php">>July</a></c><br>
							<c><a href="../Events/August.php">>August<br>
							<c><a href="../Events/September.php">>September</a></c><br>
							<c><a href="../Events/October.php">>October</a></c><br>
							<c><a href="../Events/November.php">>November</a></c><br>
							<c><a href="../Events/December.php">>December</a></c><br><br>
						</p>
					</div>
					<div id="site3">
						<p align="left"><b  class="inner-heading"><h><a href="../Gallery.php">Gallery</a></h></b><br>	
							<b  class="inner-heading"><h><a href="../About.php">AboutUs</a></h></b><br>	
							<b  class="inner-heading"><h><a href="../Contact.php">ContactUs</a></h></b><br>	
							<b  class="inner-heading"><h><a href="../Login.php">Login</a></h></b><br>	
							<b  class="inner-heading"><h><a href="../SignUp.php">SignUp</a></h></b><br>	
							<b  class="inner-heading"><h><a href="TermsConditions.php">Terms & Conditions</a></h></b><br>							
							<b  class="inner-heading"><h><a href="Feedback.php">Feedback</a></h></b><br>	
							<b  class="inner-heading"><h><a href="Faq.php">FAQ</a></h></b><br>				
							<b  class="inner-heading"><h><a href="Links.php">Useful Links</a></h></b><br>	
							<b  class="inner-heading"><h><a href="Site.php">Site Map</a></h></b><br>
						</p>						
					</div>
				</div>
				
				<div id="footer">
					<div id="footer1">
						<a href="../Home.php">Home</a><a> | </a>
						<a href="../PlanYourTrip/Hotel.php">Plan Your Trip</a><a> | </a>
						<a href="../Explore/Attractions.php">Explore</a><a> | </a>
						<a href="../Events/January.php">Events</a><a> | </a>
						<a href="../Gallery.php">Gallery</a><a> | </a>
						<a href="../About.php">About Us</a><a> | </a>
						<a href="../Contact.php">Contact Us</a>
							
					</div>
					<div id="footer2">
						<a href="TermsConditions.php">Terms & Conditions</a><a> | </a>						
						<a href="Feedback.php">Feedback</a><a> | </a>
						<a href="Faq.php">FAQ</a><a> | </a>					
						<a href="Links.php">Useful Links</a><a> | </a>
						<a href="Site.php">Site Map</a>
					</div>
					<p>© 2016 Argentina Tourism Board. All rights reserved. | Developed by Webtek Students.</p>				
				</div>
			</div>
		</center>			
	</body>
</html>