<html>
	<head>
		<title>SIGN UP!</title>
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<link href="css/menu.css" type="text/css" rel="stylesheet">		
		<style>
			/*Content part in sign up form*/	
			#content-signup1
			{
				height:  576px;
				width:    600px;
				//background-color: yellow ;	
				float:left;
			}
			#content-signup2
			{
				height:  576px;
				width:    600px;
				background-color: #c0c0c0 ;	
				float:left;
			}
			
			/*Within content a part for submit button*/
			#content-button
			{
				height:  144px;
				width:    1200px;
				background-color: #c0c0c0 ;	
				float:left;
			}			
			Select Option #nil{color:#c0c0c0;}
			.indicate{
				font-size:15px;
				color:red;
				margin-left:10px;
				margin-bottom:5px;
				float:left;
			}
			#contents{
				height:800px;
			}
		</style>

			<Script type="text/Javascript">
				function validation()
				{
				
					var RE_UID= /^(\w)+$/;
					var RE_PASS= /^(\w)+$/;
					var RE_NAME= /^[A-Za-z]+$/;
					var RE_CONTACTNO= /^\d{10,11}$/;
					var RE_EMAIL= /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
					var RE_STATE= /^[A-Za-z ]+$/;
					var RE_PIN= /^\d{6,6}$/;
				
				
				
				var fn1=document.getElementById("fnm").value;
					if( fn1=="" )
					{
						alert("First Name can not be Blank");
						return false;
					}
					if(!RE_NAME.test(fn1))
					{
						alert("Give a valid First Name");
						return(false);
					}
					var ln1=document.getElementById("lnm").value;
					if( ln1=="" )
					{
						alert("Last Name can not be Blank");
						return false;
					}
					if(!RE_NAME.test(ln1))
					{
						alert("Give a valid Last Name");
						return(false);
					}
				
				 
					if(signup.coun.selectedIndex <=0)
					{
						alert("Please, select a Country.");
						return (false);
					}
					
					var state=document.getElementById("st").value;
					if( state=="" )
					{
						alert(" State can not be Blank");
						return false;
					}
					if(!RE_STATE.test(state))
					{
						alert("Enter a valid State Name");
						return(false);
					}
					
					var city=document.getElementById("ct").value;
					if( city=="" )
					{
						alert(" City can not be Blank");
						return false;
					}
					if(!RE_STATE.test(city))
					{
						alert("Enter a valid City Name");
						return(false);
					}
					
					var pin=document.getElementById("pn").value;
					if( pin=="" )
					{
						alert(" Pin Code can not be Blank");
						return false;
					}
					if(!RE_PIN.test(pin))
					{
						alert("Pin Code must be 6 digits");
						return(false);
					}
					
					var mobile=document.getElementById("mb").value;
					if( mobile=="" )
					{
						alert("Mobile number can not be Blank");
						return false;
					}
					if(!RE_CONTACTNO.test(mobile))
					{
						alert("Mobile No should be numerals with less than 11 digits.");
						return(false);
					}
					
				var e1=document.getElementById("em").value;
					if( e1=="" )
					{
						alert("Email id can not be Blank");
						return false;
					}
					if(!RE_EMAIL.test(e1))
					{
						alert("Email should be email validation.");
						return(false);
					}
				
				
				
				
				
				
				
				
				
					var u1=document.getElementById("ud").value;
					if( u1=="" )
					{
						alert(" User ID can not be Blank");
						return false;
					}
					if(!RE_UID.test(u1))
					{
						alert("Username has to be alphanumeric.");
						return(false);
					}
					
					var p1=document.getElementById("pd").value;
					if( p1=="" )
					{
						alert(" Password can not be Blank");
						return false;
					}
					if(!RE_PASS.test(p1))
					{
						alert("Password has to be alphanumeric.");
						return(false);
					}
					
					var p2=document.getElementById("cpd").value;
					if( p2=="" )
					{
						alert(" Confirm Password can not be Blank");
						return false;
					}
					
					if(p1!=p2)
					{
						alert("Confirm password should match with the new password.")
					}
					
					
					
				}
			</script>		
	</head>
	<body>
	
		<center>
			<div id="top-fixed">
					<div id="nav">
						<ul>
							<li><a href="PlanYourTrip/Hotel.php">PLAN YOUR TRIP</a></li>					
							<li class="dropdown">
								<a href="#" class="dropbtn">EXPLORE</a>						
								<div class="dropdown-content">
									<a href="Home.php#c2">Virtual Argentina</a>
									<a href="Explore/Attractions.php">Attractions</a>
									<a href="Explore/Beaches.php">Beaches</a>
									<a href="Explore/Hills.php">Hills</a>
									<a href="Explore/shopping.php">Shopping</a>
									
									<a href="Explore/Sports.php">Sports</a>
								</div>
							</li>					
							<li><a href="Events/January.php">EVENTS</a></li>
							<li><a href="Gallery.php">GALLERY</a></li>
							<li><a href="About.php">ABOUT</a></li>
							<li><a href="Contact.php">CONTACT</a></li>
						</ul>
					</div>
					<div id="user">
						<a href="Login.php">LOGIN</a><a> | </a>
						<a href="SignUp.php">SIGN UP</a>					
					</div>				
			</div>	
			<div id="wrapper">										
				<div id="header">
					<div id="header-logo"></div>					
					<div id="header-title" align="left">
						<a class="title" href="Home.php"><h1>LA&nbsp ARGENTINE&nbsp TURISMO</h1></a>	
					</div>														
				</div>		
				
				<div id="contents">
					<div id="content-heading"><b><u>Register Yourself</u></b></div>
						<div id="content-signup1">			
							<form  name="signup" action ="ConnectSignUp.php" onSubmit="return validation()" method="post" >
							<table>
								<tr>								
									<td><input type="text" name="fnme" id="fnm" placeholder="First Name" ><m>*</m></td>
								</tr>							
								<tr>
									
									<td><Select name="coun">
										<Option id="nil" value="0">--Select a Country--<m>*</m></Option>
										<Option value="india">India</Option>
										<Option value="Brazil">Brazil</Option>
										<Option value="Chile">Chile</Option>
										<Option value="England">England</Option>
										<Option value="sydney">Sydney</Option>
										<Option value="Peru">Peru</Option>
									</td>
								</tr>
								<tr>								
									<td><input type="text" name="city" id="ct" placeholder="City"><m>*</m></td>
								</tr>
								<tr>							
									<td><textarea rows="5" cols="20" name="address" id="add" placeholder="Address" ></textarea></td>
								</tr>							
								<tr>								
									<td><input type="text" name="mob" id="mb" placeholder="Mobile No"><m>*</m></td>
								</tr>
								<tr>								
									<td><input type="text" name="eml" id="em" placeholder="Email ID"><m>*</m></td>
								</tr>							
								<tr>							
									<td><input type="password" name="pwd" id="pd" placeholder="New Password"><m>*</m></td>
								</tr>							
							</table>	
						
						</div>
						<div id="content-signup2">
						
							<table>
							
								<tr>								
									<td><input type="text" name="lnme" id="lnm" placeholder="Last Name"></td>
								</tr>							
								<tr>								
									<td><input type="text" name="state" id="st" placeholder="State"><m>*</m></td>
								</tr>								
								<tr>								
									<td><input type="text" name="dist" id="dis" placeholder="District"></td>
								</tr>							
								<tr>								
									<td><input type="text" name="pin" id="pn" placeholder="Pin Code"><m>*</m></td>
								</tr>
								<tr>								
									<td><input type="text" name="pho" id="ph" placeholder="Phone No"></td>
								</tr>
								<tr>									
										<td><input type="text" name="uid" id="ud" placeholder="User ID"><m>*</m></td>
								</tr>
								<tr>
									<td><input type="password" name="cpwd" id="cpd" placeholder="Confirm Password"><m>*</m></td>
								</tr>
							</table>
						</div>
						<div id="content-button">							
							<table>
								<center>
									<tr>
										<td><input class="btn" type="Submit" value="Register">
											<input class="btn" type="Reset" value="Cancel">
										</td>
									</tr>					
									<tr>
										<td class="link">Already Registered?<a href="login.php">Login!</a></td>
									</tr>
								</center>
							</table>								
							<p class="indicate">* indicates required fields</p>					
						</div>
					</form>
				</div>
				<div id="footer">
					<div id="footer1">
						<a href="Home.php">Home</a><a> | </a>
						<a href="PlanYourTrip/Hotel.php">Plan Your Trip</a><a> | </a>
						<a href="Explore/Attractions.php">Explore</a><a> | </a>
						<a href="Events/January.php">Events</a><a> | </a>
						<a href="Gallery.php">Gallery</a><a> | </a>
						<a href="About.php">About Us</a><a> | </a>
						<a href="Contact.php">Contact Us</a><a> | </a>
						<a href="Login.php">Login</a><a> | </a>
						<a href="SignUp.php">SignUp</a>		
					</div>
					<div id="footer2">
						<a href="Others/TermsConditions.php">Terms & Conditions</a><a> | </a>						
						<a href="Others/Feedback.php">Feedback</a><a> | </a>
						<a href="Others/Faq.php">FAQ</a><a> | </a>					
						<a href="Others/Links.php">Useful Links</a><a> | </a>
						<a href="Others/Site.php">Site Map</a>
					</div>
					<p>© 2016 Argentina Tourism Board. All rights reserved. | Developed by Webtek Students.</p>				
				</div>
			</div>
		</center>			
	</body>
</html>
<head>