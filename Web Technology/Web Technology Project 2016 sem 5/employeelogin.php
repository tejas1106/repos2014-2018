<?php
if(isset($_SESSION["username"]))
	echo '"
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
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#employee_profile").click(function(){
				$("#employee_details_body").html("hello");
			});
		});
		
		</script>
		
		<script>
		
		</script>

	</head>
	
	<body style="height:100%,width:100%;">
		<div id="header"> 
			<img class="img-circle" id="logo" src="images/logo.png">
			<button class="btn-info" id="memberlogin">Member Login</button>
			<button class="btn-info" id="staff">Staff</button>
			<button class="btn-info" id="logout">Logout</button>
		</div>
		<div id="employee_details">
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
						<li><a id="employee_profile" href="#">Profile</a></li>
						<li><a id="employee_salary" href="#">Salary Details</a></li>
						<li><a id="employee_benefit" href="#">Benefit Details</a></li>
						<li><a id="employee_attendace" href="#">Attendance Details</a></li>
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
		</div>
		
		<div class="container" id="footer"> 
			<h1>Footer</h1>
		</div>
	</body>
</html>"'
?>