<?php
include_once('header.php');
?>
<!--  page-wrapper -->
<div id="page-wrapper">
    <div class="row">
        <!-- page header -->
        <div class="col-lg-12">
            <h1 class="page-header">EDIT  Employee</h1>
        </div>
        <!--end page header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Employee
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    NAME:
                                    <input class="form-control" name="name" value="<?php echo $fetch->name;?>" placeholder="name">

                                </div>
                                <div class="form-group">
                                    mobile:
                                    <input class="form-control" type="number" value="<?php echo $fetch->mobile;?>"name="mobile" placeholder="Enter number">
                                </div>
                                <div class="form-group">
                                    email:
                                    <input type="text" class="form-control" name="email" value="<?php echo $fetch->email;?>" placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    address:
                                    <textarea class="form-control" name="address" rows="3"><?php echo $fetch->address;?></textarea>
                                </div>
                                <div class="form-group">
                                    username
                                    <input type="text" class="form-control" name="username"value="<?php echo $fetch->username;?>" placeholder="enter username">
                                </div>
                                <div class="form-group">
                                    file
                                    <td><img src="upload/employee/<?php echo $fetch->file;?>"width="50px"alt="imges"></td>

                                    <input type="file" class="form-contol" name="file"value="<?php echo $fetch->file;?>" placeholder="enter username">
                                </div>
                                




                                  <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="save" value="submit">
</div>
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