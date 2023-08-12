<?php
include_once('header.php');
?>
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Caradv</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Caradv
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="" method="post"enctype="multipart/form-data">
                                       
                                    <div class="form-group">
          <label>owner_name</label>
          <input type="text" name="owner_name" id="name" value="<?php echo $fetch->owner_name;?>" data-bvalidator="required,alpha" class="form-control" placeholder="Your Name">
        </div>
        <div class="form-group">
          <label>carname:</label>
          <input type="text" name="car_name" class="form-control"  value="<?php echo $fetch->car_name;?>"data-bvalidator="required" placeholder="Your carname">
        </div>
        <div class="form-group">
          <label>vehical_number</label>
          <input type="text" name="vehical_number" value="<?php echo $fetch->vehical_number;?>" class="form-control"data-bvalidator="required" placeholder="vehical_number">
        </div>
        <div class="form-group">
          <label>mobile</label>
          <input type="text" name="mobile" class="form-control"  value="<?php echo $fetch->mobile;?>" data-bvalidator="required,number" placeholder="mobile">
        </div>
        <div class="form-group">
          <label>UPLOAD YOUR CAR PICTURE:</label>
          <td><img src="../../CAR RENT/carbook-master/UPLOAD/CARADV/<?PHP echo $fetch->file;?>"width="50px"alt="imges"></td>

          <input type="file" name="file" class="form-control"  data-bvalidator="required,image" placeholder="file">
        </div>

        <div class="form-group">
          <label>Charge</label>
          <input type="text" name="charge" vlaue="<?php echo $fetch->charge;?>" class="form-control" data-bvalidator="required,number" placeholder="Enter Charge" >
        </div>

        <div class="form-group">
          <label>Driver : </label>
          <?php
          $driver=$fetch->driver
          ?>
          <input type="radio" name="driver" value="Yes"<?php
          if($driver="yes"){
            echo"checked";
          }?>> Yes 
          <input type="radio" name="driver" value="NO"<?php
          if($driver=="no"){
            echo"checked";
          }?>> No
        </div>

        <div class="form-group">
          <label>ADDRESS</label>
          <textarea id="" name="address" cols="30" rows="7" class="form-control"data-bvalidator="required" placeholder="address"><?php echo $fetch->address;?></textarea>
        </div>
        <div class="form-group">
          <label>DEPOSITE</label>
          <input type="text" name="deposite" value="<?php echo $fetch->deposite;?>"class="form-control" data-bvalidator="required,number" placeholder="deposite">
        </div>

        <div class="form-group">
          <label>Terms And Conditions</label>
          <input type="text" name="terms_condition" value="<?php echo $fetch->terms_condition;?>" class="form-control"data-bvalidator="required" placeholder="Enter Terms And Conditions"
         >
        </div>

        <div class="form-group">
          <select name="location_id" class="form-control"data-bvalidator="required">
            <option>----- Select Location -----</option>
            <?php
							foreach($loc_arr as $d)
              {
              if($d->location_id ==$fetch->location_id)
							{
							?>
           <option value="<?php echo $d->location_id;?>"selected><?php echo $d->name;?></option>

            <?php
              }else
              {
                ?>
            <option value="<?php echo $d->location_id;?>"><?php echo $d->name;?></option>

            </option>
            <?php	
							}
            }
            
							?>
          </select>
        </div>
        
        <div class="form-group">
          <select name="category_id" class="form-control" required="">
            <option>----- Select Location -----</option>
            <?php
            {
							foreach($cat_arr as $d)
              if($d->category_id==$fetch->category_id)
							{
							?>
            <option value="<?php echo $d->category_id;?>"selected><?php echo $d->category_name;?></option>
            <?php
              }else{
                ?>
           <option value="<?php echo $d->category_id;?>"selected><?php echo $d->category_name;?></option>


            </option>
            <?php	
							}
							?>
              <?php
            }
            ?>
          </select>
        </div>
      

                                        
                                        <input type="submit" name="save" class="btn btn-primary" name="Submit">
                                       
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
