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
						<lie><a class="active" href="February.php">February</a></lie>
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
					  <img class="mySlides" src="../images/Events/feb1b.jpg" style="width:90%">
					  <img class="mySlides" src="../images/Events/feb2b.jpg">
					  <img class="mySlides" src="../images/Events/feb3tc.jpg">
					  <img class="mySlides" src="../images/Events/feb4tc.jpg">
					  <img class="mySlides" src="../images/Events/feb5c.jpg" style="width:90%">
					  <img class="mySlides" src="../images/Events/feb6c.jpg">
					  <div class="image-indicator">
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/feb1b.jpg" style="width:100%" onclick="currentDiv(1)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/feb2b.jpg" style="width:100%" onclick="currentDiv(2)">
						</div>						
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/feb3tc.jpg" style="width:100%" onclick="currentDiv(3)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/feb4tc.jpg" style="width:100%" onclick="currentDiv(4)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/feb5c.jpg" style="width:100%" onclick="currentDiv(5)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/feb6c.jpg" style="width:100%" onclick="currentDiv(6)">
						</div>
					 </div>
					</div>
					<p class="w1" align="left"><b>Festival De Baradero</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When:</i> Mid-February<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where:</i>  Municipal Amphitheatre, San Martin 500<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://www.baraderoteinforma.com.ar/>http://www.baraderoteinforma.com.ar/</a>
					</p>
					<p class="w2">When February arrives, the small town of Baradero dresses of celebration and tradition to give rise to one of the most important shows of the summer.Located in the province of Buenos Aires , the city of Baradero is from some long years, the cradle of one of the most important festivals of music and Argentina traditionalist song. With top artists, this event manages to summon every year thousands of fans around the country who gather at night the same to come and enjoy their popular artists.</p>
					<p class="w2">Folklore and chamamé, and other typical artistic expressions of our Argentine being, serve as a perfect excuse to be in a good Buenos Aires city and one of the most modern and equipped for a festival that manages to give capacity to more than 10,000 followers in municipal amphitheater every night.</p>
					
					
					<p class="w1" align="left"><b>Tilcara Carnival Festival</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When:</i> February<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where:</i>  Calles de Tilcara, Lavalle y Alverro<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://www.carnavalargentina.com.ar/tilcara-humahuaca.php>http://www.carnavalargentina.com.ar/</a>
					</p>
					<p class="w2">The city of Tilcara holds their annual Carnival for nine days in February to express their gratitude toward the Earth.Now, this is something a little different, but it’s definitely the best way to experience the South American culture. In the centre of Quebrada de Humahuaca in the Jujuy and Salta province is a village carnival. And I don’t mean a village fete here, it really is a show! The festival opens with a puppet, representing the devil that opens up the gate to madness. All inhibitions - within reason - are lost as it is believed that the devil possesses the villager’s souls throughout the duration of the celebration. They believe the devil takes possession of their souls during the Carnival, which gives the typically reserved people a chance to let loose. When the festival is over, the devil is placed in a hole and buried until the following year.</p>
					<p class="w2">The disinterment and burial of carnival is an ancient rite celebrated by the peoples of Northern Argentina. Beliefs, myths and dancing are part of this singular popular tradition.</p>
					<p class="w2">This festival is a chance for villagers of Tilcara to thank the earth for all it has given. It is believed that the devil possesses the souls of people during Carnival and it is at this time that the normally shy people of Northern Argentina come to life. The festival lasts for nine days and ends with nine offerings to the earth, one for each day of the festivities. The devil is then put back in his hole and covered with rocks until the next year.</p>
					
					<p class="w1" align="left"><b>Fiesta de la Chaya Riojana</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When:</i> February<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where:</i>  La Rioja, Autódromo de la Ciudad<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://lariojachayera.com.ar/>http://lariojachayera.com.ar/</a>
					</p>
					<p class="w2">Chaya is the ancient festival par excellence of the province of La Rioja, "the feast of three days," a great celebration of friendship and joy, sharing and leaving aside all penalties.</p>
					<p class="w2">A classic of Rioja that each year is repeated. An ancient tradition that achieve hermanar Rioja community with several local artists and from around the country.Chaya or "Water Spray" is a symbol of the perennial waiting for the cloud and the ancestral search of water (very expensive to feel riojano vital element).</p>
					<p class="w2">They say the Stadium Vargas is changed, as a new and prepared especially for the festival of all Rioja. They are always nights of moon or stars, which show residents of a region enjoying a lot of local artists with the most important of the national song, giving it prominence to a party that since its inception has become a classic of La Rioja. the story goes that when the Spaniards came to colonize this land met a very characteristic celebration that was between its original inhabitants when it finished the harvest time, where dances and water were something natural for Diaguitas, owners of these lands. Today, Chaya is linked to the celebrations of Carnival and is a feast for locals and tourists, which it has its own philosophy popular party with prevailing codes between throwing flour and water among the revelers; and where lunchtime win the game pies, and wine in abundance.</p>
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