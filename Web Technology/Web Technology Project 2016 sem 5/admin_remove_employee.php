<?php
include "database_connection.php";
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION["username"]))
{
	$result=mysqli_query($con,"select e_id,firstname,lastname,gender,email,mobile from employee");
	if($result->num_rows > 0)
	{
		echo '<div id="manipulate_employee_status"></div>';
		echo '<table class="table table-hover" style="width:500px;margin:0px 0px 0px 20px;">
		<tr><th>E_ID</th><th>Firstname</th><th>Lastname</th><th>Gender</th>
			<th>Email</th><th>Mobile</th></tr>';
		while($row=$result->fetch_assoc())
		{
			echo '<tr><td>'.$row["e_id"].'</td><td>'.$row["firstname"].'</td><td>'.$row["lastname"].'</td>
			<td>'.$row["gender"].'</td><td>'.$row["email"].'</td><td>'.$row["mobile"].'</td>
			<td><button class ="btn-danger remove" value="'.$row["e_id"].'">Remove</button></td>
		</tr>';
		}
		echo '</table>';
		echo '<script>$(document).ready(function()
		{
			$(".remove").click(function()
			{
				var y=this.value;
				var dataString = "value="+y+"&type=remove_employee";
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
						location.reload("admin_remove_employee.php");
					}
				});
				
			});
		});</script>';
	}
	else
	{
		echo 'No Employee exists!';
	}	
}
$con->close();
?>