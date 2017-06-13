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
			<td>'.$row["t_program_period"].'</td></tr>';
		}
		echo '</table>';
		
	}
	else
	{
		echo '<b>No training programs available!</b>';
	}	
echo'
</div>
';

echo '
<div style="float:right;margin:0px 40px 0px 0px;">
	<h2>New Training program Details</h2>
	<div class="form-group row">
		<label for="training_program_name" class="col-xs-4 col-form-label">Program Name</label>
		<div class="col-xs-7">
			<input class="form-control" type="text" id="training_program_name">
		</div>
	</div>

	<div class="form-group row">
	  <label for="training_program_start_date" class="col-xs-4 col-form-label">Start Date</label>
	  <div class="col-xs-7">
		<input class="form-control" type="date" value="2011-08-19" id="training_program_start_date">
	  </div>
	</div>

	<div class="form-group row">
	  <label for="training_program_period" class="col-xs-4 col-form-label">Period in weeks</label>
	  <div class="col-xs-7">
		<input class="form-control" type="number" value="1" id="training_program_period">
	  </div>
	</div>
	<p id="program_add_details"></p>
	<button class="btn btn-primary" id="add_program">Add Program</button>
</div>
<script>

	$(document).ready(function(){
		$("#add_program").click(function(){
			
			var program_name=$("#training_program_name").val();
			var program_date=$("#training_program_start_date").val();
			var program_period=$("#training_program_period").val();
			if(program_name=="")
			{
				$("#program_add_details").html("Enter program name.");
				$("#training_program_name").focus();
			}
			else if(program_date=="")
			{
				$("#program_add_details").html("Enter program start date.");
				$("#training_program_start_date").focus();
			}
			else if(program_period=="")
			{
				$("#program_add_details").html("Enter program period.");
				$("#training_program_period").focus();
			}
			else
			{
				var dataString = "name="+program_name+"&date="+program_date+"&period="+program_period;
				$.ajax({
					type:"POST",
					url:"new_training_program.php",
					data:dataString,
					cache:false,
					beforeSend:function()
					{
						$("#program_add_details").html("Loading...Please Wait</p>");
					},
					success:function(response)
					{
						if(response=="successful")
						{
							$("#program_add_details").html(response);
							location.reload();
						}
						else
						{
							$("#program_add_details").html("Program already exists with same name.");
						}
					} 
			});
			} 
		});
	});
</script>
'
;
?>