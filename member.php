<?php include('include/header.php');?>

<!-- ======================================= Breadcrumbs =========================== -->

<section class="breadcrumbs member">
    <div class="container">
        <h1 class="display-4">Membership</h1>
        <h5 class="font-weight-bold text-white mt-3"><a class="mr-2" href="index.php">Home</a> / <span class="span ml-2">Membership</span></h5>
    </div>

</section>

<!-- ======================================= Be a volunteer =========================== -->

<section class="join-now section-padding">
    <div class="container">
        <h1 class="display-3 text-center text-white">Become A Member</h1>
        <h4 class="text-center my-5">BuddyPress lets users sign-up and start creating profiles, posting messages, making connections, creating groups, and much more...</h4>
        <div class="button text-center mt-5 wow bounceInDown animated">
        <button type="button" data-toggle="modal" data-target=".member-modal">Join Now !</button>
        </div>
    </div>
</section>


<!-- =========================================== Modal Box ============================ -->

<div class="modal fade member-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
        <button style="outline:none" type="button" class="close text-white d-inline-block ml-auto mr-4 mt-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
     <div class="container">
         <div class="modal-title d-flex align-items-center justify-content-between p-4 flex-wrap">
             <div class="image">
                <img src="pics/modal-img.png" height="60px">
             </div>
             <div class="text text-center">
                <h1 class="font-weight-bold text-white">Volunteer Application</h1>
                <h5 class="text-white">Fill in the form below to volunteer to our organization</h5>
             </div>  
         </div>
        <form class="form container px-5 text-white" action="#" method="POST">
            <div class="row">
                <div class="col-lg-12">
                    <input type="text" name="name" placeholder="Your Name" class="form-control">
                </div>
                <div class="col-lg-6 pt-4">
                    <input type="email" name="email" placeholder="Your Email" class="form-control">
                </div>
                <div class="col-lg-6 pt-4">
                    <input type="tel" name="number" placeholder="Your Number" class="form-control">
                </div>
                <div class="col-lg-12 pt-4">
                    <input type="text" name="address" placeholder="Your Address" class="form-control">
                </div>
                <div class="col-lg-6 pt-4">
                    <input type="text" name="city" placeholder="Your City" class="form-control">
                </div>
                <div class="col-lg-6 pt-4">
                    <input type="text" name="state" placeholder="State / Province" class="form-control">
                </div>
                <div class="col-lg-6 pt-4">
                    <h6>Which days of the week do you want to work?</h6>
                </div>
                <div class="col-lg-3 pt-4">
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="1" id="check1">
                                Monday
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                Tuesday
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                Wednesday
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                Thursday
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 pt-4">
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                Friday
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                Saturday
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                Sunday
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4">
                    <h6 class="mt-2">Enter a range of work hours per week</h6>
                </div>
                <div class="col-lg-3 pt-4">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="From">
                    </div>
                </div>
                <div class="col-lg-3 pt-4">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="To">
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <h6>Upload your recent photo</h6>
                </div>
                <div class="col-lg-8 pt-4">
                    <div class="form-group d-flex align-items-center">
                        <input type="file" class="form-control-file">
                    </div>
                </div>
                <div class="col-lg-12 py-5">
                    <button class="button" type="submit">Submit</button>
                </div>
            </div>
        </form>
     </div>
    </div>
  </div>
</div>

<!-- =========================================== Counting Members ============================ -->

<section class="counting section-padding">
    <div class="container">
        <h2 class="text-center text-white">3600 members & counting...</h2>
        <nav>
            <div class="nav nav-tabs mt-4" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Active</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Popular</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Newest</a>
            </div>
            </nav>
            <div class="tab-content mt-4" id="nav-tabContent">
            <div class="tab-pane fadeIn animated show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="photos d-flex flex-wrap">
                    <a href=""><img src="pics/about-2.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/agent-3.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/agent-4.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/agent-5.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/agent-7.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face1.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face2.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face3.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face4.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face5.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face6.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face7.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face4.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face5.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face6.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face7.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/agent-3.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/agent-4.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/agent-5.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/agent-7.jpg" class="img-thumbnail"></a>
                </div>
            </div>
            <div class="tab-pane fadeIn animated" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="photos d-flex flex-wrap">
                    <a href=""><img src="pics/face/face6.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face7.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face4.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face5.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face1.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face2.jpg" class="img-thumbnail"></a>
                </div>
            </div>
            <div class="tab-pane fadeIn animated" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="photos d-flex flex-wrap">
                    <a href=""><img src="pics/face/face1.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face2.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face3.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face6.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face7.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face4.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/face/face5.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/agent-5.jpg" class="img-thumbnail"></a>
                    <a href=""><img src="pics/agent-7.jpg" class="img-thumbnail"></a>
                </div>
            </div>
            </div>
    </div>
</section>






<?php include('include/footer.php');?>