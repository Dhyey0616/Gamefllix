<!DOCTYPE html>
<?php include('inc/header.php');?>


<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php include('inc/menu.php');?>

  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Games Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4><em>Featured</em> Games</h4>
                </div>
                <div class="owl-features owl-carousel">


                <?php 
                                            include 'inc/db.php';
                                            $fe_banner = mysqli_query($con,"select * from category order by id desc ");
                                            $no = 0;
                                            while ($r_banner = mysqli_fetch_array($fe_banner)) {
                                                extract($r_banner); ?>
                  <div class="item">
                    <div class="thumb"><a href="detali.php?id=<?php echo $id;?> ">
                       <img src="admin/upload/cat/<?php  echo $r_banner['image'];?>" alt="imges" height="350px">
                      <div class="hover-effect">
                        </a>
                      </div>
                    </div>
                    <h4><?php echo $name;?><br><h4>
                   <!--  <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                  </div>
<?php
                                            }
                                            ?>

              
             
                </div>
              </div>
            </div>
           
          </div>
          <!-- ***** Featured Games End ***** -->

          


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>
