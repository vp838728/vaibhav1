<?php
include_once('header.php');
?>
<!--  page-wrapper -->
<div id="page-wrapper">
    <div class="row">
        <!-- page header -->
        <div class="col-lg-12">
            <h1 class="page-header">Add Employee</h1>
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
                            <form action="" method="get">
                                <div class="form-group">
                                    NAME:
                                    <input class="form-control" name="name" placeholder="name">

                                </div>
                                <div class="form-group">
                                    mobile:
                                    <input class="form-control" type="number" name="mobile" placeholder="Enter number">
                                </div>
                                <div class="form-group">
                                    email:
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    address:
                                    <textarea class="form-control" name="address" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    username
                                    <input type="text" class="form-control" name="username" placeholder="enter username">
                                </div>
                                <div class="form-group">
                                    password
                                    <input type="password" class="form-control" name="pass" placeholder="enter password">
                                </div>




                                  <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="submit" value="submit">
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