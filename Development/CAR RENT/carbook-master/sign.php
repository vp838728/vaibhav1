<?php
if(isset($_SESSION['user_id']))
{

	echo "
		<script>
		window.location='index';
		</script>
		";
}
include_once('heder.php')
?>

<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#form1').bValidator();
    });
    


	</script>  

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
                    <h3 class="text-center">sign up</h3>

                    <form action="" id="form1" method="post" enctype="multipart/form-data"class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" data-bvalidator="required,alpha" placeholder="Your Name">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="unm" id="unm" data-bvalidator="required,rangelength[3:8]" placeholder="Your USERNAME">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" id="pass" data-bvalidator="required,number" placeholder="password">
                        </div>
                        <div class="form-group">
                            gen:
                            <input type="radio" name="gen" class="gender" onclick = "myCourseFunction(this.value)"   value="male">Male
                            <input type="radio" name="gen" class="gender" onclick = "myCourseFunction(this.value)"  value="female">female
                        </div>
                        <div class="form-group">
                            lag:
                            <input type="checkbox" name="lag[]" value="Gujarati">Gujarati
                            <input type="checkbox" name="lag[]" value="HINDI">HINDI
                            <input type="checkbox" name="lag[]" value="ENGLISH">ENGLISH
                        </div>


                        <div class="form-group">
                            <input type="file" name="file_upload" data-bvalidator="required,image" id="file_upload" class="form-control">
                        </div>
                        <div class="from-group">
                            <select name="cid" class="form-control" require="">
                                <option>------SELECT COUNTRY-----</option>
                                <?php
                                foreach ($countries_arr as $c)
                                 {
                                    ?>
                                <option value="<?php echo $c->cid;?>">
                                    <?php echo $c->Name;?>
                                </option>
                                <?php
                                 }
                                 ?>
                            </select>


                            </select>
                        </div>
                                </br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning py-3 px-5 " name="submit" value="submit">
                        </div>
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


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">About</a></li>
                        <li><a href="#" class="py-2 d-block">Services</a></li>
                        <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                        <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Customer Support</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">FAQ</a></li>
                        <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                        <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                        <li><a href="#" class="py-2 d-block">How it works</a></li>
                        <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View,
                                    San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                        210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
                    made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>
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
 <!-- <script src="jquery.bvalidator.js" type="text/javascript"></script>  -->
 <script src="js/jquery.bvalidator.js" type="text/javascript"></script>



 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>





</body>

</html> 