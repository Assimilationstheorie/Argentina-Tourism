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
						<lie><a class="active" href="March.php">March</a></lie>
						<lie><a href="April.php">April</a></lie>
						<lie><a href="May.php">May</a></lie>
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
					  <img class="mySlides" src="../images/Events/march1t.jpg">
					  <img class="mySlides" src="../images/Events/march2t.jpg">
					  <img class="mySlides" src="../images/Events/march3v.jpg">
					  <img class="mySlides" src="../images/Events/march4v.jpg" style="width:95%">
					  <img class="mySlides" src="../images/Events/march5m.jpg" style="width:95%">
					  <img class="mySlides" src="../images/Events/march6m.jpg" style="width:95%">
					  <div class="image-indicator">
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/march1t.jpg" style="width:100%" onclick="currentDiv(1)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/march2t.jpg" style="width:100%" onclick="currentDiv(2)">
						</div>						
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/march3v.jpg" style="width:100%" onclick="currentDiv(3)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/march4v.jpg" style="width:100%" onclick="currentDiv(4)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/march5m.jpg" style="width:100%" onclick="currentDiv(5)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/march6m.jpg" style="width:100%" onclick="currentDiv(6)">
						</div>
					 </div>
					</div>
					<p class="w1" align="left"><b>Buenos Aires Tango Festival</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> First Week Of March<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where:</i> Various Theatres & Cultural Centres<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://festivales.buenosaires.gob.ar/en/tango>http://festivales.buenosaires.gob.ar/</a>
					</p>
					<p class="w2">This festival takes place in the capital in March and attracts people from all over Argentina who want to celebrate the tango. Special performances are held all over the city and classes and parties are widespread.These festivals are very similar but happen at two separate times of the year – well too much Tango all at once could cause an injury! During the Tango festival, which happens in the summer months of March, there are duos performing the traditional dance everywhere in the streets of Buenos Aires. There's also the opportunity to take some beginners lessons free of charge, so you don’t get left out of the two-step fun.</p>
					<p class="w2">The Tango festivals look like a warm up compared to this intensive fortnight. The first half of this summer festival begins with La Festival, a hub for Tango shows, recitals, classes, dances and even book signings and film screenings for the real enthusiasts. But the festival really comes to life when the main event kicks off. The Mundial de Tango is when the world championships begins, and seeing the professionals at work is a sight to see. </p>
					<p class="w2">This is the big one: it's the city's – and therefore the world's – most important tango festival, a nine-day extravaganza of concerts, shows, free classes, exhibitions, open-air milongas (Avenida Corrientes is closed for a massive dance off) and other tango-related festivities. If you're in town, don't miss it. If you're a tango fan, plan your trip around it.</p>
					
					
					<p class="w1" align="left"><b>FIESTA NACIONAL DE LA VENDIMIA's</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When:</i> 1st-11th March<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where:</i>  Mesura Te Cuida<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://vendimia2016.mendoza.gov.ar/>http://vendimia2016.mendoza.gov.ar/</a>
					</p>
					<p class="w2">Imagine fireworks, wine queens, dancing, and lots and lots of wine, set against the foothills of the Andes, and you've got the Argentinian Harvest Festival.And it´s always hard to explain, since it is one of those events you really get to understand when joining the locals there, and experiencing the attraction and the seduction of this enormous festival, that takes place in Mendoza during 10 hole days.</p>
					<p class="w2">Harvest is the most important festival of Mendoza . In this province of the region of Cuyo, vintage celebrations are part of folklore that manages to bring winemakers and all those who work during the vine and soil, the rest of society.</p>
					<p class="w2">The greatest show takes place in the now famous Greek Theatre Frank Romero Day, emblematic stage where for years the election of the queen is celebrated and the public enjoys one of the most important events in the country, with more than a thousand artists on stage and lighting and effects rarely seen in the world to such magnitude guest.For these reasons, the National Harvest Festival is one of the most important popular events in Argentina. It has to be there, at least once in life, to understand this unconditional love of a people for wine.</p>
					
					<p class="w1" align="left"><b>Monkey-Puzzle Tree Festival</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When:</i> March<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where:</i>  Aluminé, Plaza San Martín, Modarelli y Joubert<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://www.araucanie.com/naars/The%20Monkey%20Puzzle%20Tree%20Harvest.htm> http://www.araucanie.com/</a>
					</p>
					<p class="w2">Easter’s long weekend is perfect to pay tribute to the monkey-puzzle tree, a typical species on the Andean area in the Province of Neuquén.Best Accommodations in AluminéPehuén”, “araucaria araucana”, “piñorero” are some of the names taken by this tree species which turned out to be extremely important for the native peoples. It is worshipped year round but its festival is held in Aluminé at Easter.</p>
					<p class="w2">The city spares no expense during four days of celebration devoted to consolidating and joining Mapuche and Criollo customs. Rural skills as well as singing and dancing art shows with traditional southern music make up the very complete program. All this is complemented by handicrafts markets, sports events and typical dishes.</p>
					<p class="w2">One very emotional moment takes place when a monkey-puzzle tree specimen is planted as a symbol of their continuity and for its fruit, rich in protein, to ensure the sustenance of those who planted it. In the past, they used to be the staple food of the Mapuche people, as its nourishing, even medicinal, properties remain no matter how it is cooked.On Sunday, the program’s finale takes place at the traditionalist center, where different categories of shows on horseback are presented. The riders put their manhood and skills to the test while visitors have the chance to witness a truly rural spectacle.</p>
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