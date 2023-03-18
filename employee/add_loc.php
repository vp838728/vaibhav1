<?php
include_once('header.php');
?>
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add Location</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Location
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>location name</label>
                                            <input type="text" name="location"class="form-control" placeholder="enter location name">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>created_dt</label>
                                            
                                            <input type="datetime-local" name="created_dt" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>update_dt</label>
                                            <input type="datetime-local" name="update_dt" class="form-control">
                                        </div>
        
                                      
                                        
                                     
                                      
                                       
                                         <input type="submit" class="btn btn-primary" value="submit">
                                   
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
