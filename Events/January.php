<html>
	<head>
		<title>Events-January</title>
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
						<lie><a class="active" href="January.php">January</a></lie>
						<lie><a href="February.php">February</a></lie>
						<lie><a href="March.php">March</a></lie>
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
					  <img class="mySlides" src="../images/Events/jan2gc.jpg" style="width:90%">
					  <img class="mySlides" src="../images/Events/jan1gc.jpg" style="width:90%">
					  <img class="mySlides" src="../images/Events/jan4v.jpg" style="width:80%">
					  <img class="mySlides" src="../images/Events/jan5v.jpg" style="width:90%">
					  <img class="mySlides" src="../images/Events/jan6lp.jpg" >
					  <img class="mySlides" src="../images/Events/jan7lp.jpg">
					  <div class="image-indicator">
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/jan2gc.jpg" style="width:100%" onclick="currentDiv(1)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/jan1gc.jpg" style="width:100%" onclick="currentDiv(2)">
						</div>						
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/jan4v.jpg" style="width:100%" onclick="currentDiv(3)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/jan5v.jpg" style="width:100%" onclick="currentDiv(4)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/jan6lp.jpg" style="width:100%" onclick="currentDiv(5)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/jan7lp.jpg" style="width:100%" onclick="currentDiv(6)">
						</div>
					 </div>
					</div>
					<p class="w1" align="left"><b>Gualeguaychu Carnival</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When:</i> January-February<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where:</i> Corsódromo, ex Estación del Ferrocarril,Av Illia y Belgrano<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://www.gualeguaychuturismo.com/web/>http://www.gualeguaychuturismo.com/web/</a>
					</p>
					<p class="w2">During the weekends of January and February, the city will dress up in color, feathers and sequins for the murgas and comparsas to show off at the local corsódromo.</p>
					<p class="w2">Having its own corsódromo (one of the reasons to make the locals proud), Gualeguay is a city where carnival has a prominent role every summer. No wonder it is said that it has one of the most spectacular carnivals in the Province of Entre Ríos. </p>
					<p class="w2">The beauty of its women, evidenced by the paraders in the Si-Si, K- Rumbay and Samba Verá comparsas, in addition to the strength of the drums played by the male paraders, manage to summon neighbors of all ages to join the groups at each presentation of the Carnival. Many times, they surpass the one hundred members, including dancers, paraders, bazucada and mascots.</p>
					<p class="w2">Argentina’s biggest festivals, rivalling the Rio Carnival. Held in Gualeguaychu, in the North East of Argentina, the Corosodroma seats up to 40,000 people. All of whom come to witness the amazing energy of this festival. Taking place over 9 Saturdays, there's more than enough to keep you entertained, with colourful costumes, feathers, floats, five stages with music and singers. The key event is the crowning of the King of the Carnival – try saying that 5 times. This position is battled out between 4 samba clubs, known as comparsa, which consist of 700 dancers all trying to show why they’ve got the moves to win it. This really is a big festival!</p>
					
					<p class="w1" align="left"><b>El Festival Nacional del Folklore en Cosquín</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When:</i> 21-29th January<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where:</i> Plaza Próspero Molina, Escenario Atahualpa Yupanqui, Av.San Martín, Obispo Bustos, Tucumán, Catamarca<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://aquicosquin.org/>http://aquicosquin.org/</a>
					</p>
					<p class="w2">January is the month to view Cosquín holiday with its traditional spectacle: the National Folklore Festival Cosquín on stage "Atahualpa Yupanqui".</p>
					<p class="w2">Cosquín is known throughout the country for its Festival Nacional del Folklore, a nine-day national folk-music festival that's been held in the last week of January since 1961. The town gets packed for the festival, stays busy all summer and goes pleasantly dead the rest of the year.</p>
					<p class="w2">During this ten nights, Cosquín is expected to give rise to all cultural expressions of the various provinces of our Argentina , which will be present with their music and folk traditions. then there will be 10 moons of music and dance, which will feature established artists and new values that reach Cosquín with their backpacks full of dreams and magic, as started by many ,who today are part of our popular folklore. Pride of Argentine and dye export everyone, Cosquín is the cradle of Folklore and hopes, as does every year, bringing live and love to their popular artists again with their audience. </p>
					
					<p class="w1" align="left"><b>La Paz International Triathlon</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When:</i> Mid-January<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where:</i> La Paz, Puerto<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://www.trialapaz.com/>http://www.trialapaz.com/</a>
					</p>
					<p class="w2">Those who love swimming, cycling and running have the perfect excuse to gather at the City of La Paz every year. The triathlon includes it all.Every year, on the third weekend of January, one interesting activity stands out both in the national and in the international sphere.</p>
					<p class="w2">The triathlon is one of the most important competitions in the country and one of the three most important in this specialty.In order to complete the race, competitors swim along 2,200 meters, cycle along 40 kilometers and run a 10-kilometer marathon. The winner is the one who manages to do all this in the shortest time possible. </p>
					<p class="w2">Since 2006, the event has been considered as an ITU class Continental Event. Its score will be valid for the Pekín Olimpic Games classification, as well as in the PATCO Panamerican Ranking. These acronyms are familiar for all those who are immersed in this kind of competition. </p>
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