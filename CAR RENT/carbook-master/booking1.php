<?php
include_once('heder.php');
?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Contact Us</h1>
            </div>
        </div>
    </div>
</section>


            <div class="col-md-12 block-9 mb-md-5">
                <div class="contact-from-top">
                    <h1 class="text-center my-3">booking your car</h1>
                    <form action="" method="post" enctype="multipart/form-data" class="bg-light p-5 contact-form">
                        
                        
                        
                         <div class="from-group">
                            <select name="cid" class="form-control" require="">
                                <option>------SELECT LOCATION-----</option>
                                <?php
                                foreach ($loc_arr as $d)
                                 {
                                    ?>
                                  <option value="<?php echo $d->location_id;?>"><?php echo $d->name;?></option>
                                  <?php
                                 }
                                 ?>
                                 </select>
                                    
                                
</select>
                           </div>
                                
                                </br>
                           <div class="form-group">
                           <input type="submit" class="btn btn-warning py-3 px-5" name="submit" value="search">
</div>
                        
                    </form>
                    
		<div class="row why-grids">	
		
        <?php
         if(isset($_REQUEST['submit']))
         {
            $search=$_REQUEST['location_id'];
             $caradv_arr=$this->select_search('caradv','location_id',$search);
         if($caradv_arr){
            foreach($caradv_arr as $d)
            {
        ?>	
                    
        <table width="100%">
            

            <tr>
            <td rowspan="5"width="500px" height="200px"><img src="UPLOAD/CARADV/<?PHP echo $d->file;?>"width="500px"height="200px"alt="imges"></td>

                <td>Car Name : <?php echo $d->car_name?></td>
                <td rowspan="5"><a href="booking?BOOKING_ID =<?php echo $d->adv_id;?>" class="btn btn-warning">Book</a></td>
            </tr>
            <tr>
                <td >Vehicle Number : <?php echo $d->vehical_number?></td>
            </tr>
            <tr>
                <td>Address : <?php echo $d->address?></td>
            </tr>
            <tr>
                <td>Deposite : <?php echo $d->deposite?></td>
            </tr>
            <tr>
                <td>Charge(per km) : <?php echo $d->charge?></td>
            </tr>
            <tr>
                <td colspan="3">-----------------------------------------------------------------------------------------------------------------------</td>
            </tr>
            </table>
        
        
        <?php	
            }} else
            {echo "fail";
                // echo "
                // <script>
                // alert('Sorry.. Cars not available in this area..');
                // window.location='booking1';
                // </script>
                // ";

            }
        }
        ?>
    </div>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
</section>







<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>

</html>
<?php
include_once('footer.php');
?>