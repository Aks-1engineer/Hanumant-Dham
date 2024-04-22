<?php
include "header.php";
include "connection.php";
$sql = "select * from tbl_gallery";
$result = mysqli_query($con, $sql);

?>

   <div class="container">
     <!--Gallery start -->
     <p class="fs-5 text-uppercase text-center text-white fw-bold">gallery</p>
    <hr class="w-75 mx-auto">
    <div class="container-fluid pb-5">
      <div class="row">
      <?php
      if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      echo '<div class="col-md-3" data-aos="flip-left"
      data-aos-easing="ease-out-cubic"
      data-aos-duration="2000">
           <div class="card mb-3">
             <img src="'.str_replace("./","./admin/",$row["gall_image_name"]).'" class="card-img-top card-images-height" alt="..." style="height:300px;">
           </div>
         </div>';
      ?>
        <?php
     }
  }
  else
  {
    echo '<p>NO DATA FOUND</p>;';
  }
  ?>
        <!-- <div class="col-md-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
          <div class="card mb-3">
            <img src="asset/image/card2.jpg" class="card-img-top card-images-height" alt="...">
          </div>
        </div>
        <div class="col-md-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
            <div class="card mb-3">
              <img src="asset/image/card6.jpg" class="card-img-top card-images-height" alt="...">
            </div>
          </div>
        <div class="col-md-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
          <div class="card mb-3">
            <img src="asset/image/card7.jpg" class="card-img-top card-images-height" alt="...">
          </div>
        </div>
        <div class="col-md-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
          <div class="card mb-3">
            <img src="asset/image/card6.jpg" class="card-img-top card-images-height" alt="...">
          </div>
        </div>
        <div class="col-md-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
            <div class="card mb-3">
              <img src="asset/image/card1.jpg" class="card-img-top card-images-height" alt="...">
            </div>
          </div>
          <div class="col-md-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
            <div class="card mb-3">
              <img src="asset/image/card2.jpg" class="card-img-top card-images-height" alt="...">
            </div>
          </div>
          <div class="col-md-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
              <div class="card mb-3">
                <img src="asset/image/card6.jpg" class="card-img-top card-images-height" alt="...">
              </div>
            </div>
          <div class="col-md-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
            <div class="card mb-3">
              <img src="asset/image/card7.jpg" class="card-img-top card-images-height" alt="...">
            </div>
          </div>
        <div class="col-md-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
            <div class="card mb-3">
              <img src="asset/image/card6.jpg" class="card-img-top card-images-height" alt="...">
            </div>
          </div> -->
      </div>
    </div>
   </div>
    <!--Gallery end-->

    <!--about temple start-->
<?php
include "history.php";
?>
<!--about temple end-->
<!--about mahant g-->
<?php
include "mahantg.php";
?>
<!--about mahant g end-->
<!--about trust members start-->
<?php
include "trustmembers.php";
?>
<!--about trust members end-->
<!--few gallery image-->
<?php
include "fewgallery.php";
?>
<!--few gallery image end-->

<!--Explore more start-->
<?php
include "exploremore.php";
?>
<!--Explore more end-->

         <!--footer start-->
   <?php
   include "footer.php";
   ?>