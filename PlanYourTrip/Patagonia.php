<html>
	<head>
		<title>Packages and Discount</title>
		<link href="../css/style.css" type="text/css" rel="stylesheet">	
		<link href="../css/menu.css" type="text/css" rel="stylesheet">
		<link href="../css/plan.css" type="text/css" rel="stylesheet">
		
		<style>	
			img
			{
				margin-top:25px;
				border: 1px solid #737373;
				float:left;
				width:420px;
				height:270px;
				margin-left:70px;
			}
			p.w1{ margin-left:50px;
				color:#737373;
				font-size:20px;
				font-weight:bold;
			}
			p.w2{
				margin-left:30px;
				text-align:left;
				font-size:19px;}
			i{
				color:black;
			}
			select.Packagedat{
				width:55px;
			}
			.packagetable{			
				margin-left:0px;			
				text-align: center;
				vertical-align: middle;		
			}	
			input.checkbox{				
				width: 40px;
				height:20px;				
				float:left;				
			}
			checkboxtext{
				font-size:18px;
				float:left;
				padding-top:3px;
			}
		</style>
		<script type="text/Javascript">
		function validation()
		{
				var adults=document.getElementById("peeps").value;
					if(adults=="")
					{
						alert("Enter The No Of Adults");
						return false;
					}
					
					if(patagonia.year_start.selectedIndex <=0)
					{
						alert("Please, select a  Year.");
						return (false);
					}
					if(patagonia.month_start.selectedIndex <=0)
					{
						alert("Please, select a Month.");
						return (false);
					}
					if(patagonia.day_start.selectedIndex <=0)
					{
						alert("Please, select  a Day.");
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
				
				<div id="contents-package">
					<div id="contents-package1">
						<p class="w1" align="left"><b>Patagonia&nbsp Dreaming </b><br>
							<i >Duration:</i> 9 days/8 nights (approx.)<br>
							<i>Departs From:</i> Buenos Aires<br>
							<i>Returns To:</i> Buenos Aires<br>
							<i>After Discount:</i> <strike>$5999 </strike>&nbsp&nbsp$4674<br><br></p> 
							<?php $_SESSION['Price']=5999; $_SESSION['afterdiscount']=4674; $_SESSION['Packagename']='Patagonia Dreaming'; ?>
						<p  class="w2"> For outdoor enthusiasts who have a bit more time to explore the region's stunning natural beauty, this comprehensive adventure takes in Chile and Argentina's Patagonia. Explore Bariloche and wind through the mountains to Chile's lake district, then head south and trek extensively through some of South America's premier hiking destinations. With ample time in Torres del Paine, encounter the Perito Moreno Glacier and trek Glacier National Park before heading to the "end of the earth - Ushuaia".</p>

						<p class="w2"><b class="inner-heading">Itinerary:</b><br><br> 
						<z>Day 1:&nbsp</z><i>Buenos Aires:</i> Arrive at  Buenos Aires any time. Free time to explore the many attractions.<br><br>

						<z>Day 2:&nbsp</z><i>San Carlos de Bariloche:</i> In the morning fly to Bariloche. Free afternoon to explore. NEXT DAY Choose how you want to spend your free day to explore the countryside. Optional activities include hiking, mountain biking, and horseback riding.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>


						<z>Day 3:&nbsp</z><i>Puerto Varas:</i> Enjoy a free day in Puerto Varas. Optional activities include rafting, hiking, or exploring Chiloe Island.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>


						<z>Day 4:&nbsp</z><i>Torres del Paine National Park:</i> Embark on a 4-day excursion within Torres del Paine NP, hiking the famous 'W' Trek. Start the 62km (38.5 mi) route by trekking to the base of Las Torres to see the dramatic three towers and turquoise lagoon below.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>
						
						<z>Day 5:&nbsp</z><i>Torres del Paine National Park:</i> Wake up surrounded by breathtaking landscapes. After breakfast, continue hiking along the W route, crossing Paine River and passing through grassy fields. Stop at Lake Nordenskjold and snap a photo of the mountains reflecting in the lake before reaching the refuge.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>
						<z>Day 6-7:&nbsp</z><i>El Calafate/El Chalten:</i> Enjoy an included visit to Perito Moreno Glacier and marvel at its size and beauty, then travel by bus to El Chalten. Free time for optional walks. Free morning to enjoy optional activities like hiking Viedma glacier or Laguna Torre, horseback riding, and mountain biking. Drive back to El Calafate in the afternoon. <br>
						Meals included: Breakfast | Lunch | Dinner<br><br>
						<z>Day 8-9:&nbsp</z><i>Ushuaia/Buenos Aires:</i> Fly back to Buenos Aires for the final night. Opt to go to a tango and dinner show.<br>
						Meals included: Breakfast<br><br>
						</p>
						<p class="w2"><b class="inner-heading">What's Included:</b><br><br>
						1. Hikes<br>
						2. Guided tour<br>
						3. Boat cruise<br>
						4. Internal flights<br>
						5. All transport between destinations and to/from included activities.<br>
						6. ACCOMADATIONS: Hotels (12 nights), camping (2 nights).<br>
						</p>
						
						<p class="w2"><b class="inner-heading">Available Extras:</b><br><br>
						<z>My Own Room - $899.00</z><br>
						If you're travelling solo and would prefer to have your own private room throughout your trip, select this option during the online booking process.</p>
						
						<form  name="patagonia" action ="confirmbooking.php" onSubmit="return validation()" method="post" >
							<table class="packagetable">
								<tr>
									<td class="plan"><input  class="package" type="number" name="people" id="peeps"  placeholder="--Adults(16-40)--"></td>
								</tr>
									<td  class="plan"><n>Start Date:&nbsp</n>
										<select id="year_start"	 name="year_start" class="Packagedat" />
											<option value="0">yy</Option>				    
											<option>2016</option>      
											<option>2017</option>      
											<option>2018</option>   	
											<option>2019</option>
											<option>2020</option>
										 </select>
										  <select id="month_start" name="month_start" class="Packagedat"/>
											<option value="0">mm</Option>
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
										  <select id="day_start" name="day_start" class="Packagedat" />
											<option value="0">dd</Option>
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
									<td><input class="checkbox" type="Checkbox" name="ownroom"  id="ownroom"><checkboxtext>I want my Own Room</checkboxtext>
</td>			
								</tr>
								<tr>
									<td class="plan"><input class="button" type="submit" value="Book Now" class="button">
													<input class="button" type="Reset" value="Cancel" class="button"></td>
								</tr>				  
							</table>
						</form>
						
					</div>
					<div id="contents-package2" >
						 <img src="../images/Packages/PATAGONIA MAP.jpg" alt="Patagonia" >
						 <img src="../images/Packages/PATA 2.jpg" alt="Patagonia" >
						 <img src="../images/Packages/bariloche.jpg" alt="Patagonia" >
						 <img src="../images/Packages/torres del paine national park tours.jpg" alt="Patagonia" >
						 <img src="../images/Packages/torreshiking.jpg" alt="Patagonia" >
						 <img src="../images/Packages/elchalten.jpg" alt="Patagonia" >
						 <img src="../images/Packages/ushuaia.jpg" alt="Patagonia" >						 
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
	</body>
</html>