<?php
include_once('header.php');
?>
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">VIEW REVIEW</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            VIEW REVIEW
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>review_id</th>
                                            <th>user_id</th>
                                            <th>adv_id</th>
                                            <th>rating</th>
                                            <th>message</th>
                                            <th>created</th>
                                            <th>updated</th>
                                        </tr>
                                    </thead>
                                    
                                    
                                    <tbody>
                                        <?php
			
                                         if(!empty($review_arr))
                                        {
                                            foreach($review_arr as $data)
                                            {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data->review_id;?></td>
                                            <td><?php echo $data->user_id?></td>
                                            <td><?php echo $data->adv_id;?></td>
                                            <td><?php echo $data->rating;?></td>
                                            <td><?php echo $data->message;?></td>
                                            <td><?php echo $data->created;?></td>
                                            <td><?php echo $data->updated;?></td>
                                            
                                            <!-- <td> -->
												<!-- <a href="#" class="btn btn-primary">Edit</a> -->
												<!-- <a href="#" class="btn btn-danger">Delete</a> -->
												<!-- <a href="#" class="btn btn-success"><?php echo $data->status;?></a> -->
											<!-- </td> -->
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
