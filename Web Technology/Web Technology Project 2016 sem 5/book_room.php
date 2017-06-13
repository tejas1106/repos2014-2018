<?php
include "database_connection.php";
session_start();
if(isset($_POST["value"]) && $_POST["type"]=="book_room")
{
		$value=$_POST["value"];
		$username=$_SESSION["username"];	
		$result=mysqli_query($con,"select * from customer where email='".$username."'");
		if($result->num_rows>0)
		{
			$row=$result->fetch_assoc();
			$c_id=$row["c_id"];
		}
		if(mysqli_query($con,"update room set isbooked=1,c_id='".$c_id."' where room_id = '".$value."'") && mysqli_query($con,"update customer set r_id='".$value."' where email='".$username."'"))
		{
			echo 'successful';
		}
		else
			echo 'unsuccessful';
}
$con->close();
?>