<?php
include "header.php";
include("connection.php");
$query = "select * from tbl_donate";
$result = mysqli_query($con, $query);
?>

<!--Qr code start -->
<div class="container">
<?php
                if(mysqli_num_rows($result)>0)
                {
               
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
            
               
                <div class="row">
                <div class="col-sm-6 col-12 text-center">
                <p class="fs-5 text-uppercase fw-bold text-center text-white">Scan Qr Code</p>
                    <img src='<?php echo str_replace("./","./admin/",$row["b_qr"]);?>' alt="" style="height:290px;width:100%;" >
                </div>
                <div class="col-sm-6 col-12 text-center">
                <p class="fs-5 text-uppercase fw-bold text-center text-white">Bank Details</p>
                    <table class="table border border-5 table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"  >S.No.</th>
                                <th scope="col" >Fields</th>
                                <th scope="col" >Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Bank Name</td>
                                <td><?php echo $row['b_name']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>District</td>
                                <td><?php echo $row['b_district']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Branch</td>
                                <td><?php echo $row['b_branch']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Account No</td>
                                <td><?php echo $row['b_accno']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>I.F.S.C Code</td>
                                <td><?php echo $row['b_ifsc']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Bank Holder Name</td>
                                <td><?php echo $row['b_hname']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php
             }
            }
            else
            {

            
                ?>
            </table>
            <?php
            echo '<div class=" text-center text-white fs-5">No data found</div>';
            }
            ?>
         
    
</div>
<!--Qr code end-->

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