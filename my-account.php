<?php include 'include/header2.php';?>
    <!-- banner -->
    <section class="inner-pages py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="dashboard">
                        <div class="row m-0">
                            <?php include 'include/dashboard-left-nav.php';?>
                            <div class="col-sm-9 p-4 right-cont">
                                <h2 class="das-top-title mb-4">
                                    My Accounts
                                </h2>
                                <div class="d-block featured publish-ad">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="tab-content">
                                                <div class="tab-pane show active">
                                                    <form class="add-details mt-5">
                                                        <div class="row">
                                                            <div class="col-sm-12 text-center mb-5">
                                                                <div class="for-profile-image">
                                                                    <input type='file' id="imgInp" />
                                                                    <img id="blah" src="assets/images/u-profile.jpg" alt="your image" /><br>
                                                                    <span><img src="assets/images/pencile.png" alt=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" placeholder="First Nane">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" placeholder="Last Name">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" placeholder="Email">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" placeholder="Phone Number">
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <textarea name="" id=""  rows="6" class="form-control" placeholder="Address"></textarea>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" placeholder="City">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" placeholder="Sate">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" placeholder="Zipcode">
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <button class="btn btn-oarnge">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
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