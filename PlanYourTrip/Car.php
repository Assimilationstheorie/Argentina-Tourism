<html>
	<head>
		<title>Rental Cars</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">	
		<link href="../css/menu.css" type="text/css" rel="stylesheet">
		<link href="../css/plan.css" type="text/css" rel="stylesheet">
		<link href="../css/slider.css" type="text/css" rel="stylesheet">
		<script type="text/Javascript">
		function validation()
		{
			//Drop down(last qualification)

					if(car.location.selectedIndex <=0)
					{
						alert("Please, select a Start Point.");
						return false;
					}
					
					if(car.year_start.selectedIndex <=0)
					{
						alert("Please, select a Year.");
						return (false);
					}
					if(car.month_start.selectedIndex <=0)
					{
						alert("Please, select a Month.");
						return (false);
					}
					if(car.day_start.selectedIndex <=0)
					{
						alert("Please, select a Day.");
						return (false);
					}
					if(car.typecar.selectedIndex <=0)
					{
						alert("Please, select a type of Car.");
						return (false);
					}
					
		}
	</script>
	</head>
	<body>
		<?php
			session_start();						
		?> 
		<center>
			<div id="top-fixed">
					<div id="nav">
						<ul>
							<li><a href="Hotel.php"><c>PLAN YOUR TRIP</c></a></li>					
							<li class="dropdown">
								<a href="#" class="dropbtn">EXPLORE</a>						
								<div class="dropdown-content">
									<a href="../Home.php#c2">Virtual Argentina</a>
									<a href="../Explore/Attractions.php">Attractions</a>
									<a href="../Explore/Beaches.php">Beaches</a>
									<a href="../Explore/Hills.php">Hills</a>
									<a href="../Explore/shopping.php">Shopping</a>
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
				<div id="content">
					<ulp>
						<lip><a href="Hotel.php">HOTELS</a></lip>
						<lip><a class="active" href="Car.php">RENTAL CARS</a></lip>
						<lip><a href="Bus.php">BUSES</a></lip>
						<lip><a href="Flight.php">FLIGHTS</a></lip>
						<lip><a href="Pack_Disc.php">PACKAGES & DISCOUNT</a></lip>
					</ulp>
				</div>
				<div id="contents">
					<div align="left" id="contents1">
				<p class="abc">Wherever you're headed, the only thing between you and freedom is nailing down your car rental. So how do you find the car hire gems among the clapped-out rustbuckets? Because Argentina is so large, many parts are accessible only by private vehicle, despite the country's extensive public transportation system.</p>
				<p class="abc"><b class="inner-heading">Road Rules:</b><br>
				1. To rent a car, you must be at least 21 years of age and have a credit card and valid driver's license from your country.<br>
				2. Anyone considering driving in Argentina should know that Argentine drivers are aggressive and commonly ignore speed limits, road signs and even traffic signals.
				</p>
				</div>
				<div  id="contents2">
				<h2><b class="inner-heading">Hire A Car</b></h2>				
				<form  name="car" action ="../Main.php" onSubmit="return validation()" method="post" >
				<table  >
				
					<tr>
						<td class="plan"><Select name="location" >
									<Option value="0">----Choose a location----</Option>
									<Option value="Rental Cars-Buenos Aires">BUENOS AIRES</Option>
									<Option value="Rental Cars-Bariloche">BARILOCHE</Option>
									<Option value="Rental Cars-Mendoza">MENDOZA</Option>
									<Option value="Rental Cars-Mar Del Plata">Mar Del Plata</Option>
									<Option value="Rental Cars-Ushuaia">Ushuaia</Option>
									<Option value="Rental Cars-Puerto Iguazu">Puerto Iguazu</Option>
									<Option value="Rental Cars-Cordoba">Cordoba</Option>
						</td>
					</tr>
					
					<tr>
					<td class="plan">
					<select  id="year_start"
						 name="year_start"  class="date"/><Option value="0">--Year--</Option>
					<option>2009</option>      
					<option>2010</option>      
					<option>2011</option>      
					<option>2012</option>      
					<option>2013</option>      
					<option>2014</option>      
					<option>2015</option>      
					<option>2016</option>      
					<option>2017</option>      
					<option>2018</option>      
				  </select>
				  <select id="month_start"
						  name="month_start" class="date"/>
						  <Option value="0">-Month-</Option>
					<option>January</option>      
					<option>February</option>      
					<option>March</option>      
					<option>April</option>      
					<option>May</option>      
					<option>June</option>      
					<option>July</option>      
					<option>August</option>      
					<option>September</option>      
					<option>October</option>      
					<option>November</option>      
					<option>December</option>      
				  </select> 
				  
				  <select  id="day_start"
						  name="day_start" class="date" />
						  <Option value="0">--Day--</Option>
					<option>1</option>      
					<option>2</option>      
					<option>3</option>      
					<option>4</option>      
					<option>5</option>      
					<option>6</option>      
					<option>7</option>      
					<option>8</option>      
					<option>9</option>      
					<option>10</option>      
					<option>11</option>      
					<option>12</option>      
					<option>13</option>      
					<option>14</option>      
					<option>15</option>      
					<option>16</option>      
					<option>17</option>      
					<option>18</option>      
					<option>19</option>      
					<option>20</option>      
					<option>21</option>      
					<option>22</option>      
					<option>23</option>      
					<option>24</option>      
					<option>25</option>      
					<option>26</option>      
					<option>27</option>      
					<option>28</option>      
					<option>29</option>      
					<option>30</option>      
					<option>31</option>      
				  </select> 
				  
				  
				  </td>
				  </tr>
				  <tr>
				  <td class="plan">
				  <select class="select" 
						 name="typecar" /><Option value="0">--Select A Car--</Option>
					<option>Volkswagen Beetle</option>      
					<option>Toyota Corolla</option>      
					<option>Suzuki Cervo</option>      
					<option>Renault Dauphine</option>      
					<option>Land Rover Defender</option>      
					<option>Land Rover Discovery</option>      
					<option>Honda Fit</option>      
					<option>Honda City</option>      
					<option>Chevrolet 400</option>      
					     
				  </select>
				  </td>
				  </tr>
				  <tr>
						<td class="plan"><input type="Submit" value="Search" class="button">
				    		<input type="Reset" value="Cancel" class="button"></td>
					</tr>
					
					</table>
					</form>
					</div>
					<div id="contents3">
						<img class="mySlides" src="../images/car4.jpg">
						<img class= "mySlides" src="../images/car3.jpg">
						<img class="mySlides" src="../images/car1.jpg">
						<img class="mySlides" src="../images/car2.jpg">						
						<div class="arrow_dots" style="width:100%">
							<div class="arrow arrow-left" onclick="plusDivs(-1)">&#10094;</div>
							<div class="arrow arrow-right" onclick="plusDivs(1)">&#10095;</div>
							<span class="dots demo" onclick="currentDiv(1)"></span>
							<span class="dots demo" onclick="currentDiv(2)"></span>
							<span class="dots demo" onclick="currentDiv(3)"></span>
							<span class="dots demo" onclick="currentDiv(4)"></span>
						</div>
					</div>
				</div>
				
				<div id="footer">
					<div id="footer1">
						<a href="../Home.php">Home</a><a> | </a>
						<a href="Hotel.php">Plan Your Trip</a><a> | </a>
						<a href="../Explore/Attractions.php">Explore</a><a> | </a>
						<a href="../Events/January.php">Events</a><a> | </a>
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
					© 2016 Argentina Tourism Board. All rights reserved. | Developed by Webtek Students.				
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
					dots[i].className = dots[i].className.replace(" dot", "");
				}
				x[myIndex-1].style.display = "block";
				setTimeout(carousel, 10000);// Change image every 15 seconds
				dots[myIndex-1].className += " dot";

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
			  for (i = 0; i < dots.length; i++){
			 dots[i].className = dots[i].className.replace(" dot", "");
			  }
			  x[slideIndex-1].style.display = "block";
			  dots[slideIndex-1].className += " dot";
			}
		</script>
	</body>
</html>