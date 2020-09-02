<html>
	<head>
		<title>Gallery</title>
		<link href="css/style.css" type="text/css" rel="stylesheet">	
		<link href="css/menu.css" type="text/css" rel="stylesheet">		
		<style type="text/css">
		#contents-Gallery
{
	height:  2150px;
	width:   1200px;
	display: block;
	//margin-top:0px;
	margin-bottom:30px;
	background-color: #c0c0c0 ;	
}
			div.img
			{
				margin-top:20px;
				border: 1px solid #737373;
				float:left;
				width:300px;
				//height:200px;
				margin-left:70px;
			}
			div.img:hover
			{
				border: 1px solid #FF735E;
			}
			div.img img
			{
				width:100%;
				height:250px;
			}
			div.desc{
				padding:10px;
				text-align:center;
			}
			w{
				font-family: myFirstFont;
				font-size:28px;
				color:#FF735E
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
							<li><a href="Gallery.php"><c>GALLERY</c></a></li>
							<li><a href="About.php">ABOUT</a></li>
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
				<div id="contents-Gallery">
				<div id="content-heading"><b><u>Gallery</u></b></div>
				
				<div class="img">
						<a  target="_blank" href="images/Gallery/buenos-aires-traffic-city-night-argentina.jpg">
							<img src="images/Gallery/buenos-aires-traffic-city-night-argentina.jpg" alt="Buenos Aires">
						</a>
						<div class="desc"><b><w>Buenos Aires</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/city-sunny-people-streetArgentina.jpg">
							<img src="images/Gallery/city-sunny-people-streetArgentina.jpg" alt="City People of Argentina">
						</a>
						<div class="desc"><b><w>City People of Argentina</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/argentina_buenos_aires_people_home_center.jpg">
							<img src="images/Gallery/argentina_buenos_aires_people_home_center.jpg" alt="The Center of Buenos Aires">
						</a>
						<div class="desc"><b><w>The Center of Buenos Aires</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/Argentina-flag_INDEPENDENCE_EVENTS.jpg">
							<img src="images/Gallery/Argentina-flag_INDEPENDENCE_EVENTS.jpg" alt="Argentina Flag">
						</a>
						<div class="desc"><b><w>Argentina Flag</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/brasilia_bueno aires.jpg">
							<img src="images/Gallery/brasilia_bueno aires.jpg" alt="Brasilia">
						</a>
						<div class="desc"><b><w>Brasilia</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/cordoba_argentina.jpg">
							<img src="images/Gallery/cordoba_argentina.jpg" alt="Cordoba">
						</a>
						<div class="desc"><b><w>Cordoba</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/MT FITZI PATAGONIA.jpg">
							<img src="images/Gallery/MT FITZI PATAGONIA.jpg" alt="MT FITZI, PATAGONIA">
						</a>
						<div class="desc"><b><w>MT FITZI, PATAGONIA</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/467001.jpg">
							<img src="images/Gallery/467001.jpg" alt="Building">
						</a>
						<div class="desc"><b><w>Building Argentina</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/traditionalclothing.jpg">
							<img src="images/Gallery/traditionalclothing.jpg" alt="traditional clothing">
						</a>
						<div class="desc"><b><w>Traditional Clothing</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/traditionalclothing1.jpg">
							<img src="images/Gallery/traditionalclothing1.jpg" alt="traditional clothing">
						</a>
						<div class="desc"><b><w>Clothing</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/nationalfood.jpg">
							<img src="images/Gallery/nationalfood.jpg" alt="national food">
						</a>
						<div class="desc"><b><w>National Food</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/Rufous-Hornero_Argentine_Kay-Mino.jpg">
							<img src="images/Gallery/Rufous-Hornero_Argentine_Kay-Mino.jpg" alt="Rufous-Hornero_Argentine_National Bird">
						</a>
						<div class="desc"><b><w>Rufous Hornero,National Bird</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/itinerary_lg_Expedition_Ship1N9A1835_Lg_RGB.jpg">
							<img src="images/Gallery/itinerary_lg_Expedition_Ship1N9A1835_Lg_RGB.jpg" alt="Expedition_Ship">
						</a>
						<div class="desc"><b><w>Expedition_Ship</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/la_boca.jpg">
							<img src="images/Gallery/la_boca.jpg" alt="la_boca">
						</a>
						<div class="desc"><b><w>La Boca</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/ship.jpg">
							<img src="images/Gallery/ship.jpg" alt="ship">
						</a>
						<div class="desc"><b><w>Ship</w></b></div>
					</div>
					
					<div class="img">
						<a  target="_blank" href="images/Gallery/PUCARA.jpg">
							<img src="images/Gallery/PUCARA.jpg" alt="PUCARA">
						</a>
						<div class="desc"><b><w>PUCARA</w></b></div>
					</div>
										
					<div class="img">
						<a  target="_blank" href="images/Gallery/street_tango.jpg">
							<img src="images/Gallery/street_tango.jpg" alt="street_tango">
						</a>
						<div class="desc"><b><w>Street Tango</w></b></div>
					</div>
										
					<div class="img">
						<a  target="_blank" href="images/Gallery/valdes_peninsula.jpg">
							<img src="images/Gallery/valdes_peninsula.jpg" alt="Valdes Peninsula">
						</a>
						<div class="desc"><b><w>Valdes Peninsula</w></b></div>
					</div>
					
								
							
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