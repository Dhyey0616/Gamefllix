<?php 
include("../includes/db.php");
include '../includes/compression.php';

extract($_POST);

$thumb1 =  $_FILES['cat_img']['name'];
if($thumb1!=''){
	$thumb = rand(100, 999) . $thumb1;
	
// $thumb = rand(100, 999) .  $_FILES['cat_img']['name'];
@$thumbpath = "../upload/cat/" . $thumb;
move_uploaded_file($_FILES['cat_img']['tmp_name'], $thumbpath);
compress(@$thumbPath, @$thumbPath,90);
}
else
{
	$thumb='';
}



	$sql = "INSERT INTO category set name='$cat',image='$thumb'";
// $inr = mysqli_query($con,$in);
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));

  
	if($result>0)
	{

		echo "<script>alert('Game added successfully.');
		window.location.href='../add_category.php';
		</script>";
	}
	else
	{
	    
	    	echo "<script>alert('please add proper data.');
	window.location.href='../add_category.php';
	</script>";
	}







?>