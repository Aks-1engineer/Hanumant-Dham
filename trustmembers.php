<?php
include "connection.php";
$sql="select * from tbl_trustmember";
$result=mysqli_query($con,$sql);

?>
<!--about trust members start-->
<div class=" container text-center border border-1 p-5 border-warning my-5 text-white" id="abouttrustmembers">
  <div class="row">
  <p class="fs-5 text-uppercase fw-bold">Trust members details</p>
  <?php
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {

   
 
  ?>
    <div class="col-md-3 my-2"  data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
      <div class="card">
        <img src='<?php echo str_replace("./","./admin/",$row["tm_img"]);?>' class="card-img-top img-thumbnail" alt="..." style="height:200px;">
        <div class="card-body card-body-size">
          <h5 class="card-title"><?php echo $row['tm_name'];?></h5>
          <p class="card-text text-center">
          <?php echo $row['tm_text'];?>
            <a href="#" class="btn ReadMore" onclick="readMore();">Know more</a>
          </p>
        </div>
      </div>
    </div>
    <!-- <div class="col-md-3"  data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
      <div class="card">
        <img src="asset/image/dummy3.jpg" class="card-img-top card-images-height" alt="...">
        <div class="card-body card-body-size">
          <p class="card-text text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, animi!
            <a href="#" class="btn ReadMore">Know more</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-3"  data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
      <div class="card">
        <img src="asset/image/dummy3.jpg" class="card-img-top card-images-height" alt="...">
        <div class="card-body card-body-size">
          <p class="card-text text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, aut?
            <a href="#" class="btn ReadMore">Know more</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-3"  data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
      <div class="card">
        <img src="asset/image/dummy3.jpg" class="card-img-top card-images-height" alt="...">
        <div class="card-body card-body-size">
          <p class="card-text text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, aut?
            <a href="#" class="btn ReadMore">Know more</a>
          </p>
        </div>
      </div>
    </div> -->
    <?php
     }
  }
  else
  {
    echo '<p>NO DATA FOUND</p>;';
  }
  ?>
  </div>
</div>
<!--about trust members end-->