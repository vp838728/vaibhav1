<?php
if(isset($_SESSION['user_id']))
{

}
else{
echo "
        <script>
        alert('Login First...');
        window.location='login';
        </script>
        ";
}
include_once('heder.php')
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

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">

            <div class="col-md-12 block-9 mb-md-5">
                <div class="contact-from-top">
                    <h3 class="text-center">booking your car</h3>
                    <form action="" method="post" enctype="multipart/form-data" onsubmit="return validate()"
                        class="bg-light p-5 contact-form">



                        <div class="from-group">
                            <!-- <select name="cid" class="form-control" require=""> -->
                            <select name="location_id" class="form-control" required="">
                                <option>----- Select Location -----</option>
                                <?php
				foreach($loc_arr as $i)
				{
				?>
                                <option value="<?php echo $i->location_id?>">
                                    <?php echo $i->name?>
                                </option>
                                <?php	
				}
				?>
                            </select>
                        </div>
                        </br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning py-3 px-5 " name="submit" value="submit">
                        </div>
                    </form>
                    
		<div class="row why-grids">	
		
        <?php
         if(isset($_REQUEST['submit']))
         {
             $search=$_REQUEST['location_id'];
             $car_arr=$this->select_search('caradv','location_id',$search);
         if($car_arr){
            foreach($car_arr as $c)
            {
        ?>	
                    
        <table width="100%">
            <tr>
            <td rowspan="5"width="500px" height="200px"><img src="UPLOAD/CARADV/<?PHP echo $c->file;?>"width="500px"height="200px"alt="imges"></td>

                <td>Car Name : <?php echo $c->car_name?></td>
                <td rowspan="5"><a href="booking?book_id=<?php echo $c->adv_id;?>" class="btn btn-warning">Book</a></td>
            </tr>
            <tr>
                <td >Vehicle Number : <?php echo $c->vehical_number?></td>
            </tr>
            <tr>
                <td>Address : <?php echo $c->address?></td>
            </tr>
            <tr>
                <td>Deposite : <?php echo $c->deposite?></td>
            </tr>
            <tr >
                <td>Charge(per km) : <?php echo $c->charge?></td>
            </tr>
            <tr>
                <td colspan="3">-----------------------------------------------------------------------------------------------------------------------</td>
            </tr>
            </table>
        
        
        <?php	
            }} else
            {
                echo "
                <script>
                alert('Sorry.. Cars not available in this area..');
                window.location='book';
                </script>
                ";
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

<?php 
include_once('footer.php');
?>