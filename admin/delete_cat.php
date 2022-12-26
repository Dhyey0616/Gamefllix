<?php

  include("../includes/db.php");
//$image = $_GET['image'];
echo $userid = $_GET['id'];

  echo   $SQL = "DELETE FROM category WHERE id='$userid'";
    mysqli_query($con, $SQL) or die(mysqli_error($con));

   header("Location: ../display_cat.php&deleted=true");
?>