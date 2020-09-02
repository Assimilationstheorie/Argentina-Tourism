<html>
	<head>
		<title>About Us</title>
		<link href="css/style.css" type="text/css" rel="stylesheet">	
		<link href="css/menu.css" type="text/css" rel="stylesheet">
		
		<style type="text/css">
			p{
			margin:20px;
			
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
							<li><a href="About.php"><c>ABOUT</c></a></li>
							<li><a href="Contact.php">CONTACT</a></li>
						</ul>
					</div>
					<div id="user">
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
								{ 	
									echo "Welcome, $row[First_Name] "." $row[Last_Name] <br>"; 
									  echo '<a href="Welcome.php">My Profile</a><a> | </a>
											<a href="Logout.php">Log out</a>';
								}
							} 						
							else{
								
						
						?>
								<a href="Login.php">LOGIN</a><a> | </a>
								<a href="SignUp.php">SIGN UP</a>	
						<?php
					
							}
						?>					
					</div>				
			</div>	
			<div id="wrapper">										
				<div id="header">
					<div id="header-logo"></div>					
					<div id="header-title" align="left">
						<a class="title" href="Home.php"><h1>LA&nbsp ARGENTINE&nbsp TURISMO</h1></a>	
					</div>														
				</div>
				
				<div id="contents">
				<div id="content-heading"><b><u>About Us</u></b></div>
					<p class="abc" align="left" >1.&nbsp In 2005, the State of Argentina approved the National Tourism Act # 25,997, which contemplates the creation of the National Institute of Tourism.&nbsp Promotion, with the purpose of having an institution responsible for the international promotion of Argentina’s tourist attractions.<br>
				        2.&nbsp  Our website links the public and private sectors as regards international tourism promotion.<br>
					  3. &nbsp  The plan of this website aims to turn Argentina into a leading country in Latin America in terms of the quality and diversity of tourist attractions, based on a balanced territorial development, respecting the environment and the identity of its people. <br></p>
					<p class="abc" align="left"><b class="inner-heading">OUR MISSION</b><br>
					1.   Designing and implementing plans, programs and actions for international tourism promotion.<br>
					2.   Managing the promotion funds.<br>
					3. Researching the international markets of origin and their trends.<br></p>
					<p class="abc" align="left"><b class="inner-heading">OUR VISSION</b><br>

					In its drive to further raise visitor numbers, the Argentina Tourism Board shall continue to develop and maintain an authentic, dynamic and sustainable tourism product at home reflective of the importance of Argentina tourism industry to its economy and to the standard of living of its population. The Argentina tourism product shall be constructed upon a base of professionalism and value for money, offering visitors a unique experience, as the foundation for parallel, innovative and cost-effective marketing campaigns throughout core and emerging markets.

					At, the same time the Argentina Tourism Board shall promote the gradual expansion and enhancement of existing tourism facilities, services and infrastructure to provide additional activities for visitors with increased revenue potential and appeal across a broader spectrum of markets.

						The ATB has offices in the France, United Kingdom, Germany, Italy, South Africa, Abu Dhabi, China-Beijing & Shanghai, Hong Kong and Spain as well as representations in the Middle East, India, Brazil, South Korea and Russia.
				</p>
				</div>
				<div id="footer">
					<div id="footer1">
						<a href="Home.php">Home</a><a> | </a>
						<a href="PlanYourTrip/Hotel.php">Plan Your Trip</a><a> | </a>
						<a href="Explore/Attractions.php">Explore</a><a> | </a>
						<a href="Events/January.php">Events</a><a> | </a>
						<a href="Gallery.php">Gallery</a><a> | </a>
						<a href="About.php">About Us</a><a> | </a>
						<a href="Contact.php">Contact Us</a><a> | </a>
						<a href="SignUp.php">SignUp</a>		
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