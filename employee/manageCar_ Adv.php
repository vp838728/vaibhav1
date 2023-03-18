<?php
include_once('header.php');
?>
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Car Adv</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Car Adv
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>adv_id</th>
                                            <th>category_id</th>
                                            <th>location_id</th>
                                            <th>owner_name</th>
                                            <th>car_name</th>
                                            <th>vehical_number</th>
                                            <th>mobile</th>
                                            <th>address</th>
                                            <th>deposite</th>
                                            <th>driver</th>
                                            <th>charge</th>
                                            <th>terms_conditon</th>
                                            <th>CREATEd</th>
                                            <th>updated</th>
                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>vaibhav</td>
                                            <td>swedan</td>
                                            <td>GJ-1</td>
                                            <td>1234567890</td>
                                            <td>rajkot</td>
                                            <td>10000</td>
                                            <td>vicky</td>
                                            <td>12000</td>
                                            <td>yes i accept condition</td>
                                            <td>12:00</td>
                                            <td>1:00</td>
                                            <td>
												<a href="#" class="btn btn-primary">Edit</a>
												<a href="#" class="btn btn-danger">Delete</a>
												<a href="#" class="btn btn-success">Status</a>
											</td>
                                        
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
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
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>