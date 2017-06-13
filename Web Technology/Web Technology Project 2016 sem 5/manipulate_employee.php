<?php
include "database_connection.php";
if(isset($_POST["value"]) && !empty($_POST["value"]))
{
	if($_POST["type"]=="remove_employee")
	{
		$value=$_POST["value"];
		
		if(mysqli_query($con,"delete from employee where e_id = '".$value."'"))
		{
			echo 'successful';
		}
		else
			echo 'unsuccessful';
	}
	
	if($_POST["type"]=="accept_employee")
	{
		$value=$_POST["value"];
		
		if(mysqli_query($con,"update employee set isapproved=1 where e_id='".$value."'"))
		{
			echo 'successful';
		}
		else
		{
			echo 'unsuccessful';
		}
	}
}
$con->close();
?>