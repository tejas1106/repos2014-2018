<?php
include "database_connection.php";

if(isset($_POST["name"]) && isset($_POST["date"]) && isset($_POST["period"]))
{
	$name=$_POST["name"];
	$date=$_POST["date"];
	$period=$_POST["period"];
	$check_for_duplicates=mysqli_query($con,"select * from training where t_program_name = '".$name."'");
	
	if(mysqli_num_rows($check_for_duplicates)==0)
	{
		$result=mysqli_query($con,"insert into training(t_program_name,t_program_start_date,t_program_period) 
		values('".$name."','".$date."','".$period."')");
		echo "successful";
	}
	else
	{
		echo "Program already exists with the same name!";
	}
}
else 
	echo "not set";
?>