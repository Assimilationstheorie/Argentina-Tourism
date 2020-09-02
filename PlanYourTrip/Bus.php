<html>
	<head>
		<title>Buses</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">	
		<link href="../css/menu.css" type="text/css" rel="stylesheet">
		<link href="../css/plan.css" type="text/css" rel="stylesheet">
		<link href="../css/slider.css" type="text/css" rel="stylesheet">
	
	<script type="text/Javascript">
		function validation()
		{
			//Drop down(last qualification)

					if(bus1.location.selectedIndex <=0)
					{
						alert("Please, select a Start Point.");
						return false;
					}
					
					if(bus1.year_start.selectedIndex <=0)
					{
						alert("Please, select a Year.");
						return (false);
					}
					if(bus1.month_start.selectedIndex <=0)
					{
						alert("Please, select a Month.");
						return (false);
					}
					if(bus1.day_start.selectedIndex <=0)
					{
						alert("Please, select a Day.");
						return (false);
					}
					if(bus1.bus.selectedIndex <=0)
					{
						alert("Please, select a type of Bus.");
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
						<lip><a href="Car.php">RENTAL CARS</a></lip>
						<lip><a class="active" href="Bus.php">BUSES</a></lip>
						<lip><a href="Flight.php">FLIGHTS</a></lip>
						<lip><a href="Pack_Disc.php">PACKAGES & DISCOUNT</a></lip>
					</ulp>
				</div>
				<div id="contents">
					<div id="contents1" align="left">
				<p class="abc">If you are doing any serious traveling around Argentina, you will become very familiar with the country's excellent bus network. Long-distance &nbsp buses (known as micros) are fast, surprisingly comfortable and can be a rather luxurious experience. It's the way most Argentines get around..</p>
				<p class="abc"><b class="inner-heading">Classes And Cost:</b><br>
				1.Most bus lines have modern coaches with spacious, comfortable seats, large windows, air-conditioning, TVs, toilets (bring toilet paper) and sometimes an attendant serving coffee and snacks.<br>
				2.Bus fares vary widely depending on the season, class and company. Patagonia runs tend to be the most expensive. Many companies accept credit cards.
				</p>
				</div>
				<div id="contents2">
				<h2 ><b class="inner-heading">Hire A Bus</b></h2>
				
				<form  name="bus1" action ="../Main.php" onSubmit="return validation()" method="post" >
				<table  >
				
					<tr>
						<td class="plan" ><select  name="location"    >
									<Option value="0">----Choose a Location----</Option>
									<Option value="Buses - Buenos Aires">BUENOS AIRES</Option>
									<Option value="Buses - Bariloche">BARILOCHE</Option>
									<Option value="Buses - Mendoza">MENDOZA</Option>
									<Option value="Buses - MarDelPlata">Mar Del Plata</Option>
									<Option value="Buses - Ushuaia">Ushuaia</Option>								
						</td>
					</tr>
					
					<tr>
					<td class="plan" >
					<select id="year_start"
						 name="year_start"  class="date"/><Option value="0">--Year--</Option>
					    
					<option>2016</option>      
					<option>2017</option>      
					<option>2018</option>   	
					<option>2019</option>
				    <option>2020</option>
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
				  
				  <select id="day_start"
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
				  <select class="select" id="bus"
						 name="bus" /><Option value="0">--Select A Bus--</Option>
					<option>Class 5: Comun</option>      
					<option>Class 4: Comun con aire</option>      
					<option>Class 3: Semicama</option>      
					<option>Class 2: Cama-Ejecutivo</option>      
					<option>Class 1: Cama Suite</option>      
				</select>
					</td>
					</tr>
				  <tr>
						<td class="plan"><input class="button" type="Submit" value="Search" class="button">
				    		  <input class="button" type="Reset" value="Cancel" class="button"></td>
					</tr>
					
					</table>
					</form>
					</div>
					<div id="contents3">
						<img class="mySlides" src="../images/BUS.jpg">
						<img class= "mySlides" src="../images/bus3.jpg">
						<img class="mySlides" src="../images/bus2.jpg">
						<img class="mySlides" src="../images/bus1.jpg">
						
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