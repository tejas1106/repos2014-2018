<?php
include "database_connection.php";
session_start();

$result=mysqli_query($con,"select firstname,lastname,gender,email,mobile from customer where email='".$_SESSION["username"]."'");
$room=mysqli_query($con,"select room_id,room_type,room_rent from room,customer where room_id = customer.r_id and email='".$_SESSION["username"]."'");
if($result->num_rows > 0)
{
	echo '<div style="float:left;"><table class="table table-hover" style="width:500px;margin:0px 0px 0px 20px;"><tr><th>Profile Details : </th></tr>';
	while($row=$result->fetch_assoc())
	{
		echo '<tr><td> Name : '.$row["firstname"].' '.$row["lastname"].'</td></tr><tr><td> Gender : '.$row["gender"].'</td></tr><tr><td> Email : '.$row["email"].'</td></tr><tr><td> Mobile : '.$row["mobile"].'</td></tr>';
	}
	echo '</table></div>';
}
echo '<div style="float:right;"><table class="table table-hover" style="width:500px;margin:0px 0px 0px 20px;"><tr><th>Booked Room Details : </th></tr>';

if($room->num_rows > 0)
{
	
	while($row=$room->fetch_assoc())
	{
		echo '<tr><td> Room No. : '.$row["room_id"].'</td></tr><tr><td> Room Name : '.$row["room_type"].'</td></tr><tr><td> Room Rent : '.$row["room_rent"].'</td></tr>';
	}
	echo '</table>';
}
else
{
	echo 'Not Registered for any room yet.</div>';
}

$con->close();
?>