<?php

session_start();
if(!isset($_SESSION["username"]))
{
	echo '
<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="stylesheet.css" type="text/css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
		<script src="myjavascript.js"></script>
		<script src="jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="FA/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#memberlogin").click(function(){
				$("#myModal1").modal();
			});
			
			$("#signupmember").click(function(){
				$("#myModal2").modal();
			});
			
			$("#staff").click(function(){
				$("#myModal3").modal();
			});
			
			$("#staffsignup").click(function(){
				$("#myModal4").modal();
			});
			
			$("#admin_login").click(function()
			{
				$("#myModal5").modal();
			});
			
			$(".warning_sign_up").click(function()
			{
				alert("Please Sign Up as Customer for more details.");
			});
		});
		</script>
		
		<script>
		
		</script>

	</head>
	
	<body style="height:100%,width:100%;">
		<div id="header"> 
			<img class="img-circle" id="logo" src="images/logo.png">
			<img class="img-thumbnail" id="logo" src="images/img101.jpg">
			<img class="img-thumbnail" id="logo" src="images/img102.jpg">
			<img class="img-thumbnail" id="logo" src="images/img103.jpg">
			<button class="btn-info" id="memberlogin">Member Login</button>
			<button class="btn-info" id="staff">Staff</button>
				
				
				<!--Login Modal code-->
				<div class="container">
					<!-- Trigger the modal with a welcome button -->
					<!-- Modal -->
					<div class="modal fade" id="myModal1" role="dialog">
						<div class="modal-dialog">
					
						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Customer Login</h4>
								</div>
								<form>
								<div class="modal-body">
										<div class="form-group">
											<label for="username">Username</label>
											<input type="email" class="form-control" id="c_email_customer">
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="c_password_customer">
										</div>
								</div>
								<div class="modal-footer">
									<p id="login_status"></p>
									<button type="button" class="btn btn-default" onclick="customer_login()">Login</button>
								</div>
								</form>
								<p>Not member yet, <button class="btn-primary" id="signupmember">Sign Up</button> here.</p>
							</div>
						</div>
				  </div>
				</div>
				
				<!--SignUp Modal code-->
				<div class="container">
					<!-- Trigger the modal with a welcome button -->
					<!-- Modal -->
					<div class="modal fade" id="myModal2" role="dialog">
						<div class="modal-dialog">
					
						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Customer Signup</h4>
								</div>
								<form method="post" action="action.php">
								<div class="modal-body">
										<div class="form-group">
											<label for="firstname">Firstname</label>
											<input type="text" class="form-control" id="c_firstname">
										</div>
										<div class="form-group">
											<label for="lastname">Lastname</label>
											<input type="text" class="form-control" id="c_lastname">
										</div>
										<div class="form-group">
											<input type="radio" name="c_gender" id="c_male" value="male">Male
											<input type="radio" name="c_gender" id="c_female" value="female">Female
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="c_email" class="form-control" id="c_email">
										</div>
										<div class="form-group">
											<label for="Mobile No.">Mobile</label>
											<input type="text" class="form-control" id="c_mobile">
										</div>
										<div class="form-group">
											<label for="username">Date of birth</label>
											<input type="email" class="form-control" id="c_dob">
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="c_password">
										</div>
										<div class="form-group">
											<label for="confirmpassword">Confirm Password</label>
											<input type="password" class="form-control" id="c_confirmpassword">
										</div>
								</div>
								<div class="modal-footer">
									<p id="signup_status"></p>
									<button type="button" class="btn btn-default" onclick="customer_registration()">Sign Up</button>
								</div>
								</form>
							</div>
						</div>
				  </div>
				</div>
			
			
				<!--Member Login Modal-->
				<!--Login Modal code-->
				<div class="container">
					<!-- Trigger the modal with a welcome button -->
					<!-- Modal -->
					<div class="modal fade" id="myModal3" role="dialog">
						<div class="modal-dialog">
					
						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title" style="float:left;">Employee Login</h4><button class="btn-default" id="admin_login" style="background-color:none;border:none;float:right;"><img src="images/admin.jpg" style="height:30px;width:30px;"></button>
								</div>
								<form>
								<div class="modal-body">
										<div class="form-group">
											<label for="username">Username</label>
											<input type="email" class="form-control" id="e_email_employee">
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="e_password_employee">
										</div>
								</div>
								<div class="modal-footer">
									<p id="emp_login_status"></p>
									<button type="button" class="btn btn-default" onclick="employee_login()">Login</button>
								</div>
								</form>
								<p>Not signed up as employee yet, <button class="btn-primary" id="staffsignup">Sign Up</button> here.</p>
							</div>
						</div>
				  </div>
				</div> 
							
				<!--Modal code-->
				<div class="container">
					<!-- Trigger the modal with a welcome button -->
					<!-- Modal -->
					<div class="modal fade" id="myModal4" role="dialog">
						<div class="modal-dialog">
					
						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Employee Signup</h4>
								</div>
								<form>
								<div class="modal-body">
										<div class="form-group">
											<label for="firstname">Firstname</label>
											<input type="text" class="form-control" id="e_firstname">
										</div>
										<div class="form-group">
											<label for="lastname">Lastname</label>
											<input type="text" class="form-control" id="e_lastname">
										</div>
										<div class="form-group">
											<input type="radio" name="e_gender" id="e_male" value="male">Male
											<input type="radio" name="e_gender" id="e_female" value="female">Female
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control" id="e_email">
										</div>
										<div class="form-group">
											<label for="Mobile No.">Mobile</label>
											<input type="text" class="form-control" id="e_mobile">
										</div>
										<div class="form-group">
											<label for="username">Date of birth</label>
											<input type="email" class="form-control" id="e_dob">
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="e_password">
										</div>
										<div class="form-group">
											<label for="confirmpassword">Confirm Password</label>
											<input type="password" class="form-control" id="e_confirmpassword">
										</div>
								</div>
								<div class="modal-footer">
									<p id="emp_signup_status"></p>
									<button type="button" class="btn btn-default" onclick="employee_registration()">Sign Up</button>
								</div>
								</form>
							</div>
						</div>
				  </div>
				</div>
				
				
				<!--Admin Login Modal code-->
				<div class="container">
					<!-- Trigger the modal with a welcome button -->
					<!-- Modal -->
					<div class="modal fade" id="myModal5" role="dialog">
						<div class="modal-dialog">
					
						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Admin Login</h4>
								</div>
								<form>
								<div class="modal-body">
										<div class="form-group">
											<label for="username">Admin Username</label>
											<input type="email" class="form-control" id="admin_username">
										</div>
										<div class="form-group">
											<label for="password">Admin Password</label>
											<input type="password" class="form-control" id="admin_password">
										</div>
								</div>
								<div class="modal-footer">
									<p id="admin_login_status"></p>
									<button type="button" class="btn btn-default" onclick="admin_login()">Master Login</button>
								</div>
								</form>
							</div>
						</div>
				  </div>
				</div>
				
		</div>
		
		<div id="menu">
			<nav class="navbar navbar-inverse"> <!--try navbar-default-->
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li class="active"><a href="#">AT A GLANCE <span class="sr-only">(current)</span></a></li>
						
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ROOMS <span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="#" class="warning_sign_up">AC ROOMS</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#" class="warning_sign_up">NON AC ROOMS</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#" class="warning_sign_up">HONEYMOON SUITE</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#" class="warning_sign_up">SUNSET SUITE</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#" class="warning_sign_up">PRIMROSE SUITE</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#" class="warning_sign_up">MEETING ROOM</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DINING<span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="#" class="warning_sign_up">DINING</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#" class="warning_sign_up">AQUARIUS</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#" class="warning_sign_up">HALL</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#" class="warning_sign_up">BUFFET</a></li>
						</ul>
						</li>
						<li><a href="#" class="warning_sign_up">MEETINGS &amp; EVENTS<span class="sr-only">(current)</span></a></li>
						<li><a href="#" class="warning_sign_up">GALLERY<span class="sr-only">(current)</span></a></li>
					  </ul>
					  <form class="navbar-form navbar-right">
						<div class="form-group"">
						  <input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					  </form>
					  
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
		
		<div id="sliderdiv">
			<div class="container" id="sliderimagebackground" style="width:98%;">
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				  <li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				  <div class="item active">
					<img src="images/hotelimage.jpg" alt="hotelimage" width="600px" height="450px">
				  </div>

				  <div class="item">
					<img src="images/hotelimage1.jpg" alt="hotelimage" width="600%" height="450%">
				  </div>
				
				  <div class="item">
					<img src="images/hotelimage2.jpg" alt="hotelimage" width="600px" height="450px">
				  </div>

				  <div class="item">
					<img src="images/hotelimage3.jpg" alt="hotelimage" width="600px" height="450px">
				  </div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
			</div>
		</div>
		
		<!-- <div class="container" id="check_availability" style="margin-top:50px;">
			<h2 align="center">CHECK AVAILIBILITY</h2>
			<div class="form-group row"  style="background-color:#E5E7E9">
				<div class="col-xs-10" style="margin:50px 0px 50px 100px;">
					<input class="form-control" type="datetime-local" value="2011-08-19" id="">
				</div>
			</div>
		</div> -->
		
		
		<div class="container" id="ataglance" style="margin-top:50px;">
			<h2 align="center">AT A GLANCE</h2>
			<div class="row">
				<div class="col-xs-2" style="border:right;"></div>
				<div class="col-xs-8" style="text-align:center;border-left:1px solid black;border-right:1px solid black;"><p>Experience true grandeur at The Amigo Palace, 
				the iconic sea-facing landmark in Marine Lines, Mumbai.This flagship Taj hotel offers you splendid 
				views of the Arabian Sea and Gateway of India, alongside refined century-old hospitality.</p></div>
				<div class="col-xs-2" style="border:left;border-color:black;"></div>
			</div>
		</div>
		
		<div class="container" id="experience" style="margin-top:50px;">
			<h2 align="center">EXPERIENCE THE AMIGO HOTEL, MUMBAI</h2>
			<div class="row">
				<div class="col-xs-4" align="center"><img class="img-rounded" alt="History Amigo" src="images/historyamigo.jpg">
					<h3>HISTORY &amp; ARCHITECTURE</h3>
					<p>This architectural wonder is Mumbai’s first harbour 
					landmark and hosts the city’ first licensed bar.</p>
					<button class="btn-primary warning_sign_up">READ MORE&gt;&gt;
					</button>
				</div>
				<div class="col-xs-4" align="center"><img class="img-rounded" alt="Kids At Amigo" src="images/kidsatamigo.jpg">
					<h3>KIDS @ AMIGO</h3>
					<p>We provide a range of bespoke creatively stimulating 
					activities, for happy kids and happy you!</p>
					<button class="btn-primary warning_sign_up">READ MORE&gt;&gt;
					</button></div>
				<div class="col-xs-4" align="center"><img class="img-rounded" alt="Heritage Amigo" src="images/heritageamigo.jpg">
					<h3>HERITAGE WALK</h3>
					<p>We take you on a historic walk through the hotel where 
					every pillar tells a story.</p>
					<button class="btn-primary warning_sign_up">READ MORE&gt;&gt;
					</button></div>
			</div>
		</div>
		
		<div class="container" id="hotel_facilities" style="margin-top:50px;">
			<h2 align="center">HOTEL AMENITIES & FACILITIES</h2>
			<div class="row">
				<div class="col-xs-3" style="border:right;">
				<div class="list-item">
				<h4>Hotel Facilities</h4>       
					<ul>      	
						<li><span>Luxurious rooms &amp; suites with iconic Arabian Sea &amp; Gateway of India views</span></li>
						<li><span>Options of smoking &amp; non-smoking accommodation</span></li>
						<li><span>Marble bathrooms with luxury bath amenities OR Five-fixture bathrooms with luxury bath amenities</span></li>
						<li><span>Complimentary Wi-Fi for resident guests</span></li>
						<li><span>Fine-dining speciality restaurants—Wasabi by Morimoto (Japanese), Golden Dragon (Chinese), Masala Kraft (Contemporary Indian) &amp; Souk (Eastern Mediterranean) </span></li>
						<li><span>Shamiana, 24-hour multi-cuisine coffee shop</span></li>
						<li><span>Aquarius, poolside restaurant for resident guests</span></li>
						<li><span>La Patisserie</span></li>
						<li><span>Harbour Bar</span></li>
						<li><span>Sea Lounge</span></li>
						<li><span>24-hour in-room dining</span></li>
						<li><span>Apollo Lounge</span></li>
					</ul>
				</div>
				</div>
            
            
				<div class="col-xs-6" style="min-height:570px;border-left:1px solid black;border-right:1px solid black;"><div class="list-item">
				<h4>Wellness Amenities</h4>
					<ul>
						<li><span>Jiva Spa</span></li>
						<li><span>Amigo Salon</span></li>
						<li><span>Large outdoor pool</span></li>
						<li><span>24-hour fitness centre with Technogym equipment</span></li>
						<li><span>24-hour on-call doctor &amp; nurse</span></li>
						<li><span>Facilities for the disabled</span></li>
					</ul>   
				</div>
				</div>
				<div class="col-xs-3" style="border:left;border-color:black;">
				<div class="list-item">
				<h4>OTHER CONVENIENCES</h4>
					<ul>
						<li><span>Central location in South Mumbai</span></li>
						<li><span>Located an hour away from the domestic &amp; international airports</span></li>
						<li><span>24-hour business centre, with seven meeting rooms fully equipped with modern conferencing facilities, high-speed Wi-Fi, secretarial assistance, interpretation facilities &amp; workstations</span></li>
						<li><span>Palace rooms, with access to Palace Lounge, butler service &amp; other facilities</span></li>
						<li><span>Valet parking facility</span></li>
						<li><span>Golden Keys Concierge &amp; multilingual staff</span></li>
						<li><span>Travel desk, car rental services, currency exchange, safe deposit lockers &amp; 24-hour laundry</span></li>
						<li><span>Kids@Taj programmes &amp; baby-sitting services for young guests</span></li>
						<li><span>Heritage walks for resident guests  City tours on request</span></li>
					</ul>
				</div>				
				</div>
			</div>
		</div>
		
		<div class="container" id="footer"> 
			
			<div class="nav navbar-inverse foot">
				<div class="container-fluid text-center">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Contact Us:</h4>
					<p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;help.service_care@amigo.com</p>
					<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;1800-987-111(toll-free)</p>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Location Address : </h4>
					<p>Tower Amigo, Marine Lines(W), Mumbai-400001</p>
				</div>
				 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Follow Us:</h4>
					<a href="#" class="sm_button" id="fb_button" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
					<a href="#" class="sm_button" id="twitter_button"><i class="fa fa-twitter-square fa-2x"></i></a>
					<a href="#" class="sm_button" id="youtube_button" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a>
					<a href="#" class="sm_button" id="instagram_button"><i class="fa fa-instagram fa-2x"></i></a>
				  </div>
				</div>
				<div class="row">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="frontpage.html">Home</a></li>
						<li><a href="#">FAQs</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Career</a></li>
					</ol>
				  </div>
				</div>
				<div class="row" style="margin-top:20px;">
				<div class="col-lg-12"><p style="color:#b3b3b3;">&copy;2016 AMIGO ALL RIGHTS RESERVED</p></div>
				</div>
			  </div>
		 </div>
			
		</div>
	</body>
