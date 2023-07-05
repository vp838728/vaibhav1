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
                            <div style="overflow:scroll">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>BOOKING_ID</th>
                                            <th>USER_ID</th>
                                            <th>ADV_ID</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>moblie</th>
                                            <th>PICKUPLOCATION</th>
                                            <th>DESTINATION</th>
                                            <th>city</th>
                                            <th>STATE</th>
                                            <th>updated</th>
                                            <th>deleated</th>
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
                                            <td><?php echo $data->book_id;?></td>
                                            <td><?php echo $data->user_id;?></td>
                                            <td><?php echo $data->adv_id;?></td>
                                            <td><?php echo $data->name;?></td>
                                            <td><?php echo $data->email;?></td>
                                            <td><?php echo $data->moblie;?></td>
                                            <td><?php echo $data->PICKUPLOCATION;?></td>
                                            <td><?php echo $data->DESTINATION;?></td>
                                           <td><?php echo $data->city;?></td>
                                            <td><?php echo $data->STATE;?></td>
                                            <td><?php echo $data->updated;?></td>
                                            <td><?php echo $data->deleated_dt;?></td>
                                            
                                            <td>
												<a href="#" class="btn btn-primary">Edit</a>
												<a href="delete?del_book_id=<?php echo $data->book_id;?>" class="btn btn-danger">Delete</a>
												<a href="status?status_book_id=<?php echo $data->book_id?>" class="btn btn-success"><?php echo $data->status;?></a>
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
