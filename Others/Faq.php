<html>
	<head>
		<title>Faq</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">
		<link href="../css/menu.css" type="text/css" rel="stylesheet">	
		<style>
		#contents{
			height:1000px;
			//margin:10px;
		}
		w{
			font-weight:bold;
			font-size:30px;
			
		}
		p{
			margin:30px;
			
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
					<div id="content-heading"><b><u>F.A.Q.</u></b></div>
					<p align="left"><w>1. When is the best time to travel to Argentina?</w><br>
					Travelers should be prepared for unpredictable weather at any time of year. Most travelers consider the warmer months of November to March (seasons are reversed south of the Equator), to be the best time to visit southern Argentina. However, the hottest summer months, (December - February) can be unpleasantly humid in Buenos Aires so travelers that plan on extending their stay in the capital may opt for the shoulder seasons (October - November or April -May) instead. Holiday weeks (Easter and Christmas) tend to be the busiest times so avoid these times if you want to avoid the crowds. Travelers can visit Iguazu Falls year round, though again the summer months can be incredibly hot. Visitors to Northwest Argentina will also want to avoid these hot summer months. In fact, the best time to visit this area is during the coolest months of May to September. Recommendations for the best time to do each tour are listed on the Argentina Tours page.<br><br>
			        <w> 2. What are the accommodations like?</w><br>
					In Argentina, we have selected a variety of charming accommodations ranging from cozy mountain lodges to comfortable city hotels with all of the modern conveniences. In general, we use small, family-run accommodations that are locally owned and characteristic of each area instead of luxury chain resorts. For more information, check out our Argentina lodging page to view pictures of our standard hotels/ lodges.<br><br>
					<w>	3. Are meals included?</w><br>
					Meals are included on most of our Argentina excursions. We have tried to balance flexibility and convenience regarding meal options. For this reason, we include meals on all of our tour days when you are traveling off the beaten path where restaurant choices are limited. In the major cities, where there are a wide variety of restaurants, we generally do not include meals, to allow our travelers the flexibility of choosing their own food preferences. Your tour leader will always recommend some great restaurant options and will usually offer to join any group members who would like to go out to eat together. Your hotel will also provide a light continental breakfast on these days. Included meals are listed in parenthesis next to the tour itinerary on each tour page. An estimated meal budget can also be found under Recommended Budgeting near the bottom of the itinerary page.<br><br>
					<w> 4.What type of transportation is used?</w><br>
					Our Argentina tours utilize a variety of transportation including private vans, comfortable tourist buses, ferries, flights, etc. We use a mix of private/ public transportation to provide travelers with the safest and most efficient transportation in each area. Each tour itinerary page has a description of the transportation included on that tour.<br><br>
					<w> 5.What type of food is typical of Argentina?</w><br>
					Beef is central to the Argentinean diet. Barbecue grills and steak houses are common, often with 10-15 different choices of beef cuts. For vegetarians, pasta dishes and pizza are also fairly ubiquitous. In the Lake District, game dishes such as trout and venison are regional specialties and the Northwest is particularly well known for spicy dishes.<br><br>
					<w> 6. What is the climate like?</w><br>
					Argentina's climate is as varied as its terrain, ranging from subtropical in the north to humid and steamy in the central region, and cold in the temperate south. The Andes region has erratic rainfall, flash floods in summer, searing heat, snow at higher elevations, and the Zonda - a hot, dry wind. The lowlands receive sufficient rainfall to support swampy forests and upland savanna, but rainfall decreases from east to west; shallow summer flooding is common in the east. The winter dry season is pronounced, and the summer heat can be brutal. Patagonia is mild year-round in the east and glacial in the south. Weather in Patagonia can be very unpredictable, and can change drastically and unexpectedly. Argentine Patagonia and Tierra del Fuego have summer averages of just 11°C (52°F); nighttime temperatures will most likely be in the 1°C-5°C. For more weather information in other regions, check out Weather in South & Central America.<br><br>
					</p>
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