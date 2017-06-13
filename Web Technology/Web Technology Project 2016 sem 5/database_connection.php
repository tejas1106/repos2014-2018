<?php
$server="localhost";
$serverusername="root";
$serverpassword="";
$databasename="wt_database";

$con=mysqli_connect($server,$serverusername,$serverpassword,$databasename);
if(!$con)
{
	die("Connection failed : ".mysqli_connect_error());
}
?>