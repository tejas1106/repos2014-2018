<?php
include "database_connection.php";
session_start();
if(isset($_SESSION["username"]) && isset($_SESSION["password"]))
{
			$front_office_staff = $_POST["front_office_staff"];
     		$ambience = $_POST["ambience"];
			$food = $_POST["food"];
			$staff = $_POST["staff"];
			$house_keeping = $_POST["house_keeping"];
			$door_man = $_POST["door_man"];
			$cleanliness = $_POST["cleanliness"];
			$parking = $_POST["parking"];
			$pool = $_POST["pool"];
			$overall = $_POST["overall"];
			$other_comments = $_POST["other_comments"];
			
			if(mysqli_query($con,"insert into feedback(front_office_staff,ambience,food,staff,house_keeping,door_man,cleanliness,parking,pool,overall,other_comments) 
				values('".$front_office_staff."','".$ambience."','".$food."','".$staff."',
				'".$house_keeping."','".$door_man."','".$cleanliness."','".$parking."',
				'".$pool."','".$overall."','".$other_comments."')"))
				{
					echo "Your Feedback Submitted.";
				}
				else
					echo "Feedback ERROR!";
}
?>