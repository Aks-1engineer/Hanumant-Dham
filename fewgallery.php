<?php
include "connection.php";
$sql = "select * from tbl_gallery limit 4";
$result = mysqli_query($con, $sql);

?>
<!--few gallery image-->
<div class=" container text-center text-white border border-1 p-5 border-warning my-5 " id="aboutgallery">
   <div class="row">
      <p class="fs-5 text-uppercase fw-bold">some gallery images</p>
      <?php
      if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      echo '<div class="col-sm-3 mb-5" data-aos="fade-up" data-aos-duration="2000"><img src="'.str_replace("./","./admin/",$row["gall_image_name"]).'"
      class="w-100 gallery" style="height:300px;"/>
</div>';
  ?>
      <!-- <div class="col-sm-3" data-aos="fade-up" data-aos-duration="1500"><img src="asset/image/card3.jpg"
            class="w-100 gallery" /></div>
      <div class="col-sm-3" data-aos="fade-up" data-aos-duration="1000"><img src="asset/image/card6.jpg"
            class="w-100 gallery" /></div>
      <div class="col-sm-3" data-aos="fade-up" data-aos-duration="500"><img src="asset/image/card7.jpg"
            class="w-100 gallery" /></div> -->
            <?php
     }
  }
  else
  {
    echo '<p>NO DATA FOUND</p>;';
  }
  ?>
   </div>

   <a href="gallery.php" class="btn ReadMore mt-1">See All</a>
</div>
<!--few gallery image end-->