<?php
include "database_connection.php";
session_start();

$result=mysqli_query($con,"select firstname,lastname,username,gender,email,mobile from admin where email='".$_SESSION["username"]."'");
if($result->num_rows > 0)
{
	echo '<table class="table table-hover" style="width:500px;margin:0px 0px 0px 20px;"><tr><th>Profile Details : </th></tr>';
	while($row=$result->fetch_assoc())
	{
		echo '<tr><td>Username : <b>'.$row["username"].'</b></td></tr><tr><td> Name : '.$row["firstname"].' '.$row["lastname"].'</td></tr><tr><td> Gender : '.$row["gender"].'</td></tr><tr><td> Email : '.$row["email"].'</td></tr><tr><td> Mobile : '.$row["mobile"].'</td></tr>';
	}
	echo '</table>';
}
else
{
	echo '0 results!';
}	

$con->close();
?>