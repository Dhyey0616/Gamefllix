<?php 

include("includes/db.php");
include_once('includes/header_start.php'); 

?>

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<?php include_once('includes/header_end.php'); ?>

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Contact</h3>
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
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Display Contact</h4>
                                            <!-- <p class="text-muted m-b-30 font-14">The Buttons extension for DataTables
                                                provides a common set of options, API methods and styling to display
                                                buttons on a page that will interact with a DataTable. The core library
                                                provides the based framework upon which plug-ins can built.
                                            </p> -->
            
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Name</th>
                                                   <th>Email</th>
                                                   <th>Subject</th>
                                                   <th>Message</th>
                                                    <!--<th>Action</th>-->
                                                    <!-- <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th> -->
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <?php 
                                          include("includes/db.php");
                                            $fe_banner = mysqli_query($con,"select * from contact order by id desc ");
                                            $no = 0;
                                            while($r_banner = mysqli_fetch_array($fe_banner)){ 
                                                extract($r_banner);
//SELECT `id`, `cat_id`, `name`, `sc_img`, `description` FROM `sub_category` WHERE 1
                                                    // $cat_id = $r_banner['cat_id'];

                                                
                                                ?>
                                               <tr class="delete_mem<?php echo $id ?>">

                                                    <td><?php echo $no=$no+1;?></td>
                                                    <td><?php echo $r_banner['name']; ?></td>
                                                 <td><?php echo $r_banner['email']; ?></td>
                                                  <td><?php echo  $r_banner['subject']; ?></td>

                                                  <td><?php echo  $r_banner['message']; ?></td>
                                                  <!--<td><img src="upload/subcat/<?php  echo $r_banner['sc_img'];?>" alt="imges" width="100px"></td>-->

                                                    <td> 
                                                    <div>
                                                        
                                                   
                                                </div>
                                            </td>
                                                    <!-- <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td> -->
                                                </tr>
                                                <?php }?>   
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

<?php include_once('includes/footer_start.php'); ?>

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

<?php include_once('includes/footer_end.php'); ?>

  <script type="text/javascript">
        // $(document).ready(function() {
            $('.delete').click(function() {
            // var el = this;
            var id = $(this).attr("id");

            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    type: "POST",
                    url: "action/delete.php",
                    data : {id:id,action:'subcat'},
                    cache: false,
                    success: function(html) {                        
                        // $('#dynamic-table').reload();
                        $(".delete_mem" + id).fadeOut('slow');                       
                    }
                });
            } else {
                return false;
            }
        });
        // });
    </script>   s