<?php
include_once('header.php');
?>
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Manage User</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>file</th>
                                           <th>user_id</th>
                                            <th>name</th>
                                            <th>unm</th>
                                            <th>gen</th>
                                            <th>lag</th>
                                            <th>cid </th>
                                            <th>created_at</th>
                                            <th>updated_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                        if(!empty($user_arr))
                                        {
                                            foreach($user_arr as $data)
                                            {
                                        ?>
                                        <tr class="odd gradeX">
<<<<<<< HEAD
                                            <td><img src="/UPLOAD/USER1/<?PHP echo $data->file_upload;?>"width="50px"></td>
=======
                                            <td><img src="UPLOAD/USER1/<?PHP echo $data->file_upload;?>"width="50px"alt="imges"></td>
>>>>>>> 7e51511af046ad42b9457c0ba2e8a1ee884b9913
                                            <td><?php echo $data->user_id;?></td>
                                            <td><?php echo $data->name;?></td>
                                            <td><?php echo $data->unm;?></td>
                                            <td><?php echo $data->gen;?></td>
                                            <td><?php echo $data->lag;?></td>
                                            <td><?php echo $data->cid;?></td>
                                            <td><?php echo $data->created_at;?></td>
                                            <td><?php echo $data->updated_at;?></td>
                                            
                                            <td>
												<a href="#" class="btn btn-primary">Edit</a>
												<a href="delete?del_user_id=<?php echo $data->user_id;?>" class="btn btn-danger">Delete</a>
												<a href="status?status_user_id=<?php echo $data->user_id;?>" class="btn btn-success"><?php echo $data->status;?></a>
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
