<?php 
session_start();
include_once('includes/header_account.php'); 
include("includes/db.php");

?>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                    <a href="index.php" class="logo-admin"><img src="assets/images/logo1.jpg" height="100" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue to Gameflix.</p>

                        <form class="form-horizontal m-t-30" action="action/add_login.php" method="post">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="email" id="username" placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" name="password"  id="userpassword" placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-7">
                                    <div class="custom-control custom-checkbox">
                                        <!-- <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label> -->
                                      
                                    </div>
                                </div>
                                <div class="col-sm-5 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <!-- <a href="pages-recoverpw.php" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a> -->
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- <div class="m-t-40 text-center">
                <p>Don't have an account ? <a href="register.php" class="font-500 font-14 text-primary font-secondary"> Signup Now </a> </p>
                <p>© 2018 Fonik. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p> 
            </div> -->

        </div>

<?php include_once('includes/footer_account.php'); ?>