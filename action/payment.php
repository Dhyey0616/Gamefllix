
<?php 
session_start();
include('../inc/db.php');

extract($_POST);


  
    $email = $_POST['email'];
    $name = $_POST['name'];
  	$password = $_POST['password'];


   $user1 = "SELECT * FROM `register` WHERE email = '$email' AND password = '$password'";
        $user_r1 = mysqli_query($con,$user1);
        $row = mysqli_fetch_assoc($user_r1);
        $rows = mysqli_num_rows($user_r1);
        if($rows >0 ){


         $user = "insert into payment set email = '$email' , password = '$password',name='$name'";
        $user_r = mysqli_query($con,$user);
        $row = mysqli_fetch_assoc($user_r);
        $rows = mysqli_num_rows($user_r);
               $last_id= mysqli_insert_id($con);

        if($user_r > 0)
        {
             $_SESSION["id"] = $last_id;
            //$_SESSION['type'] = $row['type'];
           
            //$_SESSION['number'] = $row['number'];
           echo "<script>window.location.href='../index.php';</script>";
        }
        else
        {
           echo "<script>alert('Email and Password Not Match. Please try again!');</script>";
           echo "<script>window.location.href='../index.php';</script>";
        }
      }
      else{

          echo "<script>alert('User not found. Please try again!');</script>";
           echo "<script>window.location.href='../login.php';</script>";
      }

?>