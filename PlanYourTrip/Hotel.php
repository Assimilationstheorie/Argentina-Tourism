<html>
	<head>
		<title>Hotel</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">	
		<link href="../css/menu.css" type="text/css" rel="stylesheet">
		<link href="../css/plan.css" type="text/css" rel="stylesheet">
		<link href="../css/slider.css" type="text/css" rel="stylesheet">
		<style>select.dat{width:60px;}</style>
		<script type="text/Javascript">
		function validation()
		{
			//Drop down(last qualification)

					if(hotel.location.selectedIndex <=0)
					{
						alert("Please, select a Location.");
						return false;
					}
					
					if(hotel.year_start.selectedIndex <=0)
					{
						alert("Please, select a Check in Year.");
						return (false);
					}
					if(hotel.month_start.selectedIndex <=0)
					{
						alert("Please, select Check in a Month.");
						return (false);
					}
					if(hotel.day_start.selectedIndex <=0)
					{
						alert("Please, select Check in a Day.");
						return (false);
					}
					if(hotel.year_start1.selectedIndex <=0)
					{
						alert("Please, select a Check out Year.");
						return (false);
					}
					if(hotel.month_start1.selectedIndex <=0)
					{
						alert("Please, select Check out a Month.");
						return (false);
					}
					if(hotel.day_start1.selectedIndex <=0)
					{
						alert("Please, select Check out a Day.");
						return (false);
					}
					var room=document.getElementById("roo").value;
					if( room=="" )
					{
						alert("Enter The Total room Required");
						return false;
					}
					var person=document.getElementById("per").value;
					if( person=="" )
					{
						alert("Enter The No Of People");
						return false;
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
						<lip><a class="active" href="Hotel.php">HOTELS</a></lip>
						<lip><a href="Car.php">RENTAL CARS</a></lip>
						<lip><a href="Bus.php">BUSES</a></lip>
						<lip><a href="Flight.php">FLIGHTS</a></lip>
						<lip><a href="Pack_Disc.php">PACKAGES & DISCOUNT</a></lip>
					</ulp>
				</div>
				<div id="contents"><div id="contents1" align="left">
				<p class="abc">Accommodations in Argentina range from campgrounds to five-star luxury hotels. 
				At the tourist-oriented hotels staff members will speak some English, though at more provincial accommodations
				you’ll be practicing your castellano (what Argentina calls its Spanish).</p>
				<p class="abc"><b class="inner-heading">HOTEL RATES</b><br>
				1.  Budget and midrange hotels almost always include taxes when quoting their prices, 
				but top-end hotels usually do not – and it’s 21%.<br>
				2.Payment in cash (usually at midrange to top-end hotels) sometimes results in a 10% discount. 
				Likewise, you can be charged a 'fee' for using credit cards. Paying with a foreign debit card is sometimes – but not always – possible at no extra charge.<br>
				3.High season is generally January and February (when Argentines take their summer breaks), Semana Santa (Easter week) 
				and July and August (except in Patagonia). Reserve ahead during these times.</p>
				</div>
				<div id="contents2">
				<h2 ><b class="inner-heading">Book a Hotel</b></h2>
				
				<form  name="hotel" action ="../Main.php" onSubmit="return validation()" method="post">
				<table>
				
					<tr>
						<td class="plan"><Select name="location" class="select">
									<Option value="0">----Choose a Location----</Option>
									<Option value="Hotels in Buenos Aires">BUENOS AIRES</Option>
									<Option value="Hotels in Bariloche">BARILOCHE</Option>
									<Option value="Hotels in Mendoza">MENDOZA</Option>
									<Option value="Hotels in Mar Del Plata">Mar Del Plata</Option>
									<Option value="Hotels in Ushuaia">Ushuaia</Option>
									<Option value="Hotels in Puerto Iguazu">Puerto Iguazu</Option>
									<Option value="Hotels in Cordoba">Cordoba</Option>
									<Option value="Hotels in El Chalten">El Chalten</Option>

						</td>
					</tr>					
					<tr>
					<td class="plan" ><n>Check in:&nbsp&nbsp</n>
					<select id="year_start"
						 name="year_start"  class="dat"/><Option value="0">yy</Option>
					    
					<option>2016</option>      
					<option>2017</option>      
					<option>2018</option>   	
					<option>2019</option>
				    <option>2020</option>
					 </select>
				  <select id="month_start"
						  name="month_start" class="dat"/>
						  <Option value="0">mm</Option>
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
						  name="day_start" class="dat" />
						  <Option value="0">dd</Option>
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
					<td class="plan" ><n>Check out:</n>
					<select id="year_start1"
						 name="year_start1"  class="dat"/><Option value="0">yy</Option>
					    
					<option>2016</option>      
					<option>2017</option>      
					<option>2018</option>   	
					<option>2019</option>
				    <option>2020</option>
					 </select>
				  <select id="month_start1"
						  name="month_start1" class="dat"/>
						  <Option value="0">mm</Option>
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
				  
				  <select id="day_start1"
						  name="day_start1" class="dat" />
						  <Option value="0">dd</Option>
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
				   <input  type="number" name="room" id="roo" class="people" placeholder="--Room--">
				 <input  type="number" name="person" id="per" class="people" placeholder="--People--">
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
						<img class="mySlides" src="../images/hotel5.jpg">
						<img class= "mySlides" src="../images/hotel3.jpg">
						<img class="mySlides" src="../images/hotel2.jpg">
						<img class="mySlides" src="../images/hotel1.jpg">
						<img class="mySlides" src="../images/hotel4.jpg">
						<div class="arrow_dots" style="width:100%">
							<div class="arrow arrow-left" onclick="plusDivs(-1)">&#10094;</div>
							<div class="arrow arrow-right" onclick="plusDivs(1)">&#10095;</div>
							<span class="dots demo" onclick="currentDiv(1)"></span>
							<span class="dots demo" onclick="currentDiv(2)"></span>
							<span class="dots demo" onclick="currentDiv(3)"></span>
							<span class="dots demo" onclick="currentDiv(4)"></span>
							<span class="dots demo" onclick="currentDiv(5)"></span>
						</div>
					</div></div>
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