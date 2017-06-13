<?php
include "database_connection.php";
session_start();
$username=$_SESSION["username"];
$result=mysqli_query($con,"select firstname,lastname,gender,email,mobile from employee where email='".$_SESSION["username"]."'");
$program=mysqli_query($con,"select t_program_id,t_program_name,t_program_start_date,t_program_period from training,employee where t_program_id=employee.p_id and employee.email='".$username."'");
if($result->num_rows > 0)
{
	echo '<div style="float:left;"><table class="table table-hover" style="width:500px;margin:0px 0px 0px 20px;"><tr><th>Profile Details : </th></tr>';
	while($row=$result->fetch_assoc())
	{
		echo '<tr><td> Name : '.$row["firstname"].' '.$row["lastname"].'</td></tr><tr><td> Gender : '.$row["gender"].'</td></tr><tr><td> Email : '.$row["email"].'</td></tr><tr><td> Mobile : '.$row["mobile"].'</td></tr>';
	}
	echo '</table></div>';
}
if($program->num_rows>0)
{
	echo '<div style="float:right;"><table class="table table-hover" style="width:500px;margin:0px 0px 0px 20px;"><tr><th>Registered Training Program Details : </th></tr>';
	while($row=$program->fetch_assoc())
	{
		echo '<tr><td> Program id : '.$row["t_program_id"].'</td></tr><tr><td> Program Name : '.$row["t_program_name"].'</td></tr><tr><td> Start Date : '.$row["t_program_start_date"].'</td></tr><tr><td> Period : '.$row["t_program_period"].'</td></tr>';
	}
	echo '</table></div>';
}
else
{
	echo 'Not Registered for any training program yet.';
}

$con->close();
?>