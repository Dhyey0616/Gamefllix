<?php 
include('../inc/db.php');

extract($_POST);


  session_start();
    $email = $_POST['email'];
   
  	$password = $_POST['pswd'];


        $user = "SELECT * FROM `register` WHERE email = '$email' AND password = '$password'";
        $user_r = mysqli_query($con,$user);
        $row = mysqli_fetch_assoc($user_r);
        // $rows = mysqli_num_rows($user_r);
        if($user_r >0 ){
            $_SESSION['id'] = $row['id'];
            //$_SESSION['type'] = $row['type'];
            $_SESSION['email'] = $row['email'];
            //$_SESSION['number'] = $row['number'];
           echo "<script>window.location.href='../index.php';</script>";
        }else{
           echo "<script>alert('User not found. Please try again!');</script>";
           echo "<script>window.location.href='../login.php';</script>";
        }

?>