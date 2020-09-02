<html>
	<head>
		<title>Argentina Tourism</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">
		<link href="../css/events.css" type="text/css" rel="stylesheet">
		<link href="../css/menu.css" type="text/css" rel="stylesheet">	
		<link href="../css/slider.css" type="text/css" rel="stylesheet">
		
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
							<li><a href="January.php"><c>EVENTS</c></a></li>
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
				<div id="content">
					<ule>
						<lie><a href="January.php">January</a></lie>
						<lie><a href="February.php">February</a></lie>
						<lie><a href="March.php">March</a></lie>
						<lie><a href="April.php">April</a></lie>
						<lie><a href="May.php">May</a></lie>
						<lie><a href="June.php">June</a></lie>
						<lie><a class="active" href="July.php">July</a></lie>
						<lie><a href="August.php">August</a></lie>
						<lie><a href="September.php">September</a></lie>
						<lie><a href="October.php">October</a></lie>
						<lie><a href="November.php">November</a></lie>
						<lie><a href="December.php">December</a></lie>
					</ul>
				</div>
				<div id="content-event">
					<div id="content-slider-event">
					  <img class="mySlides" src="../images/Events/july2i.jpg" style="width:95%">
					  <img class="mySlides" src="../images/Events/july1i.jpg" style="width:90%">
					  <img class="mySlides" src="../images/Events/july3a.jpg"style="width:85%">
					  <img class="mySlides" src="../images/Events/july4a.jpg">
					  <img class="mySlides" src="../images/Events/july5l.jpg" style="width:90%">
					  <img class="mySlides" src="../images/Events/july6l.jpg">
					  <div class="image-indicator">
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/july2i.jpg" style="width:100%" onclick="currentDiv(1)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/july1i.jpg" style="width:100%" onclick="currentDiv(2)">
						</div>						
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/july3a.jpg" style="width:100%" onclick="currentDiv(3)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/july4a.jpg" style="width:100%" onclick="currentDiv(4)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/july5l.jpg" style="width:100%" onclick="currentDiv(5)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/july6l.jpg" style="width:100%" onclick="currentDiv(6)">
						</div>
					 </div>
					</div>
					<p class="w1" align="left"><b>Dia de la Independencia </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i>  9 July<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Across Argentina<br>
					</p>
					<p class="w2">This celebration takes place all over Argentina and celebrates; you guessed it, when Argentina was granted independence in 1861 – to the day. Dressed in traditional clothing, this is less fireworks and more political but it still is an experience; with the Argentinean flag everywhere you look and performances at the Colon Theatre.</p>
					<p class="w2">Although the main events are held in freedom's birthplace in the north-western city of Tucumán, cafés along Avenida de Mayo serve up traditional hot chocolate with churros (doughnuts) and a solemn mass at the cathedral is attended by the president, who is forced to sit through a tongue-lashing homily delivered by the city's archbishop.</p>
					<p class="w2">Celebrations and festivities take place across the country to mark emancipation from Spain. Cafés serve traditional sweets like churros with chocolate filling. Live music fills the streets, as patriotic Argentineans party.</p>					
					
					
					<p class="w1" align="left"><b>The Alpine Chocolate Festival</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> 8th July<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Villa General Belgrano, Parque Cervecero, Corrientes y río El Sauce <br>
					</p>
					<p class="w2">During the month of July, the village offers the sweet possibility of letting oneself be tempted by hand-crafted chocolate in all its forms and presentations. Experience, feel and taste the Alpine Chocolate Festival.During the winter holidays, the traditional Alpine Chocolate Festival is celebrated in the district of Villa General Belgrano in Córdoba. A tempting proposal to enjoy with the entire family.</p>
					<p class="w2">Celebrations take place in the town hall, also known as the Alpine Hall. There, the chocolate masters display various stands with pastries, candies and chocolates, and invite visitors to taste the irresistible flavors of their handmade products.One of the main attractions is watching confectioners as they make chocolate. At this party for taste, attendants may experience everything from the traditional black or white, sweet or bitter, chocolate bars with nuts, almonds, raisins, peanut brittle and fruit to the traditional cup of hot chocolate, ideal to recover one's energies with the low winter temperatures.</p>
					<p class="w2">As the delicacies of typical pastry-making are tasted, the various music and Central-European dances shows performed by the communites that have settled down in the mountain range district several years ago may be enjoyed. The celebrations finish when the Queen of Chocolate is elected. Thus, Villa General Belgrano offers visitors the possibility of sharing, enjoying, laughing and resting within a beautiful mountain scenery.</p>

					<p class="w1" align="left"><b>La Rural</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> End July-Aug<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i>  Predio La Rural, Avenida Santa Fe 4201, y Sarmiento, Palermo<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://www.larural.com.ar/>http://www.larural.com.ar/ </a>
					</p>
					<p class="w2">The Exposicion de Ganaderia, Agricultura e Industria Internacional – known as La Rural – is the nation's supremely important two-week farm fair. Lambs, rams. pigs and other farm animals get a look-in, but it's the bulls who enjoy the most respect. The best events are the madly macho gaucho stunts. This is also the time of year when BA's penas (folklore nights) fill with genuine foot-stamping cowboys.</p>
					<p class="w2">Exhibition of Livestock, Agriculture and International Industry year consolidates after year as the most representative and traditional of our country event, making it a must visit for producers, tourists and general public. Representatives from different provinces meet in the City of Buenos Aires, scene of the party field, where the latest developments in the sector are presented. During onde days, more than 120,000 m2 are destined for the Rural Exhibition is developed in all its fullness. The Rural Expo is designed for the whole family and in addition to the best exponents of the various breeds of animals in our country and latest trends in agriculture, genetics, machinery and technological development in culture has varied entertainment proposals.</p>
				</div>
				<div id="footer">
					<div id="footer1">
						<a href="../Home.php">Home</a><a> | </a>
						<a href="../PlanYourTrip/Hotel.php">Plan Your Trip</a><a> | </a>
						<a href="../Explore/Attractions.php">Explore</a><a> | </a>
						<a href="January.php">Events</a><a> | </a>
						<a href="../Gallery.php">Gallery</a><a> | </a>
						<a href="../About.php">About Us</a><a> | </a>
						<a href="../Contact.php">Contact Us</a>
								
					</div>
					<div id="footer2">
						<a href="../Others/TermsConditions.php">Terms & Conditions</a><a> | </a>						
						<a href="../Others/Feedback.php">Feedback</a><a> | </a>
						<a href="../Others/Faq.php">FAQ</a><a> | </a>					
						<a href="../Others/Links.php">Useful Links</a><a> | </a>
						<a href="../Others/Site.php">Site Map</a>
					</div>
					<p>© 2016 Argentina Tourism Board. All rights reserved. | Developed by Webtek Students.</p>				
				</div>
			</div>
		</center>
		<script>
			var myIndex = 0;
			carousel();
			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("demo");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				myIndex++;
				if (myIndex > x.length) {myIndex = 1}					 
				for (i = 0; i < dots.length; i++){
					dots[i].className = dots[i].className.replace(" border-red", "");
				}
				x[myIndex-1].style.display = "block";
				setTimeout(carousel, 10000);// Change image every 15 seconds
				dots[myIndex-1].className += " border-red";

			}
			
			var slideIndex = 1;
			showDivs(slideIndex);

			function plusDivs(n) {
			  showDivs(slideIndex += n);
			}

			function currentDiv(n) {
			  showDivs(slideIndex = n);
			}

			function showDivs(n) {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("demo");
			  if (n > x.length) {slideIndex = 1}
			  if (n < 1) {slideIndex = x.length}
			  for (i = 0; i < x.length; i++) {
				 x[i].style.display = "none";
			  }
			  for (i = 0; i < dots.length; i++) {
				 dots[i].className = dots[i].className.replace(" border-red", "");
			  }
			  x[slideIndex-1].style.display = "block";
			  dots[slideIndex-1].className += " border-red";
			}
		</script>
	</body>
</html>