<link rel="stylesheet" href="../../views/profiles/profile.css">
<<<<<<< HEAD
=======
<link rel="stylesheet" href="../../views/profiles/popup.css">

>>>>>>> profile
<div class="osahan-profile">
        <div class="d-none">
            <div class="bg-primary border-bottom p-3 d-flex align-items-center">
                <a class="toggle togglew toggle-2" href="#"><span></span></a>
                <h4 class="font-weight-bold m-0 text-white">Profile</h4>
            </div>
        </div>

        <div class="container position-relative">
            <div class="py-5 osahan-profile row">
                <div class="col-md-4 mb-3">
<<<<<<< HEAD
                    <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                        <a href="../../controllers/profiles/upload_profile.controller.php" class>
                            <div class="d-flex align-items-center p-3">
                                <div class="left mr-3">
                                    <!-- <img alt="#" src="assets/images/user1.jpg" class="rounded-circle"> -->
                                    <?php
                                        // index.php
                                        // require '../../database/database.php';
                                        $sessionId = 1; // User's session
                                        $userStmt = $connection->prepare("SELECT * FROM users WHERE user_id = ?");
                                        $userStmt->execute([$sessionId]);
                                        $user = $userStmt->fetch();
                                    ?>
                                    <form class="form" id="form" enctype="multipart/form-data" method="post">
                                        <div class="upload">
                                        <?php
                                            $id = $user["user_id"];
                                            $name = $user["username"];
                                            $image = $user["image"];
                                        ?>
                                            <img src="../../assets/images/user/<?php echo $image; ?>" width="100" height="100" title="<?php echo $image; ?>">
                                                <div class="round">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                <input type="hidden" name="name" value="<?php echo $name; ?>">
                                                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                                                <i class="fa fa-camera" style="color: #fff;"></i>
                                                </div>
                                        </div>
                                    </form>
                                    <!-- <script type="text/javascript">
                                        document.getElementById("image").onchange = function () {
                                            document.getElementById("form").submit();
                                        };
                                    </script> -->
                                    <?php
                                        // if (isset($_FILES["image"]["name"])) {
                                        //     $id = $_POST["id"];
                                        //     $name = $_POST["name"];

                                        //     $imageName = $_FILES["image"]["name"];
                                        //     $imageSize = $_FILES["image"]["size"];
                                        //     $tmpName = $_FILES["image"]["tmp_name"];

                                        //     // Image validation
                                        //     $validImageExtension = ['jpg', 'jpeg', 'png'];
                                        //     $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
                                        //     if (!in_array($imageExtension, $validImageExtension)) {
                                        //         echo "<script>alert('Invalid Image Extension'); document.location.href = '/views/profiles/profile.view.php';</script>";
                                        //     } elseif ($imageSize > 1200000) {
                                        //         echo "<script>alert('Image Size Is Too Large'); document.location.href = '/views/profiles/profile.view.php';</script>";
                                        //     } else {
                                        //         $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
                                        //         $newImageName .= '.' . $imageExtension;
                                        //         $query = "UPDATE users SET image = ? WHERE user_id = ?";
                                        //         $stmt = $connection->prepare($query);
                                        //         $stmt->execute([$newImageName, $id]);
                                        //         move_uploaded_file($tmpName, '../../assets/images/user/' . $newImageName);
                                        //         echo "<script>document.location.href = '/views/profiles/profile.view.php';</script>";
                                        //     }
                                        // }
                                        ?>
=======
                    <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden" id="upload">
                            <div class="d-flex align-items-center p-3">
                                <div class="left mr-3">
                                    
                        
                                        <div class="upload">
                                            <img src="<?php print_r('assets/images/user/'.$img[1]) ?>" width="100" height="100" title="<?php echo $image; ?>">
                                        </div>
