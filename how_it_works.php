<?php include 'include/header.php';?>
    <!-- banner -->
    <section class="inner-pages py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="sub-title inner-page-tilte">
                    How it works
                    </h1>
                </div>
            </div>
            <div class="row mt-5 d-flex mb-4 announcement">
                <div class="col-sm-12 mb-12 text-center">
                    <h2 class="in-sub-title">
                        <small>Lorem ipsum began as scrambled, </small><br>
                        Nonsensical Latin derived from Cicero's 1st-century BC text De Finibus Bonorum et Malorum.
                    </h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <div class="for-video mt-3" data-toggle="modal" data-target="#about-videModal">
                        <img src="assets/images/how_it_works.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="about-videModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body vid-popup">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="about-videModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <video width="100%" controls poster="assets/images/car.jpg" height="320px" id="video">
                        <source src="assets/video/video.mp4" type="video/mp4">
                        <source src="assets/video/video.mp4" type="video/ogg">
                    </video>
                </div>
            </div>
        </div>
    </div>
<?php include 'include/footer.php';?>