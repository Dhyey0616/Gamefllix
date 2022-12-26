<?php
include("../includes/db.php");


$action = $_REQUEST['action'];
if($action == 'cat')
{
	if (!empty($_POST["id"]))
	{
		$did=$_POST['id'];

	$SQLp = "SELECT * FROM category WHERE id='$did' ";
    	$resultp = mysqli_query($con, $SQLp) or die(mysqli_error($con));
    	$rowp = mysqli_fetch_assoc($resultp);
     	unlink("../upload/cat/" . $rowp["image"]);
     	
     	$delete1 = "delete from category where id='$did'";
		$dr1 = mysqli_query($con,$delete1);
	
	}
}


if($action == 'subcat')
{
	if (!empty($_POST["id"]))
	{
		$did=$_POST['id'];

	$SQLp = "SELECT * FROM sub_category WHERE id='$did' ";
    	$resultp = mysqli_query($con, $SQLp) or die(mysqli_error($con));
    	$rowp = mysqli_fetch_assoc($resultp);
     	unlink("../upload/subcat/" . $rowp["sc_img"]);
     	
     	$delete1 = "delete from sub_category where id='$did'";
		$dr1 = mysqli_query($con,$delete1);
	
	}
}
?>