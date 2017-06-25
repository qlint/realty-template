
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EnKei | My Account</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="img/apple-touch-icon.png" type="images/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- customizer style css -->
    <link rel="stylesheet" href="css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">    

    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
    <!--Preloader start-->
    <div id="fakeLoader"></div>
    <!--Preloader end-->
    <div class="wrapper white_bg">
        <!--Header section start-->
        <header class="header header-2">
            <?php require_once('includes/premenu.php'); ?>
            <?php require_once('includes/menu.php'); ?>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="add-property">
                                <a href="add-property.php">ADD PROPERTY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Search box inner start-->
            <div class="search-box-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-form">
                                <div class="search-form-inner">
                                    <form action="#">
                                        <input type="text" placeholder="Search..">
                                        <button type="submit"><i class="icofont icofont-search-alt-1"></i></button>
                                    </form>
                                </div>
                                <div class="search-close-btn">
                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Search box inner end-->
        </header>
        <!--Header section end-->
        <!--Breadcrumbs start-->
        <div class="breadcrumbs overlay-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumbs-title text-center">
                                <h1>My account</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="index.php">Home /</a></li>
                                    <li>My account</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->
        <!--My account start-->
        <div class="agent-details-page pt-130">
            <div class="agent-details">
                <div class="container">
                   <form action="#">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="agent-profile">
                                    <div class="single-team">
                                        <div class="profile-img">
                                            <img src="img/agent/7.jpg" alt="">
                                        </div>
                                        <div class="profile_name">
                                            <label for="profile">
                                                 <span>Change your image</span> <input id="profile" type="file">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="profile-update">
                                    <div class="profile-title">
                                        <h5>My profile infomation</h5>
                                    </div>
                                    <div class="profile-desc">
                                        <div class="row">
                                            <div class="profile-top-form">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="input-type">
                                                        <label>Your Name</label>
                                                        <input type="text" placeholder="You name here">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="input-type">
                                                        <label>Your Email</label>
                                                        <input type="text" placeholder="You Email here">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="input-type">
                                                        <label>Your Phone</label>
                                                        <input type="text" placeholder="You Phone here">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="input-type">
                                                        <label>Your Skpe</label>
                                                        <input type="text" placeholder="You Skype here">
                                                    </div>
                                                </div>
                                                <div class="profile-top-form-bottom">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="input-type">
                                                            <label>Title</label>
                                                            <input type="text" placeholder="You Company Title here">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="input-type">
                                                            <label>About me</label>
                                                            <textarea placeholder="Write here"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-socail-profile mt-50 ">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="profile-title mt-50">
                                        <h5>My social profile</h5>
                                    </div>
                                </div>
                                <div class="social-form-box">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Facebook</label>
                                            <input type="text" placeholder="Your facebook url">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Linkedin</label>
                                            <input type="text" placeholder="Your Linkedin url">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Twitter</label>
                                            <input type="text" placeholder="Your Twitter url">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Instagram</label>
                                            <input type="text" placeholder="Your Instagram url">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Youtube</label>
                                            <input type="text" placeholder="Your Youtube url">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Website</label>
                                            <input type="text" placeholder="Your Website url">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="update-profile-submit">
                                    <button type="submit">Update profile</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="change-password mt-50">
                            <div class="col-md-12">
                                <div class="profile-title">
                                    <h5>Change password</h5>
                                </div>
                            </div>
                            <form action="#">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="input-type">
                                        <label>Old password</label>
                                        <input type="password" placeholder="Old password">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="input-type">
                                        <label>New password</label>
                                        <input type="password" placeholder="New password">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="input-type">
                                        <label>Confirm password</label>
                                        <input type="password" placeholder="Confirm password">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="update-profile-submit">
                                        <button type="submit">Update password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My account end-->

        </div>
       <?php require_once('includes/footer.php'); ?>