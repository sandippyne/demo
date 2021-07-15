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
                                    My Ads
                                </h2>
                                <div class="d-block featured publish-ad">
                                    <div class="row">
                                        <div class="col-sm-12 mb-4">
                                            <ul class="nav nav-pills" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ad Details</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ad Preview</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Payment</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <form class="add-details">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                            <input type="text" class="form-control" placeholder="Ad Name">
                                                            </div>
                                                            <div class="col-sm-6">
                                                            <input type="text" class="form-control" placeholder="Ad Duration">
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <textarea name="" id=""  rows="6" class="form-control" placeholder="Ad Description"></textarea>
                                                            </div>
                                                            <div class="col-sm-6 upload-file">
                                                                <input type="text" class="form-control upload-file" placeholder="Upload Images">
                                                                <input type="file" class="form-control upload-file-tex" placeholder="Upload Video" >
                                                                <button class="btn">
                                                                    Browse
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-6 upload-file">
                                                                <input type="text" class="form-control" placeholder="Upload Video">
                                                                <input type="file" class="form-control upload-file-tex" placeholder="Upload Video">
                                                                <button class="btn">
                                                                    Browse
                                                                </button>
                                                            </div>
                                                            
                                                            <div class="col-sm-6">
                                                                <select id="inputState" class="form-control">
                                                                    <option selected>Upload Categories</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <select id="inputState" class="form-control">
                                                                    <option selected>Enter Location</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6 add-ads-check">
                                                                <div class="form-check form-check-inline">
                                                                    
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                                                    <span></span>
                                                                    <label class="form-check-label" for="inlineRadio1">Flat</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                    <span></span>
                                                                    <label class="form-check-label" for="inlineRadio2">Negotiable</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <select id="inputState" class="form-control">
                                                                    <option selected>Choose Boost</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="btn btn-oarnge">See Preview</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <div class="row">
                                                        <div class="col-sm-12 ads_categories_details">
                                                            <div class="d-block">
                                                            <h2>Nissan Nissan Sentra 2007 2.0 Red</h2>
                                                            </div>
                                                            <div class="row mt-5 d-flex mb-4 announcement">
                                                                <div class="col-sm-6">
                                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                                    <div class="carousel-inner">
                                                                        <div class="carousel-item active">
                                                                            <img src="assets/images/car.jpg" alt="" class="img-fluid">
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <img src="assets/images/car.jpg" alt="" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="for-video" data-toggle="modal" data-target="#about-videModal">
                                                                    <img src="assets/images/car.jpg" class="img-responsive" alt="">
                                                                </div>
                                                                    
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="d-block mt-5">
                                                            <h1 class="sub-title inner-page-tilte">
                                                            Overview : 
                                                            </h1>
                                                            <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                                            viverra maecenas accumsan lacus vel facilisis. 
                                                            </p>
                                                        </div>
                                                        <div class="d-block mt-5">
                                                            <h1 class="sub-title inner-page-tilte">
                                                            Description : 
                                                            </h1>
                                                            <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                                                viverra maecenas accumsan lacus vel facilisis. 
                                                            </p>
                                                            <div class="table-responsive">
                                                                <table class="table border-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="border-0">Original Manufacture Name :</td>
                                                                            <td class="border-0">Honda</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="border-0">Product Year Manufactured : </td>
                                                                            <td class="border-0">2012</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="border-0">Warranty :</td>
                                                                            <td class="border-0">2 years</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="border-0">Product Condition :</td>
                                                                            <td class="border-0">Good</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="border-0">Notable Defects :</td>
                                                                            <td class="border-0">No</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="border-0">Pricing :</td>
                                                                            <td class="border-0">Negotiable</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div> 
                                                        </div>
                                                        <div class="d-block mt-2">
                                                            <button class="btn back-pay">Back</button>
                                                            <button class="btn btn-oarnge">Make Payment</button>
                                                        </div>
                                                </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                <form class="add-details">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label li-40 ">Duration</label>
                                                                    <div class="col-sm-9">
                                                                        <select id="inputState" class="form-control">
                                                                            <option selected>7 days</option>
                                                                            <option>...</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-3  li-40 col-form-label" >Duration</label>
                                                                    <div class="col-sm-9">
                                                                        <select id="inputState" class="form-control">
                                                                            <option selected>7 days</option>
                                                                            <option>...</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-12 col-form-label" >Categories : 
                                                                        <strong>
                                                                         Category 1, Category 2
                                                                        </strong>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-12 col-form-label" >Location : 
                                                                        <strong>
                                                                            Location 1, Location 2
                                                                        </strong>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 add-ads-check">
                                                                <p class="mb-0">
                                                                    Boost Type
                                                                </p>
                                                                <div class="form-check form-check-inline">
                                                                    
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                                                    <span></span>
                                                                    <label class="form-check-label" for="inlineRadio1">Recurring Boost</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                    <span></span>
                                                                    <label class="form-check-label" for="inlineRadio2">One Time</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-12 col-form-label" >Price:  <strong>250 Naira</strong></label>
                                                                    <div class="col-sm-10">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 add-ads-check">
                                                                <label class="d-block mb-0">
                                                                   <strong>
                                                                   Payment Opction
                                                                   </strong>
                                                                    </label>
                                                                <div class="form-check form-check-inline">
                                                                    
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                                                    <span></span>
                                                                    <label class="form-check-label" for="inlineRadio1">Card Payment</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                    <span></span>
                                                                    <label class="form-check-label" for="inlineRadio2">Online Payment</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                                    <span></span>
                                                                    <label class="form-check-label" for="inlineRadio2">Not Paying With Card?</label>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" placeholder="Enter Card Number">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" placeholder="Enter Name On Card">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" onblur="(this.type='text')" onfocus="(this.type='date')"  class="form-control" placeholder="Expiry Date">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="nomber" class="form-control" placeholder="CVV">
                                                            </div>
                                                            <div class="col-sm-6">
                                                            <button class="btn back-pay">Back</button>
                                                                <button class="btn btn-oarnge">Finish</button>
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