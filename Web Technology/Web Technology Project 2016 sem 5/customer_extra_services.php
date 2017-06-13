<?php
session_start(); 
if(isset($_SESSION["username"]))
{
	echo '<div style="margin:20px 20px 20px 20px;padding:20px 20px 20px 20px;"><p style="color:red;font-size:20px;">Do you want a car?</p><button class="btn btn-warning" id="car">Book A Car</button><br><br>
	 <p style="color:red;font-size:20px;">Do you want a Tour Guide?</p><button class="btn btn-warning" id="guide">Book A Guide</button><br><br>
	<p id="extra_services_status" style="color:green;"></p>
	<script>
		$(document).ready(function()
		{
			$("#car").click(function()
			{
				$("#extra_services_status").html("Car Booked!");
			});
			
			$("#guide").click(function()
			{
				$("#extra_services_status").html("Tour Guide Booked!");
			});
		});
	</script>';
}
?>