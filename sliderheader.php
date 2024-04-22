<?php
include "connection.php";
$sql = "select * from tbl_slider";
$result = mysqli_query($con, $sql);

?>
<!--slider start-->
<div class="container">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src='asset/image/slider6.jpg' class="d-block w-100 slider_size" alt="...">
      </div>
      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="carousel-item">
          <img src=' . str_replace("./", "./admin/", $row["sl_img"]) . ' class="d-block w-100 slider_size"
            alt="...">
        </div>';
          ?>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <?php
        }
      } else {
        echo '<p>NO DATA FOUND</p>';
      }
      ?>
    </div>
  </div>
</div>
<!--slider end-->