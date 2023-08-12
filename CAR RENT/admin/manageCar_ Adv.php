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
                            <div style="overflow:scroll">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>adv_id</th>
                                            <th>category_id</th>
                                            <th>location_id</th>
                                            <th>owner_name</th>
                                            <th>car_name</th>
                                            <th>mobile</th>
                                            <th>address</th>
                                            <th>driver</th>
                                            <th>file</th>

                                            <th>updated</th>
                                            <th>deleated</th>
                                            <th>action</th>
                                        
                                        </tr>
                                    </thead>
                                        
                                    
                                    <tbody>
                                        <?php
                                        if(!empty($caradv_arr))
                                        {
                                            foreach($caradv_arr as $data)
                                            {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data->adv_id;?></td>
                                            <td><?php echo $data->category_id;?></td>
                                            <td><?php echo $data->location_id;?></td>
                                            <td><?php echo $data->owner_name;?></td>
                                            <td><?php echo $data->car_name?></td>
                                            <td><?php echo $data->mobile?></td>
                                            <td><?php echo $data->address;?></td>
                                            <td><?php echo $data->driver;?></td>
                                            <td><img src="../CAR RENT/carbook-master/UPLOAD/CARADV/<?PHP echo $data->file;?>"width="50px"alt="imges"></td>

                                            <td><?php echo $data->updated;?></td>
                                            <td><?php echo $data->deleted;?></td>
                                            
                                            <td>
												<a href="#" class="btn btn-primary">Edit</a>
												<a href="delete?del_adv_id=<?php echo $data->adv_id?>" class="btn btn-danger">Delete</a>
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