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
						<lie><a class="active" href="April.php">April</a></lie>
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
					  <img class="mySlides" src="../images/Events/april1b.png" style="width:90%">
					  <img class="mySlides" src="../images/Events/april2b.jpg" style="width:85%">
					  <img class="mySlides" src="../images/Events/april3f.jpg" style="width:80%">
					  <img class="mySlides" src="../images/Events/april4f.jpg" style="width:80%">
					  <img class="mySlides" src="../images/Events/april5m.jpg">
					  <img class="mySlides" src="../images/Events/april6m.jpg">
					  <div class="image-indicator">
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/april1b.png" style="width:100%" onclick="currentDiv(1)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/april2b.jpg" style="width:100%" onclick="currentDiv(2)">
						</div>						
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/april3f.jpg" style="width:100%" onclick="currentDiv(3)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/april4f.jpg" style="width:100%" onclick="currentDiv(4)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/april5m.jpg" style="width:100%" onclick="currentDiv(5)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/april6m.jpg" style="width:100%" onclick="currentDiv(6)">
						</div>
					 </div>
					</div>
					<p class="w1" align="left"><b>Buenos Aires International Independent Film Festival</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> Mid-April<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Ciudad de Buenos Aires, Centro Cultural Recoleta, Junín 1930<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://festivales.buenosaires.gob.ar/2017/bafici/en/home> http://festivales.buenosaires.gob.ar/</a>
					</p>
					<p class="w2">BAFICI for short, this 10-day festival celebrates all things film, allowing amateur producers to promote their films and actors and actresses to get their name out in to the world. This annual movie mania has been gracing the streets of Buenos Aires since 1999, gives viewers the chance to see the weird, wonderful and inspiring. Most films are, naturally, Latin American, but there are opportunities for English subtitles. Over eight theatres screen movies and tickets can go fast so get in the queue early. If you miss out on film tickets, you can go along to a Q&A session with producers, directors and actors as well as an award ceremony to finish off the event, so there’s no chance of missing out.</p>
					<p class="w2">Why then is this experience recommendable if at times it gets us deep into oceans of people and frustrates us because we cannot see everything we want? Why then if it represents either an opportunity to discover unexpected masterpieces or a risk to be trapped in atrocious experiences (a curious fact: these experiences will be completely different according to each viewer)? Why then if it deprives us of sleep hours or just our precious time?<br>We can give two answers for readers to choose the one that suits them best.<br>On the one hand, BAFICI is a window onto a new kind of films: the films that are being made and that do not reach the commercial cinemas. This is not about seeing the latest films (though this is about that too), or seeing what is being shot in countries to which we do not usually have access (though this is about that too): BAFICI offers special sections for the retrospective, the classic, conversation and encounters with several celebrities that come along to Buenos Aires to take part in this event.</p>	

					
					<p class="w1" align="left"><b>The Book Fair, reading Festival </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> April<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Ciudad de Buenos Aires, Predio Ferial<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=https://en.wikipedia.org/wiki/Buenos_Aires_International_Book_Fair> https://Buenos_Aires_International_Book_Fair.org</a>
					</p>
					<p class="w2">All lovers of literature know that the Book Fair, as it has come to be popularly called, gets hold of Buenos Aires during April.Like every year, the International Book Fair becomes a small city within the big city, fully dressed in books, colors, publishing houses, old and new writers, fanatic readers and many other beginners who come along to see what this is about. </p>
					<p class="w2">In addition to being a cultural event, the Fair is also a good business opportunity for publishing houses and, in this case, both purposes are perfectly combined. The idea of reaching the heart of the readers by the publishing houses present at the event is experienced at every minute, as ever since the first issues of the Fair, authors and writers have contact with the public. </p>
					
					
					<p class="w1" align="left"><b>Malbec World Day </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> 17th April<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Everywhere in Argentina<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://malbecworldday.com/> http://malbecworldday.com/</a>
					</p>
					<p class="w2">Malbec World Day. One Day. One Celebratio. One Global Superstar.<br>Malbec was born a star in Argentina. Since its beginning, it has contributed to the exploration of our terroirs and diversity of our soils and altitudes. It continues to cross geographical boundaries, delighting the palates of wine lovers around the globe. Malbec World Day has become a truly global celebration!</p>
					<p class="w2">The first Malbec World Day, celebrated worldwide on April 17 2011, was a resounding success and encouraged us to celebrate again this year. With the support of the Argentine Chancellery, more than 40 Argentine diplomatic representations around the world will be organizing activities again this year in celebration of this emblematic day for the Argentine wine industry. Among the participating delegations will be the United States, Canada, China, the Czech Republic, Malaysia, Brazil, Poland, Algeria, Vietnam, Ukraine, Bulgaria, Greece, Australia, Perú, the Philippines, Germany, Denmark, Chile, Venezuela, Finland, Portugal, Spain, Korea, India, the Netherlands, Uruguay, Sweden, Russia, Armenia and Panama.</p>					
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