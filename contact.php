<?php
include "header.php";
include "connection.php";
$m = 0;
if(isset($_POST['submit'])) 
{
    if(($_POST['fname']=="")||($_POST['email']=="")||($_POST['mobile']=="")||($_POST['msg']=="") )
    {
        echo '<script type ="text/JavaScript"> alert("Fill All The Fields"); </script>';
    }
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $msg = $_POST['msg'];
    $sql="insert into tbl_contact(c_fname,c_email,c_mobile,c_msg,date) values('$fname','$email','$mobile','$msg',now())";
    if(mysqli_query($con,$sql))
    {
        $m=1;
    }
}
?>

<!--Contact section start -->
<div class="container">
    <div class="row mt-2 menubar border border-1 border-warning">
        <div class="col-sm-12" class="text-center">
            <p class="fs-5 text-uppercase fw-bold text-center text-white">Contact us</p>
        </div>
        <small>
        <?php
        if ($m) {
          echo "<div class='alert alert-success alert-dismissible fade show w-50' role='alert'>
    <strong>Thank You !</strong>Your Message Send Successfully.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
        }
        ?>
      </small>
        <div class="col-md-6">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" placeholder="Enter your full name" class="form-control" name="fname"
                            autocomplete="off">
                    </div>
                    <!-- <div class="col-sm-6">
                            <input type="text" placeholder="Enter last name" class="form-control" name="lname" required>
                        </div> -->
                </div>
                <div class="row ">
                    <div class="col-sm-6 mt-4">
                        <input type="email" placeholder="enter email" class="form-control" name="email"
                            autocomplete="off">
                    </div>
                    <div class="col-sm-6 mt-4">
                        <input type="number" placeholder="Enter mobile no" class="form-control" name="mobile"
                            autocomplete="off">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <textarea name="msg" id="" cols="30" rows="6" class="form-control my-textarea"
                            placeholder="write here your message" autocomplete="off" requiredn
                            style=" resize: none;"></textarea>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-12">
                        <input type="submit" value="Send Message" class="btn ReadMore mt-1 form-control" name="submit">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 content-right pb-5">
                    <div class="content-inner-right  text-white">
                        <img src="asset/image/card6.jpg" class="d-block mx-auto w-25">
                        <p class="fs-5 text-uppercase fw-bold text-center text-white">HANUMANT DHAM,LUCKNOW(UTTAR
                            PRADESH)</p>

                        <p class="text-center"><i class="fa-solid fa-phone font-awesome-icon"></i>06276-222264
                            <br><i class="fa-solid fa-envelope font-awesome-icon"></i>
                            mailus:info@hanumantdhamlko.in
                            <br>
                            <i class="fa-solid fa-location-dot font-awesome-icon"></i>Hanumant Dham <br>
                            KD Singh Stadium Metro Station, <br>Lucknow,
                            Uttar Pradesh 847211
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!--Contact section end-->

<!--Location start-->
<div class="container my-2">
    <div class="row">
        <div class="col-md-12 border border-1 border-warning">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113902.05595544481!2d80.79094684335938!3d26.85778219999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bff28303f39e1%3A0xc82066418928f3b4!2sHanumant%20Dham!5e0!3m2!1sen!2sin!4v1701295840677!5m2!1sen!2sin"
                style="border:0;" allowfullscreen="" loading="lazy" width="100%" height="300px"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!--Location end-->

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