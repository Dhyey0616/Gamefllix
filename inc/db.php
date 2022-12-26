<?php 



$server="localhost";
$username="root";
$password="";
$database="sparrowtechnolog_business_idea";

$site_url = "https://sparrowtechnology.in/businessidea/admin/upload/";


$con=mysqli_connect($server,$username,$password,$database);

if(!$con)
{
	
	die("Connection Fail....".mysqli_connect_error());
	
}
date_default_timezone_set('Asia/Kolkata');

?> 