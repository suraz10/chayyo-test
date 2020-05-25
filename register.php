<section class="t_header">
    <?php include('header.php'); ?>
</section>

<section class="ch_page signin_page p-tb50">
    <div class="ch_wrapper">
        <div class="row login-box">
            <div class="col-lg-5 col-md-12 col-pad-0 bg-img none-991">
                <a href="#">
                    <img src="image/logo.png" class="logo" alt="logo">
                </a>
                <h3>Welcome Back</h3>
                <p>To Keep connected with us please login with your personal info</p>
                <a href="signin.php" class="btn-outline">Login</a>
                <ul class="social-list clearfix">
                    <li><a href="#" class="facebook-bg"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter-bg"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="google-bg"><i class="fab fa-google-plus"></i></a></li>
                    <li><a href="#" class="linkedin-bg"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-7 col-md-12 col-pad-0 align-self-center">
                <div class="login-inner-form">
                    <div class="details">
                        <h3>Create an account</h3>
                        <form action="#" method="POST">
                            <div class="form-group">
                                <input type="text" name="fullname" class="input-text" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="Password" class="input-text" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="ConfirmPassword" class="input-text" placeholder="Confirm Password">
                            </div>
                            <div class="checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="termsOfService">
                                    <label class="form-check-label" for="termsOfService">
                                        I agree to the&nbsp;<a href="#" class="terms">terms of service</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-md btn-theme">Register</button>
                            </div>
                        </form>
                        <p class="none-2">Already a member? <a href="signin.php">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>