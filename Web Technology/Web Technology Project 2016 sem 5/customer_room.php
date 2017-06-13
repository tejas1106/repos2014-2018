<?php
include "database_connection.php";
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION["username"]))
{	
	echo '<div><div style="float:left;" id="room_book"><img src="images/hotelmap.png" style="height:500px;width:500px;"></div>
	<div style="float:right;overflow-y:scroll;max-height:500px;"><h2>Book A Room</h2>';
		
		$result=mysqli_query($con,"select room_id,room_type,room_rent from room where isbooked=0");
	if($result->num_rows > 0)
	{
		echo '<table class="table table-hover" style="width:500px;margin:0px 0px 0px 20px;">
		<tr><th>Room No.</th><th>Room Type</th><th>Room Rent</th></tr>';
		while($row=$result->fetch_assoc())
		{
			echo '<tr><td>'.$row["room_id"].'</td><td>'.$row["room_type"].'</td><td>'.$row["room_rent"].'</td>
			<td><button class ="btn-danger book" value="'.$row["room_id"].'">Book</button></td>
		</tr>';
		}
		echo '</table></div>';
		echo '<script>$(document).ready(function()
		{
			$(".book").click(function()
			{
				y=this.value;
				alert("You are booking for room no."+y);
				$("#room_book").load("payment_page.html");
			});
		});</script>';
	}
	else
	{
		echo '<div><b>No employee request yet!</b>';
	}	
		
	echo '</div></div>';
}