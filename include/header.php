<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jomolhari&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="camera-slider/camera.css">
    <link rel="stylesheet" href="css/pre.css">
    <link rel="stylesheet" href="lightbox/css/lightbox.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="preloader">
        <div class="loading">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    
    <nav id="nav" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php"><img src="pics/main-logo.png" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="text-white"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link d-inline-block font-weight-bold mx-2" href="index.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block font-weight-bold mx-2" href="about.php">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block font-weight-bold mx-2 nav-serv" href="service.php">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block font-weight-bold mx-2 nav-gallery" href="gallery.php">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block font-weight-bold mx-2" href="member.php">MEMBERSHIP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block font-weight-bold mx-2" href="contact.php">CONTACT US</a>
            </li>
          </ul>
          <div class="donate">
            <button type="button" data-toggle="modal" data-target=".donate-form">DONATE NOW</button>
          </div>
        </div>
      </nav>


<!-- =========================================== Modal Box ============================ -->

<div class="modal fade donate-form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
        <button style="outline:none" type="button" class="close text-white d-inline-block ml-auto mr-4 mt-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
     <div class="container">
         <div class="modal-title container d-flex align-items-center justify-content-between py-4 px-5 flex-wrap">
            <div class="image">
                <img src="pics/modal-img.png" height="60px">
             </div>
             <div class="text text-center">
                <h1 class="font-weight-bold text-white">Donation Form</h1>
                <h5 class="text-white">Fill in the form below to donate to our organization</h5>
             </div>  
         </div>
         <div class="container px-4">
           <h5 class="text-white">Donor Information</h5>
           <form class="form" method="POST" action="#">
             <div class="row no-gutters mt-4">
               <div class="col-lg-6">
                 <input type="text" class="form-control" placeholder="Business Name">
               </div>
               <div class="col-lg-6">
                 <input type="text" class="form-control" placeholder="Full Name">
               </div>
               <div class="col-lg-6">
                 <input type="text" class="form-control" placeholder="Street Address">
               </div>
               <div class="col-lg-6">
                 <input type="email" class="form-control" placeholder="Email">
               </div>
               <div class="col-lg-6">
                  <input type="text" class="form-control" placeholder="City, State, Zip">
                </div>
                <div class="col-lg-6">
                  <input type="number" class="form-control" placeholder="Phone">
                </div>
                <div class="col-lg-6">
                 <input type="text" class="form-control" placeholder="Website">
               </div>
               <div class="col-lg-6">
                 <input type="number" class="form-control" placeholder="Alternate Phone">
               </div>
             </div>
             <h5 class="text-white mt-5 mb-3">Donation Description</h5>
             <div class="check text-white d-flex  justify-content-between align-items-center">
                <span class="text-white">Check One</span>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Cash</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Product/Item</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Service</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                  </div>
             </div>
              <div class="row no-gutters mt-3">
                  <div class="col-lg-9">
                    <input class="form-control" type="text" placeholder="Amount/Description">
                  </div>
                  <div class="col-lg-3">
                    <input class="form-control" type="text" placeholder="Date">
                  </div>
                  <div class="col-lg-12">
                    <textarea style="height:150px" placeholder="Notes" class="form-control" name="notes" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="col-lg-12">
                    <button class="button my-4">DONATE !</button>
                  </div>
                </div>
           </form>
        </div>
        
     </div>
    </div>
  </div>
</div>
