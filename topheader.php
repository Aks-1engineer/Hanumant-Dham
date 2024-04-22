<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hanumant Dham Lucknow|| Home </title>
  <!--Bootstrap css link start-->
  <link rel="stylesheet" href="asset/css/bootstrap.css">
  <!--Bootstrap css link end-->
  <!--Custom css link start-->
  <link rel="stylesheet" href="asset/css/style.css">
  <!--Custom css link end-->

  <!--bootstrap font icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!--bootstrap font icon end-->
  <!--font awesome cdn link start-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--font awesome cdn link end-->
  <script src="asset/js/jquery.min.js"></script>
  <!--Animation link start-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--Animation link end-->

  <style>
    .slider_size {
      height: 55vh;
    }

    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 25px;
      border: none;
      outline: none;
      background-color: white;
      color: #e7540e;
      cursor: pointer;
      padding: 5px;
      border-radius: 50%;
    }

    #myBtn:hover {
      background-color: #e7540e;
      color: white;
    }

  </style>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><span><i
        class="bi bi-arrow-up-circle"></i></span></button>

  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    
  $("document").ready(function(){
  
  $("iframe").attr({
    "width" : "100%",
    "height" : "400px"
  });
  $("#location").children("iframe").attr({
    "width" : "75%",
    "height" : "75%"
  });
   

});

  </script>

  <!--Scroll to top icon end-->


</head>

