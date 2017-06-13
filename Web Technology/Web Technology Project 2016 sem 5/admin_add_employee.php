<?php
include "database_connection.php";
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION["username"]))
{
	$result=mysqli_query($con,"select e_id,firstname,lastname,gender,email,mobile from employee where isapproved=0");
	if($result->num_rows > 0)
	{
		echo '<table class="table table-hover" style="width:500px;margin:0px 0px 0px 20px;">
		<tr><th>E_ID</th><th>Firstname</th><th>Lastname</th><th>Gender</th>
			<th>Email</th><th>Mobile</th></tr>';
		while($row=$result->fetch_assoc())
		{
			echo '<tr><td>'.$row["e_id"].'</td><td>'.$row["firstname"].'</td><td>'.$row["lastname"].'</td>
			<td>'.$row["gender"].'</td><td>'.$row["email"].'</td><td>'.$row["mobile"].'</td>
			<td><button class ="btn-danger accept" value="'.$row["e_id"].'">Accept</button></td>
		</tr>';
		}
		echo '</table>';
		echo '<script>$(document).ready(function()
		{
			$(".accept").click(function()
			{
				var y=this.value;
				var dataString = "value="+y+"&type=accept_employee";
				$.ajax({
					type:"POST",
					url:"manipulate_employee.php",
					data:dataString,
					cache:false,
					beforeSend:function()
					{
					},
					success:function(response)
					{
						alert(response);
						location.reload();
					}
				});
				
			});
		});</script>';
	}
	else
	{
		echo '<b>No employee request yet!</b>';
	}	
}
$con->close();
?>