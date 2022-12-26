<?php 
include("includes/db.php");
include_once('includes/header_start.php'); 

?>

        <!-- Plugins css -->
        <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

<?php include_once('includes/header_end.php'); ?>

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Game</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                           
                            <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Add Game</h4>
                                    <form method="POST" action="action/add_category.php"  enctype="multipart/form-data">

                                        <div class="row">

                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Game Name</label>
                                                <input type="text" class="form-control" name="cat" required="">
                                            </div>
                                        </div>

 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Select Image</label>
                                                    <input type="file" name='cat_img' class="form-control" onchange="readThumb(this, 'thumb-error')" class="" accept="image/*" required="">

                                                    <div id="thumb-error" style="color: red; margin: 10px 0px 0 10px; display: none;">Please upload file having extensions .jpeg / .jpg / .png only.
                                                    </div> 

                                                </div>
                                            </div>  

                                            <div id="thumb" class="col-md-4"></div> 

                                        </div>  
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                             <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-pink waves-effect waves-light m-r-5" name="add">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        <!-- </div> -->



                    </div> <!-- end col -->

                </div>
                            </div> <!-- end row -->
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

<?php include_once('includes/footer_start.php'); ?>

        <!-- Plugins js -->
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>

        <!-- Plugins Init js -->
        <script src="assets/pages/form-advanced.js"></script>
        

<?php include_once('includes/footer_end.php'); ?>
<script type="text/javascript">
function readThumb(input, error) {
  document.getElementById(error).style.display = "none";
  var filePath = input.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
  if(!allowedExtensions.exec(filePath)){
    document.getElementById(error).style.display = "block";
    input.value = '';
    document.getElementById("thumb").innerHTML = "";
    return false;
  } else if(input.files && input.files[0]) {
    document.getElementById("thumb").innerHTML = "";

    var total = input.files.length;
    for(i=0; i<total; i++ ) {
      var reader = new FileReader();
      reader.onload = function(e) {

        var newimg = document.createElement("img");
        newimg.setAttribute("src", e.target.result);
        newimg.setAttribute("height", "70px");
        document.getElementById("thumb").appendChild(newimg);
      }
      reader.readAsDataURL(input.files[i]);
    }
  }
}