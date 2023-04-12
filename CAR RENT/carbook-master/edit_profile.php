<?php
if(isset($_SESSION['user_id']))
{
	
}
else
{
	echo "<script>
	window.location='index';
	</script>";
}
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
                <h1 class="mb-3 bread " >EDIT PROFILE</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-4">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-map-o"></span>
                            </div>
                            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-mobile-phone"></span>
                            </div>
                            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-envelope-o"></span>
                            </div>
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 block-9 mb-md-5">
                <div class="contact-from-top">
                    <h3>EDIT PROFILE</h3>
                    <form action="" method="post" enctype="multipart/from-data" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="<?php echo $fetch->name;?>" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="unm" value="<?php echo $fetch->unm;?>" placeholder="Your USERNAME">
                        </div>
                        <div class="form-group">
                            gen:
                            <?php
                            $gen=$fetch->gen;
                            ?>
                            <input type="radio" name="gen" value="male"<?php
                            if($gen=="male")
                            {
                                echo"checked";
                            }?>>male
                            <input type="radio" name="gen" value="female"> <?php
                            if($gen=="female")
                            {
                                echo"checked";
                            }?>female
                        </div>
                        <div class="form-group">
                            lag:
                            <?php
                            $lag=$fetch->lag;
                            $lag_arr=explode(",",$lag);
                            ?>
                            <input type="checkbox" name="lag[]" value="HINDI"<?php
                            if(in_array("HINDI",$lag_arr))
                            {
                                echo"checked";
                            }
                            ?>>HINDI
                            <input type="checkbox" name="lag[]" value="ENGLISH"<?php
                            if(in_array("ENGLISH",$lag_arr))
                            {
                                echo"checked";
                            }
                            ?>>ENGLISH
                            <input type="checkbox" name="lag[]" value="Gujarati"<?php
                            if(in_array("Gujarati",$lag_arr))
                            {
                                echo"checked";
                            }
                            ?>>Gujarati
                        </div>
                        </br>
                        </br>
                        
                        
                        <div class="form-group">
                            <input type="file" name="file_upload" class="form-control" require="">
                            <img src="UPLOAD/USER1/<?php echo $fetch->file_upload?>"width="50px">
                         </div>
                         <div class="from-group">
                            <select name="cid" class="form-control" require="">
                                <option>------SELECT COUNTRY-----</option>
                                <?php
                                foreach ($countries_arr as $c)
                                 {
                                    if($c->cid==$fetch->cid)
                                    {
                                    ?>
                                  <option value="<?php echo $c->cid;?>"selected><?php echo $c->Name;?></option>
                                  <?php
                                 }else
                                 {
                                 ?>
                                <option value="<?php echo $c->cid?>"><?php echo $c->Name?></option>
                                 <?php
                                 }
                                }
                                ?>                                            
                                 </select>
                                    
                                
</select>
                           </div>
                           <div class="form-group">
                           <input type="submit" name="save" value="save"  class="btn btn-warning py-3 px-5" >
</div>
                        <!-- <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control"
                                placeholder="Message"></textarea>
                        </div> -->
                        <!-- <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div> -->
                    </form>

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