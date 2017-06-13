<?php
session_start();

echo '<div style="margin:20px 20px 20px 20px;"><table class="table table-hover" style="margin:0px 0px 0px 20px;table-layout:fixed;">
			<style>input{margin:0px 0px 0px 20px;}</style>
			<tr><th></th><th>Excellent</th><th>Good</th><th>Fair</th><th>Poor</th></tr>
			<tr><td>Front Office Staff</td><td><input type="radio" name="front_office_staff" value="4"></td><td><input type="radio" name="front_office_staff" value="3"></td><td><input type="radio" name="front_office_staff" value="2"></td><td><input type="radio" name="front_office_staff" value="1"></td></tr>
			<tr><td>Restaurant Ambiance</td><td><input type="radio" name="ambience" value="4"></td><td><input type="radio" name="ambience" value="3"></td><td><input type="radio" name="ambience" value="2"></td><td><input type="radio" name="ambience" value="1"></td></tr>
			<tr><td>Restaurant Food</td><td><input type="radio" name="food" value="4"></td><td><input type="radio" name="food" value="3"></td><td><input type="radio" name="food" value="2"></td><td><input type="radio" name="food" value="1"></td></tr>
			<tr><td>Restaurant Staff</td><td><input type="radio" name="staff" value="4"></td><td><input type="radio" name="staff" value="3"></td><td><input type="radio" name="staff" value="2"></td><td><input type="radio" name="staff" value="1"></td></tr>
			<tr><td>House Keeping</td><td><input type="radio" name="house_keeping" value="4"></td><td><input type="radio" name="house_keeping" value="3"></td><td><input type="radio" name="house_keeping" value="2"></td><td><input type="radio" name="house_keeping" value="1"></td></tr>
			<tr><td>Door Man</td><td><input type="radio" name="door_man" value="4"></td><td><input type="radio" name="door_man" value="3"></td><td><input type="radio" name="door_man" value="2"></td><td><input type="radio" name="door_man" value="1"></td></tr>
			<tr><td>Cleanliness of Room</td><td><input type="radio" name="cleanliness" value="4"></td><td><input type="radio" name="cleanliness" value="3"></td><td><input type="radio" name="cleanliness" value="2"></td><td><input type="radio" name="cleanliness" value="1"></td></tr>
			<tr><td>Parking</td><td><input type="radio" name="parking" value="4"></td><td><input type="radio" name="parking" value="3"></td><td><input type="radio" name="parking" value="2"></td><td><input type="radio" name="parking" value="1"></td></tr>
			<tr><td>Restaurant Pool</td><td><input type="radio" name="pool" value="4"></td><td><input type="radio" name="pool" value="3"></td><td><input type="radio" name="pool" value="2"></td><td><input type="radio" name="pool" value="1"></td></tr>
			<tr><td>Overall Hotel Rating</td><td><input type="radio" name="overall" value="4"></td><td><input type="radio" name="overall" value="3"></td><td><input type="radio" name="overall" value="2"></td><td><input type="radio" name="overall" value="1"></td></tr>
	</table>
	<div class="form-group" style="margin:20px 20px 20px 20px;">
		<label for="comment">Any Other Comments :</label>
		<textarea class="form-control" rows="5" id="comment"></textarea>
	<p id="feedback_error" style="color:red;"></p>
	<button class="btn btn-primary" id="feedback_submit">Submit Feedback</button>
	</div>

	<script>
		$(document).ready(function(){
			$("#feedback_submit").click(function(){
            var front_office_staff = $("input[name=front_office_staff]:checked").val();
     		var ambience = $("input[name=ambience]:checked").val();
			var food = $("input[name=food]:checked").val();
			var staff = $("input[name=staff]:checked").val();
			var house_keeping = $("input[name=house_keeping]:checked").val();
			var door_man = $("input[name=door_man]:checked").val();
			var cleanliness = $("input[name=cleanliness]:checked").val();
			var parking = $("input[name=parking]:checked").val();
			var pool = $("input[name=pool]:checked").val();
			var overall = $("input[name=overall]:checked").val();
			var other_comments=$("#comment").val();

			if(front_office_staff==undefined)
			{
				$("#feedback_error").html("Fill front office staff feedback!");
			}
			else if(ambience==undefined)
			{
				$("#feedback_error").html("Fill restaurant ambience feedback!");
			}
			else if(food==undefined)
			{
				$("#feedback_error").html("Fill restaurant food feedback!");
			}
			else if(staff==undefined)
			{
				$("#feedback_error").html("Fill staff feedback!");
			}
			else if(house_keeping==undefined)
			{
				$("#feedback_error").html("Fill house_keeping feedback!");
			}
			else if(door_man==undefined)
			{
				$("#feedback_error").html("Fill door_man feedback!");
			}
			else if(cleanliness==undefined)
			{
				$("#feedback_error").html("Fill cleanliness feedback!");
			}
			else if(parking==undefined)
			{
				$("#feedback_error").html("Fill parking feedback!");
			}
			else if(pool==undefined)
			{
				$("#feedback_error").html("Fill pool feedback!");
			}
			else if(overall==undefined)
			{
				$("#feedback_error").html("Fill overall feedback!");
			}
			else
			{
				var dataString="front_office_staff="+front_office_staff+"&ambience="+ambience+
				"&food="+food+"&staff="+staff+"&house_keeping="+house_keeping+"&door_man="+door_man+
				"&cleanliness="+cleanliness+"&parking="+parking+"&pool="+pool+"&overall="+overall+"&other_comments="+other_comments;
				
				
				 $.ajax({
					type:"POST",
					url:"add_feedback.php",
					data:dataString,
					cache:false,
					beforeSend:function()
					{
						
					},
					success:function(response)
					{
						if(response=="successful")
						$("#feedback_error").html(response);
						else
							$("#feedback_error").html(response);
					}
				});  
			}
			});
        });
	</script>
	';
?>