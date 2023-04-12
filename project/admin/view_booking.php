<?php
include_once('header.php');

?>
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">View booking</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View booking
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>BOOKING_ID</th>
                                            <th>USER_ID</th>
                                            <th>ADV_ID</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>moblie</th>
                                            
                                            <th>city</th>
                                            <th>adhar_no</th>
                                            <th>updated</th>
                                            <th>deleated_dt</th>
	
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($booking_arr))
                                        {
                                            foreach($booking_arr as $data)
                                            {
                                                ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data->BOOKING_ID;?></td>
                                            <td><?php echo $data->USER_ID;?></td>
                                            <td><?php echo $data->adv_id;?></td>
                                            <td><?php echo $data->name;?></td>
                                            <td><?php echo $data->email;?></td>
                                            <td><?php echo $data->moblie;?></td>
                                            
                                            
                                            <td><?php echo $data->city;?></td>
                                            <td><?php echo $data->adhar_no;?></td>
                                            <td><?php echo $data->updated;?></td>
                                            <td><?php echo $data->deleated_dt;?></td>
                                            <td>
												<a href="#" class="btn btn-primary">Edit</a>
												<a href="delete?del_BOOKING_ID=<?php echo $data->BOOKING_ID;?>" class="btn btn-danger">Delete</a>
												<a href="#" class="btn btn-success">Status</a>
											</td>
                                        
                                            
                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                        
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
