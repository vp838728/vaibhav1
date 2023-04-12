<?php
if(isset($_SESSION['user_id'])){

}
else
{
    
	echo "<script>
	window.location='index';
	</script>";
}
include_once('heder.php');
?>

    



    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <h4><i class="fas fa-user" aria-hidden="true"></i></h4>
                    <P class="id">ID:<?php echo $fetch->user_id;?></P>
                    <p class="name">NAME:<?php echo $fetch->name;?></p>
                    <p class="gender">GEN:<?php echo $fetch->gen;?></p>
                    <p class="languge">LAG:<?php echo $fetch->lag;?></p>
                    <p><a href="edit?edit_user_id=<?php echo $fetch->user_id?>" class="btn btn-primary">Edit</a></p>
     
                    <!-- <P><a href="#" class="btn btn-primary">Edit</a></P> -->
                    <span class="position">PHP Developer</span>
                   </div>
                </div>
              
              
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    include_once('footer.php');
    ?>
