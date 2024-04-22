<?php
include "connection.php";
$sql = "select * from tbl_video limit 1";
$result = mysqli_query($con, $sql);

?>
<!--Explore more start-->
<div class=" container text-center text-white border border-1 p-5 border-warning my-5 " id="aboutvideo">
  <div class="row">
    <p class="fs-5 text-uppercase fw-bold">Explore more about hanumant dham</p>
    <hr class="w-75 mx-auto">
    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-12 col-sm-12" data-aos="flip-up">
          <?php
          echo $row['v_name'];
      }
    } else {
      echo '<p>NO DATA FOUND</p>;';
    }
    ?>
    </div>
    <div class="col-md-6 mx-auto">
    <a href="video.php" class="btn ReadMore">See All</a>
    </div>
  </div>
</div>

<!--Explore more end-->
<!-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/Mi_L3MmRpwA?si=4RVxqUa9_kiZWLwO"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe> -->