<body class="body_cover bg-secondary" style=" background-image: url(asset/image/bg2images.jpg);">
  <!-- Simple audio playback -->
  <!-- <div class="text-center">
    <audio controls src="hanumanchalisha.mp3" autoplay>
      <a href="hanumanchalisha.mp3">Download</a>.
    </audio>
  </div> -->
  <!--top header start-->
  <div class="container">
    <div class="row text-center text-white m-0">

      <div class="col-md-4">
        <marquee behavior="" direction="right" scrollamount="5" onmouseover="stop()" onmouseleave="start()">
          <i class="fa-solid fa-phone"></i>Call Us:<a href="tel:7985287508" class="topbar">7985287508</a>
        </marquee>
      </div>
      <div class="col-md-4">
        <marquee behavior="" direction="" scrollamount="5" onmouseover="stop()" onmouseleave="start()">
          <i class="fa-solid fa-envelope"></i>Mail Us:<a href="mailto:amit@gmail.com"
            class="topbar">hanumandham@gmail.com</a>
        </marquee>
      </div>
      <div class="col-md-4">
        <marquee behavior="" direction="right" scrollamount="5" onmouseover="stop()" onmouseleave="start()">
          <i class="fa-solid fa-location-pin"></i>Hanuman Dham Lucknow, Uttar Pradesh-201340
        </marquee>
      </div>

    </div>
  </div>
  <!--top header end-->
  <!--logo ,name,social icone start-->
  <div class="container" >
    <div class="row my-2">
      <div class="col-md-2 col-12 text-center ">
        <img src="asset/image/logo1.jpeg" alt="Bootstrap" width="150" height="120" class="rounded-circle">
      </div>
      <div class="col-md-5 col-12 text-center text-white">
        <p>
          <span class="fs-3 text-uppercase fw-bold"> Hanumant Dham Lucknow</span> <br>
          Hanuman Setu, Babuganj, Hasanganj, Lucknow, Uttar Pradesh 226003, India.
        </p>
      </div>
      <div class="col-md-5 col-12">
        <ul class="search-icon mt-3">
          <li><a href="https://www.facebook.com/p/Hanumant-Dham-Journey-of-Spirituality-100084872232833/" target="_blanks" class="text-white"><i class="fa-brands fa-facebook fa-shake" title="facebook"></i></a></li>
          <li><a href="https://twitter.com/surajitdasgupta/status/1644915241552334849" target="_blanks" class="text-white"><i class="fa-brands fa-twitter fa-shake" title="twitter"></i></a></li>
          <li><a href="https://www.linkedin.com/posts/viresh-mitra-69759036_hanumant-dham-lucknow-%E0%A4%B2%E0%A4%96%E0%A4%A8%E0%A4%8A-%E0%A4%95-%E0%A4%B8%E0%A4%A6%E0%A4%B0-%E0%A4%A7%E0%A4%AE-activity-7069613051167014912-i_ZB/" target="_blanks" class="text-white"><i class="fa-brands fa-linkedin-in fa-shake" title="linkedin"></i></a></li>
          <li><a href="https://www.instagram.com/hanumant_dhaam/?hl=en" target="_blanks" class="text-white"><i class="fa-brands fa-instagram fa-shake" title="instagram"></i></a></li>
          <li><a href="tel:7985287508" target="_blanks" class="text-white"><i class="fa-brands fa-whatsapp fa-shake" title="whatsapp"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--logo, name, social icone end-->
  <!--navbar and logo start-->
  <div class="container">
    <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary fs-5 pb-0">
      <div class="container-fluid nav_bg">
        <!-- <a class="navbar-brand" href="#">
                
              </a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link active px-2 text-white" aria-current="page" href="index.php"><span><i
                    class="fa-solid fa-house me-1"></i></span>Home</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link px-4" href="#">About</a>
              </li> -->
            <li class="mt-2">||</li>
            <li class="nav-item dropbox">
              <a href="index.php" class="dropbtn nav-link text-white"><span><i
                    class="fa-solid fa-face-smile me-1"></i></span>About<span><i class="bi bi-chevron-down"></i></span>
              </a>
              <ul class="dropbox-content dropdown-menu">
                <li><a class="dropdown-item" href="#abouttemple">History</a></li>
                <li><a class="dropdown-item" href="#aboutmahant">About Mahant g</a></li>
                <li><a class="dropdown-item" href="#abouttrustmembers">About Trust Members</a></li>
                <li><a class="dropdown-item" href="#aboutgallery">Explore gallery</a></li>
                <li><a class="dropdown-item" href="#aboutvideo">Watch a Video</a></li>
                <li><a class="dropdown-item" href="#footer">Useful Links</a></li>
              </ul>
            </li>
            <li class="mt-2">||</li>
            <li class="nav-item">
              <a class="nav-link px-2 text-white" href="current.php"><span><i
                    class="fa-brands fa-servicestack me-1"></i></span>Current Event</a>
            </li>
            <li class="mt-2">||</li>
            <li class="nav-item">
              <a class="nav-link px-2 text-white" href="gallery.php"><span><i
                    class="fa-solid fa-camera me-1"></i></span>Gallery</a>
            </li>
            <li class="mt-2">||</li>
            <li class="nav-item">
              <a class="nav-link px-2 text-white" href="video.php"><span><i
                    class="fa-solid fa-video me-1"></i></span>Video</a>
            </li>
            <li class="mt-2">||</li>
            <li class="nav-item">
              <a class="nav-link px-2 text-white" href="contact.php"><span><i
                    class="fa-solid fa-address-book me-1"></i></span>Contact us</a>
            </li>
            <li class="mt-2">||</li>
            <li class="nav-item">
              <a class="nav-link px-2 text-white" href="donate.php"><span><i
                    class="bi bi-currency-rupee me-1"></i></span>Donate</a>
            </li>
            <li class="mt-2">||</li>
            <li class="nav-item">
              <a class="nav-link px-2 text-white" href="./admin/index.php">Login</a>
            </li>
            <li class="mt-2">||</li>
            <li class="nav-item">
              <!-- Simple audio playback -->
              <div class="text-center">
                <audio controls src="hanumanchalisha.mp3" class="mt-1" style="width:100px; height:40px;">
                </audio>
              </div>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
            <!-- <li class="nav-item dropbox">
                <a href="" class="dropbtn nav-link">Dropdown<span class="text-primary">V</span>
                </a>
                <ul class="dropbox-content dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                  </ul>
              </li> -->
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--navbar and logo end-->