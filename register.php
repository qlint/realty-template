
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EnKei | Register</title>
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
                                <h1>Register</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="index.php">Home /</a></li>
                                    <li>Register</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->
        <!--Register page inner start-->
        <div class="register-page-inner ptb-100 bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                        <div class="register-page-form">
                            <div class="account-title">
                                <h5>Creat an Account</h5>
                            </div>
                            <form action="#">
                                <div class="username">
                                    <input type="text" placeholder="Username">
                                </div>
                                <div class="email">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Confirm password">
                                </div>
                                 <div class="agree-text">
                                    <p>
                                        <label>
                                            <input type="checkbox"> <span>I agree with your</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="register">
                                    <button type="button">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Register page inner end-->
        <?php require_once('includes/footer.php'); ?>