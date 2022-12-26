<?php
   
   include("../includes/db.php");
   extract($_POST);
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
  
        $user = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'";
        $user_r = mysqli_query($con,$user);
        $row = mysqli_fetch_assoc($user_r);
        $rows = mysqli_num_rows($user_r);
        if($rows == 1){
            $_SESSION['id'] = $row['id'];
            //$_SESSION['type'] = $row['type'];
            $_SESSION['email'] = $row['email'];
            //$_SESSION['number'] = $row['number'];
           echo "<script>window.location.href='../home.php';</script>";
        }else{
           echo "<script>alert('User not found. Please try again!');</script>";
           echo "<script>window.location.href='../index.php';</script>";
        }
    
?>