<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Gurdeep Osahan" />
    <meta name="author" content="Gurdeep Osahan" />
    <link rel="shortcut icon" href="assets/images/logo_web_red.png" type="image/x-icon">
    <title>Foodride - Online Food Ordering Website Template</title>

    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />

    <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css" />

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link href="vendor/css/style.css" rel="stylesheet" />

    <link href="vendor/sidebar/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="login-page vh-100">
        <video loop autoplay muted id="vid">
            <source src="assets/images/bg.mp4" type="video/mp4" />
            <source src="assets/images/bg.mp4" type="video/ogg" />
            Your browser does not support the video tag.
        </video>
        <?php
            if(isset($_SESSION['pwd']) && $_SESSION['pwd'] != ''){
                echo "<script>alert('Your Password is worng!!')</script>";
                $_SESSION['pwd'] = '';
            }
        ?>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="px-5 col-md-6 ml-auto">
                <form action="controllers/reset/new_Password.controller.php" method = "post" class="form-col">
                    <h1>New Password</h1>
                    <!-- <p>Enter New Passord</p> -->
                    <div class="group-form mt-3">
                        <label for="confirm-pwd">New Password:</label>
                        <input type="number" name='new_pass' class="form-control" id="confirm-pwd" placeholder="••••••••••••">
                    </div>
                    <div class="group-form mt-3">
                        <label for="confirm-pwd">Confirm Password:</label>
                        <input type="number" name='new_pass' class="form-control" id="confirm-pwd" placeholder="••••••••••••">
                    </div>
                    <div class="form-check p-3">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                    </div>
                    <a href="/" type="button" class="btn btn-primary btn-lg btn-block mt-3">CONTINUE</a>
                </form>
            </div>
        </div>
</div>
    <nav id="main-nav">
        <ul class="second-nav">
            <li>
                <a href="home.html"><i class="feather-home mr-2"></i> Homepage</a>
            </li>
            <li>
                <a href="my_order.html"><i class="feather-list mr-2"></i> My Orders</a>
            </li>
            <li>
                <a href="#"><i class="feather-edit-2 mr-2"></i> Authentication</a>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="signup.html">Register</a></li>
                    <li><a href="forgot_password.html">Forgot Password</a></li>
                    <li><a href="verification.html">Verification</a></li>
                    <li><a href="location.html">Location</a></li>
                </ul>
            </li>
            <li>
                <a href="favorites.html"><i class="feather-heart mr-2"></i> Favorites</a>
            </li>
            <li>
                <a href="trending.html"><i class="feather-trending-up mr-2"></i> Trending</a>
            </li>
            <li>
                <a href="most_popular.html"><i class="feather-award mr-2"></i> Most Popular</a>
            </li>
            <li>
                <a href="restaurant.html"><i class="feather-paperclip mr-2"></i> Restaurant Detail</a>
            </li>
            <li>
                <a href="checkout.html"><i class="feather-list mr-2"></i> Checkout</a>
            </li>
            <li>
                <a href="successful.html"><i class="feather-check-circle mr-2"></i> Successful</a>
            </li>
            <li>
                <a href="map.html"><i class="feather-map-pin mr-2"></i> Live Map</a>
            </li>
            <li>
                <a href="#"><i class="feather-user mr-2"></i> Profile</a>
                <ul>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="favorites.html">Delivery support</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="terms.html">Terms of use</a></li>
                    <li><a href="privacy.html">Privacy & Policy</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="feather-alert-triangle mr-2"></i> Error</a>
                <ul>
                    <li><a href="not-found.html">Not Found</a></li>
                    <li><a href="maintence.html"> Maintence</a></li>
                    <li><a href="coming-soon.html">Coming Soon</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="feather-link mr-2"></i> Navigation Link Example</a>
                <ul>
                    <li>
                        <a href="#">Link Example 1</a>
                        <ul>

<li>
                            <li>
                                <a href="#">Link Example 1.1</a>
                                <ul>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Link Example 1.2</a>
                                <ul>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Link Example 2</a></li>
                    <li><a href="#">Link Example 3</a></li>
                    <li><a href="#">Link Example 4</a></li>
                    <li data-nav-custom-content>
                        <div class="custom-message">
                            You can add any custom content to your navigation items. This
                            text is just an example.
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="bottom-nav">
            <li class="email">
                <a class="text-danger" href="home.html">
                    <p class="h5 m-0"><i class="feather-home text-danger"></i></p>
                    Home
                </a>
            </li>
            <li class="github">
                <a href="faq.html">
                    <p class="h5 m-0"><i class="feather-message-circle"></i></p>
                    FAQ
                </a>
            </li>
            <li class="ko-fi">
                <a href="contact-us.html">
                    <p class="h5 m-0"><i class="feather-phone"></i></p>
                    Help
                </a>
            </li>
        </ul>
    </nav>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="vendor/slick/slick.min.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="vendor/js/osahan.js"></script>
    <script src="vendor/rocket/rocket-loader.min.js" data-cf-settings="c7cde99310a44e0c8a34cba7-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"84de77e33d3c8817","r":1,"version":"2024.1.0","token":"dd471ab1978346bbb991feaa79e6ce5c"}' crossorigin="anonymous"></script>
</body>

</html>