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
						<lie><a class="active" href="May.php">May</a></lie>
						<lie><a href="June.php">June</a></lie>
						<lie><a href="July.php">July</a></lie>
						<lie><a href="August.php">August</a></lie>
						<lie><a href="September.php">September</a></lie>
						<lie><a href="October.php">October</a></lie>
						<lie><a href="November.php">November</a></lie>
						<lie><a href="December.php">December</a></lie>
					</ul>
				</div>
				<div id="content-event">
					<div id="content-slider-event">
					  <img class="mySlides" src="../images/Events/may1a.jpg" style="width:80%">
					  <img class="mySlides" src="../images/Events/may2a.jpg" style="width:75%">
					  <img class="mySlides" src="../images/Events/may3i.jpg">
					  <img class="mySlides" src="../images/Events/may4i.jpg" style="width:80%">
					  <img class="mySlides" src="../images/Events/may5a.jpg" style="width:90%">
					  <img class="mySlides" src="../images/Events/may6a.jpg" style="width:80%">
					  <div class="image-indicator">
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/may1a.jpg" style="width:100%" onclick="currentDiv(1)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/may2a.jpg" style="width:100%" onclick="currentDiv(2)">
						</div>						
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/may3i.jpg" style="width:100%" onclick="currentDiv(3)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/may4i.jpg" style="width:100%" onclick="currentDiv(4)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/may5a.jpg" style="width:100%" onclick="currentDiv(5)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/may6a.jpg" style="width:100%" onclick="currentDiv(6)">
						</div>
					 </div>
					</div>
					<p class="w1" align="left"><b>Arte Buenos Aires- Contemporary Art Fair </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> Late May<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Predio La Rural, Avenida Santa Fe 4201, y Avenida Sarmiento, Palermo<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://www.arteba.org/?lang=en> http://www.arteba.org/</a>
					</p>
					<p class="w2">Known as Arte Buenos Aires, this exhibition in late May highlights the extensive contemporary art scene in the capital of Argentina.The fair marks the beginning of the cultural season in the Argentine capital. Visitors will find an exhibition designed to bring high quality art to the public.</p>
					<p class="w2">National and international galleries, specialist publishers, artists and collectors (not to mention 110,000 paying punters) descend on this week-long art fair, which has evolved into one of the best- attended and most-hyped cultural events in Latin America, displaying the works of hundreds of artists from Argentina and overseas.</p>
					<p class="w2"></p>
					
					
					<p class="w1" align="left"><b>Iguazu En Concierto</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> End May<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Sheraton Iguazú, Parque Nacional Iguazú <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://www.iguazuenconcierto.com/> http://www.iguazuenconcierto.com/</a>
					</p>
					<p class="w2">Four emblematic points such as the Hotel Sheraton, the Conventions Center, the Aripuca and Ramón Ayala Amphitheater at Tres Fronteras are the hosts of this celebration of art, friendship and the encounter of culture.<br>n May, hundreds of youngsters gather during five days to take part in the event known as Iguazú in Concert, a festival for musicians and for those who wish to listen to them and watch them play. Puerto Iguazú is a city on the Argentinian area known as “the Littoral” that welcomes this young people into their lush rainforest.</p>
					<p class="w2">It is a surprising fact to learn that children and teenagers –whose ages range between 9 and 18 years old- are in charge of infecting the audience with their music and their affection for instruments. Some of them had their first performance within the past year and others have more experience and have played at large theaters in the world. They all succeed in the same purpose: to enjoy what they have learned, to increase their knowledge in master classes and to make new friends.</p>
					<p class="w2">The program is long and covers different kinds of classical music and the various traditional manifestations of the countries of origins of the participants. As soon as the music starts to play, religions and races become mingled in melodies emerging from violins, flutes, marimbas, trumpets or harps. Ready to offer their talent, they have all auditioned I advance and kept their position in Iguazú as a result of popular votes.<br>The Iguazú Waterfalls and the national park bearing the same name are the ideal hosts of this already consecrated festival. They provide both outdoor amphitheaters and indoor halls.</p>
					
					
					<p class="w1" align="left"><b>Aniversario de la Revolucion de Mayo </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> 25th May<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Plaza de Mayo<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=https://es.wikipedia.org/wiki/Revoluci%C3%B3n_de_Mayo> https://Revolucion_de_Mayo.org</a>
					</p>
					<p class="w2">The humble celebration of the 1810 revolution begins at midnight the day before, when people gather in front of the Cabildo for a lusty rendition of the (lengthy) national anthem. At 8pm on the 25th, the crowds mass again for another patriotic singalong.</p>
					<p class="w2">Every May 25 is remembered as a national holiday in Argentina, as an immovable national holiday. And, this day was taken by the establishment of the First Government, with the beginning of the process Rise of the Argentine Republic, without formal independence proclamation.Thus, the emerged  May Revolution , that is, the series of revolutionary events in May 1810 in the city of Buenos Aires, capital of the Viceroyalty of the Río de la Plata, under the King of Spain.</p>
					<p class="w2"> Revolutions produce changes, modifications and radical transformations occur where: in families, in institutions, in societies. Often, being immersed in them, we feel agitated, moved mobilized. These feelings and some social actors felt 1810. They started a revolution of ideas and led to very important political, economic and social changes. Today, in this act, we reflect on them. </p>					
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