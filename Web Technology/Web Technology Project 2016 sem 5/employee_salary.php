<?php
include "database_connection.php";
session_start();
$username=$_SESSION["username"];
$salary=mysqli_query($con,"select * from salary,employee where salary.s_id=employee.s_id and employee.email='".$username."'");
if($salary->num_rows>0)
{
	echo '<div style="float:left;"><table class="table table-hover" style="width:500px;margin:0px 0px 0px 20px;"><tr><th>Salary Details : </th></tr>';
	while($row=$salary->fetch_assoc())
	{
		echo '<tr><td> Salary id : '.$row["s_id"].'</td></tr><tr><td> Salary Month : '.$row["s_month"].'</td></tr><tr><td> Salary Amount : '.$row["s_amount"].'</td></tr>';
	}
	echo '</table></div>';
}
else
{
	echo 'Salary Details not available.';
}

$con->close();
?>