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
					
					if(endofearth.year_start.selectedIndex <=0)
					{
						alert("Please, select a  Year.");
						return (false);
					}
					if(endofearth.month_start.selectedIndex <=0)
					{
						alert("Please, select a Month.");
						return (false);
					}
					if(endofearth.day_start.selectedIndex <=0)
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
						<p class="w1" align="left"><b>End Of The Earth</b><br>
							<i >Duration:</i> 9 days/8 nights (approx.)<br>
							<i>Departs From:</i> Buenos Aires<br>
							<i>Returns To:</i> Buenos Aires <br>
							<i>After Discount:</i> <strike>$4499 </strike>&nbsp $3999<br><br></p>
						<?php $_SESSION['Price']=4499; $_SESSION['afterdiscount']=3999; $_SESSION['Packagename']='End Of The Earth'; ?>

						<p  class="w2"> Perfect for outdoor enthusiasts who want to experience one of the world's most pristine wilderness settings, this challenging 9 DAYS adventure packages the region's essential highlights into one incredible journey. Explore Torres del Paine, encounter the Perito Moreno Glacier and hike Glacier National Park. Prepare to be awed. </p>

						<p class="w2"><b class="inner-heading">Itinerary:</b><br><br> 
						<z>Day 1:&nbsp</z><i>Buenos Aires:</i> Arrive in Buenos Aires at any time. Arrival transfer included. Enjoy the sights and sounds of Argentina's capital city.<br><br>

						<z>Day 2:&nbsp</z><i>Buenos Aires/El Chalten:</i> Fly to El Calafate and continue by bus to El Chalten and Glacier National Park. En route marvel at the towering Andean mountains.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>


						<z>Day 3:&nbsp</z><i> El Chalten:</i> Enjoy an included full-day guided hike through the scenic terrain of lakes, tree covered trails and of course snow cover mountains. Including a glimpse of Monte Fitz Roy.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>


						<z>Day 4:&nbsp</z><i>Puerto Natales:</i> Travel by bus into Puerto Natales to prepare for the upcoming days of included hikes with expert mountain guides.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>
						
						<z>Day 5:&nbsp</z><i>Torres del Paine:</i> Cross lake Pehoe by ferry and trek to the French Valley, from the lookout point see the mountain range spread across the National Park. Take in the dramatic, contrasting greens and greys on the landscape.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>
						
						<z>Day 6:&nbsp</z><i>Punta Arenas:</i> Take a bus south to Punta Arenas and enjoy an orientation walk and take some free time in the evening to explore this charming city.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>
						
						<z>Day 7:&nbsp</z><i>Ushuaia:</i> From Punta Arenas cross into Argentina by bus, arriving in Ushuaia, 'the end of the earth'.
						Included boat cruise on the Beagle Channel to see penguins at Isla Martillo. Back on land there are various options, including bird watching, 4x4 rides, day hikes in Tierra del Fuego National Park, helicopter rides, and horseback riding.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>
						
						<z>Day 8:&nbsp</z><i>Ushuaia:</i> A free day to explore.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>
						
						<z>Day 9:&nbsp</z><i>Buenos Aires:</i> Fly to Buenos Aires. Opt for a tango show and dinner.<br>
						Meals included: Breakfast <br><br>
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
						
						<form  name="endofearth" action ="confirmbooking.php" onSubmit="return validation()" method="post" >
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
									<td><input class="checkbox" type="Checkbox" name="ownroom"  id="ownroom"><checkboxtext>I want my Own Room</checkboxtext></td>			
								</tr>
								<tr>
									<td class="plan"><input class="button" type="Submit" value="Book Now" class="button">
													<input class="button" type="Reset" value="Cancel" class="button"></td>
								</tr>				  
							</table>
						</form>
					</div>
					<div id="contents-package2" >
						 <img src="../images/Packages/END OF THE EARTH MAP.png" alt="END OF THE EARTH MAP" >
						 <img src="../images/Packages/El-Chalten-Mountain-Panorama.jpg" alt="El-Chalten-Mountain-Panorama" >
						 <img src="../images/Packages/El-Chalten-Town-Photo.jpg" alt="El-Chalten-Town-Photo" >
						 <img src="../images/Packages/Puerto+Natales.jpg" alt="Puerto+Natales" >
						 <img src="../images/Packages/torreshiking.jpg" alt="torreshiking" >
						 <img src="../images/Packages/Ferdinand-Magellan-route-punta-arenas.jpg" alt="Ferdinand-Magellan-route-punta-arenas" >
						 <img src="../images/Packages/punta arenas winter.jpg" alt="punta arenas winter" >						 
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