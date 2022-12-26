<?php 
include("../includes/db.php");
include '../includes/compression.php';

extract($_POST);


$uid = $_GET['uid'];

  $sel_product = mysqli_query($con,"select * from category where id='$uid'");
  $product_sel = mysqli_fetch_array($sel_product);
  $fe_img = $product_sel['image'];

  $p_img =  $_FILES['p_img']['name'];
  $fmgg = $fe_img;



if(strlen($_FILES['p_img']['name']) != 0) {


	$newThumb =  $_FILES['p_img']['name'];
	$thumbPath = "../upload/cat/" . $newThumb;
	move_uploaded_file($_FILES['p_img']['tmp_name'], $thumbPath);
	$fmgg = $newThumb;
	unlink("../upload/cat/" . $fe_img);
}
$sql = "update category set name='$cat',image='$fmgg' where id=$uid";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));

//  header('location: ../logo_list.php');
if($result>0)
{
	echo "<script>alert('category updated successfully.');
	window.location.href='../add_category.php';
	</script>";

	// echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
}
else
{
	echo "<script>alert('please add proper data');
	window.location.href='../add_category.php';
	</script>";
	
}

?>