<?php
include_once('header.php');
?>
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add Categoriers</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Categoriers
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="" method="post"enctype="multipart/form-data">
                                       
                                        <div class="form-group">
                                            Categories Name:
                                            <input type="text" name="category_name" class="form-control" placeholder="Categories Name">
                                        </div>
                                        <div class="form-group">
                                            Categories photo:
                                            <input type="file" name="file" class="form-control" placeholder="Categories Name">
                                        </div>
                                        
                                        <input type="submit" name="submit" class="btn btn-primary" name="Submit">
                                       
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