>>>>>>> profile
                                </div>
                                <div class="right">
                                    <h6 class="mb-1 font-weight-bold">Gurdeep Singh <i
                                            class="feather-check-circle text-success"></i></h6>
                                    <p class="text-muted m-0 small"><span class="__cf_email__"
                                            data-cfemail="fd949c90928e9c959c93bd9a909c9491d39e9290">[email&#160;protected]</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                            <p class="m-0">Accounts Credits</p>
                            <h5 class="m-0 ml-auto text-primary">$52.25</h5>
                        </div>

                        <div class="bg-white profile-details">
                            <a data-toggle="modal" data-target="#paycard"
                                class="d-flex w-100 align-items-center border-bottom p-3">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold mb-1 text-dark">Payment Cards</h6>
                                    <p class="small text-muted m-0">Add a credit or debit card</p>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div>
                            </a>
                            <a data-toggle="modal" data-target="#exampleModal"
                                class="d-flex w-100 align-items-center border-bottom p-3">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold mb-1 text-dark">Address</h6>
                                    <p class="small text-muted m-0">Add or remove a delivery address</p>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div>
                            </a>
                            <a class="d-flex align-items-center border-bottom p-3" data-toggle="modal"
                                data-target="#inviteModal">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold mb-1">Refer Friends</h6>
                                    <p class="small text-primary m-0">Get $10.00 FREE</p>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div>
                            </a>
                            <a href="faq.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i
                                            class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i>
                                        Delivery Support</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div>
                            </a>
                            <a href="contact-us.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i
                                            class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i>
                                        Contact</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div>
                            </a>
                            <a href="terms.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i
                                            class="feather-info bg-success text-white p-2 rounded-circle mr-2"></i> Term
                                        of use</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div>
                            </a>
                            <a href="privacy.html" class="d-flex w-100 align-items-center px-3 py-4">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i
                                            class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i>
                                        Privacy policy</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <div class="rounded shadow-sm p-4 bg-white">
                        <h5 class="mb-4">My account</h5>
                        <div id="edit_profile">
                            <div>
                                <form action="my_account.html">
                                    <div class="form-group">
                                        <label for="exampleInputName1">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1d" value="Gurdeep">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1" value="Singh">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputNumber1">Mobile Number</label>
                                        <input type="number" class="form-control" id="exampleInputNumber1"
                                            value="1234567890">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            value="iamosahan@gmail.com">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                            <div class="additional">
                                <div class="change_password my-3">
                                    <a href="forgot_password.html"
                                        class="p-3 border rounded bg-white btn d-flex align-items-center">Change
                                        Password
                                        <i class="feather-arrow-right ml-auto"></i></a>
                                </div>
                                <div class="deactivate_account">
                                    <a href="forgot_password.html"
                                        class="p-3 border rounded bg-white btn d-flex align-items-center">Deactivate
                                        Account
                                        <i class="feather-arrow-right ml-auto"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
            <div class="row">
                <div class="col">
                    <a href="home.html" class="text-dark small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-home text-dark"></i></p>
                        Home
                    </a>
                </div>
                <div class="col">
                    <a href="most_popular.html" class="text-dark small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                        Trending
                    </a>
                </div>
                <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
                    <div class="bg-danger rounded-circle mt-n0 shadow">
                        <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
                            <i class="feather-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-heart"></i></p>
                        Favorites
                    </a>
                </div>
                <div class="col selected">
                    <a href="profile.html" class="text-danger small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-user"></i></p>
                        Profile
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="contact-popup" style="display: none;">
        <form class="contact-form" id="" enctype="multipart/form-data" action="../../controllers/profiles/upload.php" method="post">
            <h1>Upload Profile</h1>
            <div style="margin-top: 10px; margin-bottom: 10px;">
                <div>
                    <input type="file" name="my_image" id="image" class='btn bg-primary text-white'>
                </div>
                </div>
            <div>
                <input type="submit" id="send" name="send" value="Upload"/>
            </div>
        </form>
    </div>

    <?php

echo "<script>

let pop = document.querySelector('#contact-popup');
let upload = document.querySelector('#upload');
let send = document.querySelector('#send');

upload.addEventListener('click', ()=>{
    pop.style.display = 'block';
});

send.addEventListener('click', ()=>{
    pop.style.display = 'none';
});




</script>"

?> 