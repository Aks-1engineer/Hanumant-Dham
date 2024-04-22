<?php
include "header.php";
include "connection.php";
$sql = "select * from tbl_event";
$result = mysqli_query($con, $sql);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-10 mx-auto border border-1 border-warning">
            <p class="event-heading fs-5 text-center fw-bold text-uppercase text-white"> Current Events </p>

            <marquee direction="up" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();"
                style=" height:400px;text-align: justify;">
                <ul style="line-height: 36px;">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo ' <li>
                            <div class="lside text-white">
                                <img src="'.str_replace("./","./admin/",$row["e_img"]).'" alt="" class="img-thumbnail"
                                    style="height:200px;width:300px;display:inline;">
                                <p class="text-white d-inline">'.$row['e_title'].'</p> ||
                                <p class="text-white d-inline">'.$row['e_time'].'</p>  ||
                                <a href="'.str_replace("./","./admin/",$row["e_desc"]).'" class="text-white">Event Description</a>
                            </div>
                        </li>
                        <br>';
                            ?>
                           <!--  
                            <li>
                        <div class="lside text-white">
                            <img src="admin/gallery/amitprofil.jpg" alt="" class="img-thumbnail"
                                style="height:100px;width:100px;display:inline;">
                                <a href="" class="text-white">Event Title</a> ||
                                <a href="" class="text-white">Event Time</a>||
                                    <a href="" class="text-white">Event Details</a>
                        </div>
                    </li>
                    <br>
                   
                    <li>
                    <div class="lside text-white">
                            <img src="admin/gallery/amitprofil.jpg" alt="" class="img-thumbnail"
                                style="height:100px;width:100px;display:inline;">
                                <a href="" class="text-white">Event Title</a> ||
                                <a href="" class="text-white">Event Time</a>||
                                    <a href="" class="text-white">Event Details</a>
                        </div>
                    </li>
                    <br>
                    <li>
                    <div class="lside text-white">
                            <img src="admin/gallery/amitprofil.jpg" alt="" class="img-thumbnail"
                                style="height:100px;width:100px;display:inline;">
                                <a href="" class="text-white">Event Title</a> ||
                                <a href="" class="text-white">Event Time</a>||
                                    <a href="" class="text-white">Event Details</a>
                        </div>
                    </li>
                    <br>
                    <li>
                    <div class="lside text-white">
                            <img src="admin/gallery/amitprofil.jpg" alt="" class="img-thumbnail"
                                style="height:100px;width:100px;display:inline;">
                                <a href="" class="text-white">Event Title</a> ||
                                <a href="" class="text-white">Event Time</a>||
                                    <a href="" class="text-white">Event Details</a>
                        </div>
                    </li> -->
                      
                    <?php
                        }
                    } 
                    else {
                        echo '<p>NO DATA FOUND</p>;';
                    }
                    ?>
                      </ul>
                    </marquee>

        </div>

    </div>


</div>

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

<?php
include "footer.php";
?>