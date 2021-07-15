<?php include 'include/header.php';?>
    <!-- banner -->
    <section class="inner-pages py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="sub-title inner-page-tilte">
                        Register and Login
                    </h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="Register">
                        <div class="row">
                            <div class="col-sm-6 pr-md-5 bord-rt">
                            <h3>Register</h3>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree to the <a href="#">Terms & Conditions</a> </label>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-oarnge">Register</button>
                                </div>
                                <div class="form-group text-center sign-in-up">
                                    <span>Allready have an account? <a href="#">Sign in</a> </span>
                                </div>
                                </form>
                            </div>
                            <div class="col-sm-6 pl-md-5">
                                <h3>Login</h3>
                            <form>
                            <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group text-right Forgot">
                                    <a href="#">Forgot Password?</a>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-oarnge">Login</button>
                                </div>
                                <div class="form-group text-center sign-in-up">
                                <span>Don’t have an account?  <a href="#">Sign up</a> </span>
                                </div>
                                
                                </form>
                            </div>
                            <div class="col-sm-12 ro-underline text-center">
                                <span>or</span>
                            </div>
                            <div class="col-sm-12 text-center socil-icon">
                                <button class="facebook btn socil-btn">
                                    <span class="for-icon"><img src="assets/images/f-fb.png" alt=""></span>
                                    <span class="for-text">Sign in With Facebook</span>
                                </button>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button class="google btn socil-btn">
                                    <span class="for-icon"><img src="assets/images/g-plus.png" alt=""></span>
                                    <span class="for-text">Sign in With Google</span>
                                </button>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'include/footer.php';?>