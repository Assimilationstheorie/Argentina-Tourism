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
						<lie><a class="jan" href="January.php">January</a></lie>
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
						<lie><a class="active" href="December.php">December</a></lie>
					</ul>
				</div>
				<div id="content-event">
					<div id="content-slider-event">
					  <img class="mySlides" src="../images/Events/dec3.jpg">
					  <img class="mySlides" src="../images/Events/dec2.jpg">
					  <img class="mySlides" src="../images/Events/dec1.jpg" style="width:80%">
					  <img class="mySlides" src="../images/Events/dec4.jpg" style="width:70%">
					  <img class="mySlides" src="../images/Events/dec5.jpg" style="width:80%">
					  <img class="mySlides" src="../images/Events/dec6.jpg" style="width:75%">
					  <div class="image-indicator">
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/dec3.jpg" style="width:100%" onclick="currentDiv(1)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/dec2.jpg" style="width:100%" onclick="currentDiv(2)">
						</div>						
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/dec1.jpg" style="width:100%" onclick="currentDiv(3)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/dec4.jpg" style="width:100%" onclick="currentDiv(4)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/dec5.jpg" style="width:100%" onclick="currentDiv(5)">
						</div>
						<div class="indicator-width">
						  <img class="demo border" src="../images/Events/dec6.jpg" style="width:100%" onclick="currentDiv(6)">
						</div>
					 </div>
					</div>
					<p class="w1" align="left"><b>Virgin of the Valley </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> 8th December<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> Catamarca, Catedral de la Virgen del Valle, Sarmiento entre Republica y San Martin <br>
					</p>
					<p class="w2">The center of the City of Catamarca boasts the imposing cathedral of Our Lady of the Valley, Patron Saint of the city. Throughout the year, thousands of faithful believers from all parts of the country flock to see the image of the virgin.</p>
					<p class="w2">At that time, Vicario Seguro worked very hard to build this cathedral. In fact, he persuaded Justo Jose de Urquiza to make a donation of a sum of money for its construction. Certainly, many pilgrims also collaborated on the same purpose. The temple is so superb that not only does it attract the pilgrims but also the visitors to Catamarca, who cannot miss this architectural jewel. Its facade has a big entrance hall which extends towards the sidewalk and two side towers almost forty meters high.</p>
					<p class="w2">At both sides, there are several chapels to house those who beg or thank the Virgin of the Valley. Inside the building, visitors are delighted with the astounding design of the dome portraying the assumption of Virgin Mary into Heaven and other great pictures, works by Italian artist Orlando Orlandi, which display passages of the story of the Virgin.</p>
					
					
					<p class="w1" align="left"><b>Pigue: Giant Omelette Festival</b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> December<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i>Parque Municipal Fortunato Chiappara, Pigue, Av. Rastreador Fournier y Ruta Nacional 33 <br>
					</p>
					<p class="w2">This celebration gains more and more guests year after year and the house already seems too small to share this meal imposed by the first French settlers of the region.</p>
					<p class="w2">Only participants of this tasty occasion succeed in answering some questions arising at the moment of imagining how the famous king size omelette is made. The members of the fraternity that has prepared it year after year are capable of explaining some of their culinary secrets.  </p>
					<p class="w2">The mystery is finally unveiled: the omelette is not turned around. Instead, it resembles scrambled eggs to which exquisite ingredients are added, thus giving origin to one of the most popular recipes of French cuisine. The icing on the cake takes place when the German community of Pigüe joins the celebration with its typical pie from the Volga Region, which is generously divided among the attendants. All in all, it is an amusing and picturesque homage paid to European immigrants.</p>
					
					
					<p class="w1" align="left"><b>Christmas Day </b><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>When: </i> 25 December<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Where: </i> All over Argentina<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp <i>Website:</i> <a href=http://www.whychristmas.com/cultures/argentina.shtml> www.christmas_argentina.com</a>
					</p>
					<p class="w2">Even though the weather may be cold in December, the Christmas spirit is sure to warm your heart and soul. Presents are opened the evening of December 25 and the whole town is festive.</p>
					<p class="w2">Christmas celebrations are like many other countries, with church services, gift-giving, feasts and fireworks. Christmas is in the middle of Argentina’s summer, so picnics are not uncommon on Christmas Day. Whatever festivities people choose to partake in, it is always with the family, as Christmas in Argentina is the time for families and loved ones. </p>
					<p class="w2">The main meal Christmas is eaten during the evening of Christmas Eve, often about 10pm or 11pm. It might be served in the garden or be a barbecue! Some popular dishes include roasted turkey, roasted pork (in northern Argentina, some people will have goat), stuffed tomatoes, salads and Christmas bread and puddings like 'Pan Dulce' and Panetone.At midnight there will be the sound of lots of fireworks! People also like to 'toast' the start of Christmas day. Some people like to go to midnight services, but other prefer to stay at home and let off fireworks and then open their presents under the tree.</p>					
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