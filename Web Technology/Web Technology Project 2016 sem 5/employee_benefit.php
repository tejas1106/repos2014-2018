<?php
include "database_connection.php";

echo '
<div style="float:left;">
	';
	$result=mysqli_query($con,"select * from training");
	if($result->num_rows > 0)
	{
		echo '<table class="table table-hover" style="width:500px;margin:0px 0px 0px 20px;">
		<tr><th>PROGRAM ID</th><th>Name</th><th>Start Date</th><th>Period</th></tr>';
		while($row=$result->fetch_assoc())
		{
			echo '<tr><td>'.$row["t_program_id"].'</td><td>'.$row["t_program_name"].'</td><td>'.$row["t_program_start_date"].'</td>
			<td>'.$row["t_program_period"].'</td>
			<td><button class ="btn-danger register" value="'.$row["t_program_id"].'">Register</button></td></tr>';
		}
		echo '</table>';
		
		echo '<script>$(document).ready(function()
		{
			$(".register").click(function()
			{
				var y=this.value;
				var dataString = "value="+y+"&type=register_program";
				$.ajax({
					type:"POST",
					url:"register_program.php",
					data:dataString,
					cache:false,
					beforeSend:function()
					{
					},
					success:function(response)
					{
						location.reload();
					}
				});
				
			});
		});</script>';
		
	}
	else
	{
		echo '<b>No training programs available!</b>';
	}	
echo'
</div>
';
?>