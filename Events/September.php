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
						<lie><a href="July.php">July</a></lie>
						<lie><a href="August.php">August</a></lie>
						<lie><a class="active" href="September.php">September</a></lie>
						<lie><a href="October.php">October</a></lie>
						<lie><a href="November.php">November</a></lie>
						<lie><a href="December.php">December</a></lie>
					</ul>
				</div>
				<div id="content-event">
					<div id="content-slider-event">
					  <img class="mySlides" src="../images/Events/sep5.jpg" style="width:90%">
					  <img class="mySlides" src="../images/Events/sep2.jpg" style="width:80%">
					  <img class="mySlides" src="../images/Events/sep1.jpg" style="width:80%">
					  <img class="mySlides" src="../images/Events/sep3.jpg" style="width:80%">
					  <img class="mySlides" src="../images/Events/sep4.jpg">
					  <img class="mySlides" src="../images/Events/sep6.jpg" style="width:80%">
					  <div class="image-indicator">
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/sep5.jpg" style="width:100%" onclick="currentDiv(1)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/sep2.jpg" style="width:100%" onclick="currentDiv(2)">
						</div>						
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/sep1.jpg" style="width:100%" onclick="currentDiv(3)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/sep3.jpg" style="width:100%" onclick="currentDiv(4)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/sep4.jpg" style="width:100%" onclick="currentDiv(5)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/sep6.jpg" style="width:100%" onclick="currentDiv(6)">
						</div>
					 </div>
					</div>
					<p class="w1" align="left"><b>Semana Musical Llao Llao  </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> September<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Bariloche<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://www.semanamusical.com/> http://www.semanamusical.com/</a>
					</p>
					<p class="w2">This classical musical festival, held in the town of Bariloche, is a celebration of the art of classical music. Concerts are held throughout the town, while musicians from all around the world arrive in Bariloche to give solo and ensemble performances.</p>
					<p class="w2"> Taking place in the town of Bariloche, this September event celebrates classical music with performances from acclaimed artists all over the world.</p>
					<p>A clip audio of the event :--</p>
					<div id="content-slider-event">
						<iframe width="100%" height="380" src="https://www.youtube.com/embed/akvBBdPhM9I">
						</iframe>
					</div>
					
					
					<p class="w1" align="left"><b>Fiesta Nacional del Inmigrante o de las Colectividades </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> Mid September<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i>  Obera - Misiones, Parque de las Naciones, Andresito y Ramallo<br>
					</p>
					<p class="w2">Since 1980 is celebrated The Immigrant's Festival or the Communities in Oberá. As in those days, still alive today in the same spirit to pay tribute to their countries of origin.</p>
					<p class="w2">It was in 1980 in Oberá , when a group of immigrant neighbors decided to get together to share their traditional foods and customs brought from their countries of origin. While initially there were few participants families, year after year began to join members of this celebration that it was christened Immigrant festival, until he had the character of being declared national cultural interest for the whole country. the party thus became a classic of September. Every year, communities were formed and added up to the initiative to share their traditions and origins in this particular party, which went from being provincial National, with its permanent headquarters city missionary Oberá.</p>
					<p class="w2">The Federation of Communities is responsible for organize the party (through an organizing committee), to which the care and maintenance of the Park of Nations is also added. As the party grew over the years, within the park each community began to take place and well built typical house, which gave rise to that from 1997 the Immigrant's Festival takes place in the Park of Nations, where out social, cultural and recreational activities, sports are carried during the conference, in a festive atmosphere of coexistence that brings together obereños and visitors from Argentina and the world.</p>
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