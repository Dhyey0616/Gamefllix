<?php

  include("../includes/db.php");
  // extract($_POST);
//$image = $_GET['image'];
$userid = $_GET['id'];

  echo  $SQL = "DELETE FROM category WHERE id='$userid'";
  
    mysqli_query($con, $SQL) or die(mysqli_error($con));

   header("Location: ../display_cat.php");
?>