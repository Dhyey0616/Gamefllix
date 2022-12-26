<?php include('inc/db.php'); 

extract($_POST);


$sql = "INSERT INTO  contact set name='$name',email='$email',subject='$subject',message='$message' ";

// $inr = mysqli_query($con,$in);
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));
	if($result>0)
	{

		echo "<script>alert('Contact added successfully.');
		window.location.href='index.php';
		</script>";
	}
	else
	{
		echo "<script>alert('please add proper data');</script>";
	}

?>