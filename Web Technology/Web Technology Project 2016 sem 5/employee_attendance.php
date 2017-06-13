<?php
include "database_connection.php";
session_start();
$username=$_SESSION["username"];
$attendance=mysqli_query($con,"select * from attendance,employee where attendance.a_id=employee.a_id and employee.email='".$username."'");
if($attendance->num_rows>0)
{
	echo '<div style="float:left;"><table class="table table-hover" style="width:500px;margin:0px 0px 0px 20px;"><tr><th>Attendance Details : </th></tr>';
	while($row=$attendance->fetch_assoc())
	{
		echo '<tr><td> Attendance id : '.$row["a_id"].'</td></tr><tr><td> Attendance Month : '.$row["a_month"].'</td></tr><tr><td> Present Days : '.$row["present_days"].'</td></tr><tr><td> Absent Days : '.$row["absent_days"].'</td></tr>';
	}
	echo '</table></div>';
}
else
{
	echo 'Attendance Details not available.';
}

$con->close();
?>