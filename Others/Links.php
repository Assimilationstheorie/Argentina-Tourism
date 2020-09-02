<html>
	<head>
		<title>Useful Links</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">
		<link href="../css/menu.css" type="text/css" rel="stylesheet">
			<style>
			m{
				
				border:none;
				padding-left:60px;
			}
			m a{
				text-decoration:none;
				border:none;
				font-size:25px;
				color:black;
				
			}
			n{
				padding-left:30px;
			}
			n a{
				text-decoration:none;
				font-size:45px;
				color:black;
			}
						
			
			#links1{
				width:600px;
				//height:720px;
				float:left;
			}
			#links2{
				width:400px;
				//height:720px;
				float:left;
			}
			//#links3{
				//width:400px;
				//height:720px;
				//float:left;
			//}
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
				<div id="content-heading"><b><u>Useful Links</u></b></div>
				<div id="links1">
				<p align="left"><b  class="inner-heading"><n>TRAVEL WEBSITES</n></b><br>
					<m><a href="http://www.argentina.travel/en">>TRAVEL AND KNOW MORE</a></m><br>
					<m><a href="http://www.roughguides.com/destinations/south-america/argentina/">>ROUGH GUIDE</a></m><br>
					<m><a href="http://goargentina.about.com/od/Planning_Your_Trip/a/Buenos-Aires-Tourism-Official-Website.htm">>KNOW BUENOS AIRES</a></m><br>
				<p align="left"><b  class="inner-heading"><n>RESTAURANTS</n></b><br>
										<m><a href="http://gauchos.com.au/">>GAUCHOS RESTAURANT </a></m><br>
										<m><a href="http://www.carlitosgardel.com/">>CARLITOSGARDEL RESTAURANT </a></m><br>
										<m><a href="http://www.lacasaargentina.cz/">>LACASAARGENTINA RESTAURANT </a></m><br>
				<p align="left"><b  class="inner-heading"><n>HEALTHCARE</n></b><br>
										<m><a href="http://wanderingtrader.com/argentina/top-5-argentina-tourist-attractions/">>WANDERING TRADER</a></m><br>
										<m><a href="http://www.expatarrivals.com/argentina/healthcare-in-argentina">>EXPECT ARRIVALS</a></m><br>
										
					</p>	
					</div>
				<div id="links2">
					<p align="left"><b  class="inner-heading"><n>HOTELS</a></n></b><br>
							<m><a href="http://www.boutiquehotelsguides.com/?cc1=AR&gclid=CMalhtL2lc4CFRahaAodYlQNEw">>ARGENTINA HOTELS</a></m><br><m><a href="https://www.tripadvisor.in/TravelersChoice-Hotels-cTop-g294266">>TRAVELERS CHOICE</a></m><br>
							<m><a href="http://www.lonelyplanet.com/argentina/hotels">>LONELY PLANET</a></m><br>
							<m><a href="https://www.tripadvisor.in/Hotels-g312822-Salta_Province_of_Salta_Northern_Argentina-Hotels.html">>SALTA HOTELS</a></m><br>
							<m><a href="https://www.tripadvisor.in/Hotels-g312747-La_Plata_Province_of_Buenos_Aires_Central_Argentina-Hotels.html">>BUENOS AIRES HOTELS</a></m><br>
					<p align="left"><b  class="inner-heading"><n>TOURIST SPOTS</n></b><br>
								<m><a href="http://www.touropia.com/tourist-attractions-in-argentina/">&nbsp&nbsp>TOURIST PLACES </a></m><br>
								<m><a href="http://www.touropia.com/best-places-to-visit-in-argentina/">&nbsp&nbsp>BEST PLACES</a></m><br>
								<m><a href="https://www.gringoinbuenosaires.com/places-visit-argentina/">&nbsp&nbsp>VISIT ARGENTINA</a></m><br>
								<m><a href="http://wanderingtrader.com/argentina/top-5-argentina-tourist-attractions/">&nbsp&nbsp>TOP 5 PLACES </a></m><br>
							
							
								
								
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