<?php

include "header.php";

?>

<!--Video start -->
<p class="fs-5 text-uppercase fw-bold text-center text-white">Videos</p>
<hr class="w-75 mx-auto">
<div class="container pb-5">
    <div class="row">
        <?php
        include "connection.php";
        $query = "select * from tbl_video";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card mb-3">
                        <?php echo $row['v_name']; ?>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<div class='text-danger text-center bg-white fs-3'>Currently Not any videos available</div>";
        }
        ?>

        <!-- <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="card mb-3">
                <iframe src="https://www.youtube.com/embed/WV4sicO5YuQ?si=CHr_B8vOKmOxEgrk" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="w-100">

                </iframe>
            </div>
        </div>
        <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="card mb-3">
                <iframe class="w-100" src="https://www.youtube.com/embed/-CX4-oKO3pM?si=rKOn8LNL9IlZo1_n"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="card mb-3">
                <iframe src="https://www.youtube.com/embed/kJunnAjdZ2Y?si=u74zY6QORfGJWqpi" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="w-100">
                </iframe>
            </div>
        </div>
        <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="card mb-3">
                <iframe src="https://www.youtube.com/embed/kJunnAjdZ2Y?si=u74zY6QORfGJWqpi" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="w-100">
                </iframe>
            </div>
        </div>
        <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="card mb-3">
                <iframe src="https://www.youtube.com/embed/WV4sicO5YuQ?si=CHr_B8vOKmOxEgrk" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="w-100">

                </iframe>
            </div>
        </div> -->
    </div>
</div>
<!--Video end-->

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