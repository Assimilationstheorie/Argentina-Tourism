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
					
					if(antartica.year_start.selectedIndex <=0)
					{
						alert("Please, select a  Year.");
						return (false);
					}
					if(antartica.month_start.selectedIndex <=0)
					{
						alert("Please, select a Month.");
						return (false);
					}
					if(antartica.day_start.selectedIndex <=0)
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
						<p class="w1" align="left"><b>Discover&nbsp Antarctica</b><br>
							<i >Duration:</i> 12 days/11 nights (approx.)<br>
							<i>Departs From:</i> Montevideo<br>
							<i>Returns To:</i> Ushuaia <br>
							<i>After Discount:</i> <strike>$10112 </strike>&nbsp $8000<br><br></p>
							<?php $_SESSION['Price']=10112; $_SESSION['afterdiscount']=8000; $_SESSION['Packagename']='Discover Antarctica'; ?>
						<p  class="w2"> Challenge. Desolation. Unlimited wonder. It's not difficult to grasp what attracted the great explorers to Antarctica. Down here, you'll explore the Falkland Islands, encounter abandoned whaling stations on South Georgia Island, and pay your respects at Shackleton's grave. Elsewhere, you'll catch up with penguins (king, chinstrap, and gentoo varieties) and learn all about them through daily lectures, get close to whales and cavorting seals from a Zodiac boat, and keep an eye peeled for towering icebergs and massive glaciers. Prepare to be astonished.</p>

						<p class="w2"><b class="inner-heading">Itinerary:</b><br><br> 
						<z>Day 1:&nbsp</z><i>Montevideo:</i> Arrive in Montevideo at any time. Arrival transfer included. Enjoy the sights and sounds of Uruguay's capital city.<br><br>

						<z>Day 2:&nbsp</z><i>South Atlantic Ocean:</i> Embarkation on the G Expedition begins in the afternoon at the port of Montevideo.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>


						<z>Day 3-5:&nbsp</z><i>Falkland Islands (Islas Malvinas):</i> With course set southeast, become acquainted with the ship. Enjoy the lecture and educational sessions about the extraordinary human and natural history of the Antarctic region.
						The Falkland Islands provide a rare opportunity to witness the biological diversity and extraordinary scenery of the southern islands. Penguins and albatross are abundant here.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>


						<z>Day 6-8:&nbsp</z><i>South Georgia:</i> With course set for South Georgia, Look out for the many whales that inhabit these waters.
						Home to many interesting sites , South Georgia has several former whaling stations and boasts plenty of wildlife.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>
						
						<z>Day 9-11:&nbsp</z><i>Drake Passage and South Shetland Islands (THE ANTARTIC PENINSULA):</i> Experience some of the most unique wildlife and awe-inspiring scenery in the South Shetland Islands, just north of the Antarctic Peninsula. Attempt two shore landings per day, and encounter gentoo, chinstrap, and Adelie penguin rookeries; Weddell, crabeater, and leopard seals; and orca, humpback, and minke whales in the cold Antarctic waters.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>
						
						<z>Day 12:&nbsp</z><i>Ushuaia:</i> Reflect on a memorable adventure and take in some final lectures en route to Ushuaia. Keep a careful look out for a last chance to spot whales.<br>
						Meals included: Breakfast | Lunch | Dinner<br><br>
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
						
						<form  name="antartica" action ="confirmbooking.php" onSubmit="return validation()" method="post" >
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
									<td class="plan"><input class="button" type="submit" value="Book Now" class="button">
													<input class="button" type="Reset" value="Cancel" class="button"></td>
								</tr>				  
							</table>
						</form>
					</div>
					<div id="contents-package2" >
						 <img src="../images/Packages/antarcticaPENINSULA.jpg" alt="THE ANTARTIC PENINSULA" >
						 <img src="../images/Packages/itinerary_lg_Drakes-Passage_N9A8786(woah).jpg" alt="Drakes-Passage" >
						 <img src="../images/Packages/itinerary_lg_Cierva-Cove_1N9A5650-Lg-RGB.jpg" alt="Cierva-Cove" >
						 <img src="../images/Packages/itinerary_lg_Expedition_Ship1N9A1835_Lg_RGB.jpg" alt="Expedition_Ship" >
						 <img src="../images/Packages/antarctica.jpg" alt="antartica" >
						 <img src="../images/Packages/southgeorgia.jpg" alt="Iguazu-night" >
						 <img src="../images/Packages/ushuaia1.jpg" alt="Paratay Beaches" >						 
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