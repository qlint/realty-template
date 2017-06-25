
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EnKei | 404</title>
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
                                <h1>404</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="index.php">Home /</a></li>
                                    <li>404</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->

        <!--Error page start-->
        <div class="error-area text-center bg-1 ptb-130">
               <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="error-content ">
                                <h2>404</h2>
                                <h3>Page not found!</h3>
                                <h4>Oops! Looks like something going wrong</h4>
                                <p>We can’t seem to find the page you’re looking for <br>
                                    make sure that you have typed the currect URL</p>
                                <a class="go-home" href="index.php">Go to home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--Error page end-->

        <?php require_once('includes/footer.php'); ?>