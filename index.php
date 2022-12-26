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
  <?php include('inc/menu.php'); ?>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome To Gameflix</h6>
                  <h4><em>Browse</em> Our Popular Games Here</h4>
                  <div class="main-button">
                    <a href="browse.php">Browse Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Most Popular</em> Right Now</h4>
                </div>
                <div class="row">

                <?php 
                                            include 'inc/db.php';
                                            $fe_banner = mysqli_query($con,"select * from category order by id desc ");
                                            $no = 0;
                                            while ($r_banner = mysqli_fetch_array($fe_banner)) {
                                                extract($r_banner); ?>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item"><a href="detali.php?id=<?php echo $id;?> ">
                    <img src="admin/upload/cat/<?php  echo $r_banner['image'];?>" alt="imges" width="100px" style='height:150px;'>
                      <h4><?php echo $name;?><br><span></span></h4></a>
                      <ul>
                        <!-- <li><i class="fa fa-star"></i> 4.8</li> -->
                        <!-- <li><i class="fa fa-download"></i> 2.3M</li> -->
                      </ul>
                    </div>
                  </div>
                <?php
                                            } ?>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="browse.php">Discover Popular</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Gameflix</a> Company. All rights reserved. 
          
          <br>Design: <a href="" target="_blank" title="free CSS templates">Gameflix</a></p>
        </div>
      </div>
    </div>
  </footer>


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