</html> ';
}
else if(isset($_SESSION['username']) && $_SESSION['type']=="customer")
{
echo '
<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="stylesheet.css" type="text/css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
		<script src="myjavascript.js"></script>
		<script src="jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="FA/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
		<script>
			
		</script>
				

	</head>
	
	<body style="height:100%,width:100%;">
		<div id="header"> 
			<img class="img-circle" id="logo" src="images/logo.png">
			<img class="img-thumbnail" id="logo" src="images/img101.jpg">
			<img class="img-thumbnail" id="logo" src="images/img102.jpg">
			<img class="img-thumbnail" id="logo" src="images/img103.jpg">
			<a href="logout.php"><button class="btn-danger" id="logout">Logout</button></a>
			<div id="login_token" style="float:right;margin:40px 10px 0px 0px;">Hii..
			';
			echo $_SESSION["username"];
			echo '</div>
		</div>
		<div id="customer_details">
			<nav class="navbar navbar-inverse" style="background-color:black !important;"> <!--try navbar-default-->
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav" >
						<li><button class="btn-default" id="customer_profile">Profile</button></li>
						<li><button class="btn-default" id="customer_room">Room Availability</button></li>
						<li><button class="btn-default" id="customer_extra_services">Extra Services</button></li>
						<li><button class="btn-default" id="customer_feedback">Feedback</button></li>
					  </ul>
					  <form class="navbar-form navbar-right">
						<div class="form-group">
						  <input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					  </form>
					  
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
		
		<div id="customer_details_body" >
		<script>
		$(document).ready(function(){
			var val=0;
			$("#customer_profile").click(function(){
				val=1;
				$("#customer_details_body").load("customer_profile.php");
			});
			
			$("#customer_room").click(function(){
				val=1;
				$("#customer_details_body").load("customer_room.php");
			});
			
			$("#customer_extra_services").click(function(){
				val=1;
				$("#customer_details_body").load("customer_extra_services.php");
			});
			
			$("#customer_feedback").click(function(){
				val=1;
				$("#customer_details_body").load("customer_feedback.php");
			});
			if(val==0)
			{
				$(document).ready(function(){
					$("#customer_details_body").load("customer_profile.php");
				});
			}
		});
		</script>
		</div>
		
		<div class="container" id="footer"> 
			
			<div class="nav navbar-inverse foot">
				<div class="container-fluid text-center">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Contact Us:</h4>
					<p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;help.service_care@amigo.com</p>
					<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;1800-987-111(toll-free)</p>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Location Address : </h4>
					<p>Tower Amigo, Marine Lines(W), Mumbai-400001</p>
				</div>
				 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Follow Us:</h4>
					<a href="#" class="sm_button" id="fb_button" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
					<a href="#" class="sm_button" id="twitter_button"><i class="fa fa-twitter-square fa-2x"></i></a>
					<a href="#" class="sm_button" id="youtube_button" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a>
					<a href="#" class="sm_button" id="instagram_button"><i class="fa fa-instagram fa-2x"></i></a>
				  </div>
				</div>
				<div class="row">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="frontpage.html">Home</a></li>
						<li><a href="#">FAQs</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Career</a></li>
					</ol>
				  </div>
				</div>
				<div class="row" style="margin-top:20px;">
				<div class="col-lg-12"><p style="color:#b3b3b3;">&copy;2016 AMIGO ALL RIGHTS RESERVED</p></div>
				</div>
			  </div>
		 </div>
			
		</div>
	</body>
</html>
';
}
else if(isset($_SESSION['username']) && $_SESSION['type']=="employee")
{
	echo '
<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="stylesheet.css" type="text/css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
		<script src="myjavascript.js"></script>
		<script src="jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="FA/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
		<script>
		
		
		</script>
		
		<script>
		
		</script>

	</head>
	
	<body style="height:100%,width:100%;">
		<div id="header"> 
			<img class="img-circle" id="logo" src="images/logo.png">
			<img class="img-thumbnail" id="logo" src="images/img101.jpg">
			<img class="img-thumbnail" id="logo" src="images/img102.jpg">
			<img class="img-thumbnail" id="logo" src="images/img103.jpg">
			<a href="logout.php"><button class="btn-danger" id="logout">Logout</button></a>
			<div id="login_token" style="float:right;margin:40px 10px 0px 0px;">Hii..
			';
			echo $_SESSION["username"];
			echo '</div>
		</div>
		<div id="employee_details">
			<nav class="navbar navbar-inverse" style="background-color:black !important;"> <!--try navbar-default-->
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li><button class="btn-default" id="employee_profile">Profile</button></li>
						<li><button class="btn-default" id="employee_salary">Salary Details</button></li>
						<li><button class="btn-default" id="employee_benefit">Benefit Details</button></li>
						<li><button class="btn-default" id="employee_attendance">Attendance Details</button></li>
					  </ul>
					  <form class="navbar-form navbar-right">
						<div class="form-group">
						  <input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					  </form>
					  
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
		<div id="employee_details_body">
			<script>
			var val=0;
			$(document).ready(function(){
			$("#employee_profile").click(function(){
				$("#employee_details_body").load("employee_profile.php");
			});
			
			$("#employee_salary").click(function(){
				$("#employee_details_body").load("employee_salary.php");
			});
			
			$("#employee_benefit").click(function(){
				$("#employee_details_body").load("employee_benefit.php");
			});
			
			$("#employee_attendance").click(function(){
				$("#employee_details_body").load("employee_attendance.php");
			});
			if(val==0)
			{
				$(document).ready(function(){
					$("#employee_details_body").load("employee_profile.php");
				});
			}
		});
		</script>
		</div>
		
		<div class="container" id="footer"> 

			<div class="nav navbar-inverse foot">
				<div class="container-fluid text-center">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Contact Us:</h4>
					<p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;help.service_care@amigo.com</p>
					<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;1800-987-111(toll-free)</p>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Location Address : </h4>
					<p>Tower Amigo, Marine Lines(W), Mumbai-400001</p>
				</div>
				 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Follow Us:</h4>
					<a href="#" class="sm_button" id="fb_button" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
					<a href="#" class="sm_button" id="twitter_button"><i class="fa fa-twitter-square fa-2x"></i></a>
					<a href="#" class="sm_button" id="youtube_button" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a>
					<a href="#" class="sm_button" id="instagram_button"><i class="fa fa-instagram fa-2x"></i></a>
				  </div>
				</div>
				<div class="row">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="frontpage.html">Home</a></li>
						<li><a href="#">FAQs</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Career</a></li>
					</ol>
				  </div>
				</div>
				<div class="row" style="margin-top:20px;">
				<div class="col-lg-12"><p style="color:#b3b3b3;">&copy;2016 AMIGO ALL RIGHTS RESERVED</p></div>
				</div>
			  </div>
		 </div>
		
		</div>
	</body>
</html>"
';
}
else if(isset($_SESSION['username']) && $_SESSION['type']=="admin")
{
	echo '
<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="stylesheet.css" type="text/css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
		<script src="myjavascript.js"></script>
		<script src="jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="FA/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
		<script>
		
		
		</script>
		
		<script>
		
		</script>

	</head>
	
	<body style="height:100%,width:100%;">
		<div id="header"> 
			<img class="img-circle" id="logo" src="images/logo.png">
			<img class="img-thumbnail" id="logo" src="images/img101.jpg">
			<img class="img-thumbnail" id="logo" src="images/img102.jpg">
			<img class="img-thumbnail" id="logo" src="images/img103.jpg">
			<a href="logout.php"><button class="btn-danger" id="logout">Logout</button></a>
			<div id="login_token" style="float:right;margin:40px 10px 0px 0px;">Hii..
			';
			echo $_SESSION["username"];
			echo '</div>
		</div>
		<div id="admin_details">
			<nav class="navbar navbar-inverse" style="background-color:black !important;"> <!--try navbar-default-->
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li><button class="btn-default" id="admin_profile">Profile</button></li>
						<li><button class="btn-default" id="admin_add_employee">Add Employee</button></li>
						<li><button class="btn-default" id="admin_remove_employee">Remove Employee</button></li>
						<li><button class="btn-default" id="admin_add_training_programs">Add Training Programs</button></li>
					  </ul>
					  <form class="navbar-form navbar-right">
						<div class="form-group">
						  <input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					  </form>
					  
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
		<div id="admin_details_body">
			<script>
			var val=0;
			$(document).ready(function(){
			$("#admin_profile").click(function(){
				val=1;
				$("#admin_details_body").load("admin_profile.php");
			});
			
			$("#admin_add_employee").click(function(){
				val=1;
				$("#admin_details_body").load("admin_add_employee.php");
			});
			
			$("#admin_remove_employee").click(function(){
				val=1;
				$("#admin_details_body").load("admin_remove_employee.php");
			});
			
			$("#admin_add_training_programs").click(function(){
				val=1;
				$("#admin_details_body").load("admin_add_training_programs.php");
			});
			
			if(val==0)
			{
				$(document).ready(function(){
					$("#admin_details_body").load("admin_profile.php");
				});
			}
		});
		</script>
		</div>
		
		<div class="container" id="footer"> 

			<div class="nav navbar-inverse foot">
				<div class="container-fluid text-center">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Contact Us:</h4>
					<p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;help.service_care@amigo.com</p>
					<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;1800-987-111(toll-free)</p>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Location Address : </h4>
					<p>Tower Amigo, Marine Lines(W), Mumbai-400001</p>
				</div>
				 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
					<h4>Follow Us:</h4>
					<a href="#" class="sm_button" id="fb_button" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
					<a href="#" class="sm_button" id="twitter_button"><i class="fa fa-twitter-square fa-2x"></i></a>
					<a href="#" class="sm_button" id="youtube_button" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a>
					<a href="#" class="sm_button" id="instagram_button"><i class="fa fa-instagram fa-2x"></i></a>
				  </div>
				</div>
				<div class="row">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="frontpage.html">Home</a></li>
						<li><a href="#">FAQs</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Career</a></li>
					</ol>
				  </div>
				</div>
				<div class="row" style="margin-top:20px;">
				<div class="col-lg-12"><p style="color:#b3b3b3;">&copy;2016 AMIGO ALL RIGHTS RESERVED</p></div>
				</div>
			  </div>
		 </div>
		
		</div>
	</body>
</html>"
';
}
?>