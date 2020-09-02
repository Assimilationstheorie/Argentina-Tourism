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
						<lie><a class="active" href="June.php">June</a></lie>
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
					  <img class="mySlides" src="../images/Events/june1g.jpg" style="width:75%">
					  <img class="mySlides" src="../images/Events/june2g.jpg" style="width:80%">
					  <img class="mySlides" src="../images/Events/june3n.jpg">
					  <img class="mySlides" src="../images/Events/june4n.jpg" style="width:75%">
					  <img class="mySlides" src="../images/Events/june5l.jpg" style="width:90%">
					  <img class="mySlides" src="../images/Events/june6l.jpg" style="width:80%">
					  <div class="image-indicator">
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/june1g.jpg" style="width:100%" onclick="currentDiv(1)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/june2g.jpg" style="width:100%" onclick="currentDiv(2)">
						</div>						
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/june3n.jpg" style="width:100%" onclick="currentDiv(3)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/june4n.jpg" style="width:100%" onclick="currentDiv(4)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/june5l.jpg" style="width:100%" onclick="currentDiv(5)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/june6l.jpg" style="width:100%" onclick="currentDiv(6)">
						</div>
					 </div>
					</div>
					<p class="w1" align="left"><b>Gauchos of Guemes Parade </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> 17 June<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Salta, Monumento a Guemes, Cerro San Bernardo <br>
					</p>
					<p class="w2">This celebration is to be witnessed in order to grasp its real sense. Who was Guemes? Why have the people of Salta loved him so much for so long? Who were and still are his gauchos? We stayed at the right place to understand this beautiful story of everlasting love and loyalty.</p>
					<p class="w2">very year on June 17th, the City of Salta dresses up for a celebration that pays tribute to the most remarkable citizens. They are none others than the gauchos of Guemes and the memory of their beloved commander, Martin Miguel de Guemes.</p>
					<p class="w2">The night before the parade, stokers assemble for an all-night vigil just right at his great monument. There, at the foot of San Bernardo Hill, the followers of this military leader gather during a cold night in Salta to start the ritual of the bonfires which, year after year, appeals more enthusiasts from all the corners of the country.</p>
					
					
					<p class="w1" align="left"><b>Patagonian New Year </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> 24 June<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> San Carlos de Bariloche<br>
					</p>
					<p class="w2">On June 24, the primitive peoples both from Chile and Argentina celebrate the beginning of the new year. An ancient tradition which attracts new visitors every year.</p>
					<p class="w2">he Mapuche people, as well as the most primitive peoples on the continent, have developed a great knowledge of astrology and astronomy. They have managed to interpret the movements of the sun, the rest of the stars and the planets, as well as the changes they produce on nature and even people. </p>
					<p class="w2">All these practices are aimed at strengthening the spirit of brotherhood within the community, friendship among family groups and the co-existence with the others. Maybe that is the reason why it is not surprising that in the last few years, these popular celebrations have been open not only for the Chilean and the Argentinian in general, but also for a large number of foreign tourists who visit the area during this season in order to watch and take part in the rituals deriving from an evolutioned phylosophy of life which is far from getting lost.</p>
					
					
					<p class="w1" align="left"><b>The Longest Night in the World </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> 21 June<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Complejo Polideportivo de Ushuaia, Malvinas Argentinas y 12 de Octubre <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://www.e-ushuaia.com/ingles/ag_invierno.htm> http://www.e-ushuaia.com/ingles/ag_invierno.htm</a>
					</p>
					<p class="w2">Every year, the longest night in the world is celebrated in Ushuaia on June 21, when the city gets decked out and sleeping is forbidden.Even though celebrations started before, it was not until 1986 that the festival went national and, ever since, it has been held for three days: from June 20 thru 22.</p>
					<p class="w2">It is on June 21 that the calendar shows the longest night in the year and the winter solstice takes place in the southern hemisphere. Therefore, this is also the shortest day in the year, on which daytime lasts from 10am to 5pm.</p>
					<p class="w2">At present, times have changed remarkably and in order to celebrate the longest night in the year, there is a cultural agenda containing various activities in which the denizens of the City of Ushuaia and the thousands of tourists that invade the city take part along with the most outstanding national and local artists that join in.One of the protagonists of this great festival is known as the “Burn of Obstacles and Impediments” and it consists in writing down all the difficulties that have prevented people from fulfilling their aims. The papers are thrown by the participants into a large bonfire on the solstice night: June 21.</p>					
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