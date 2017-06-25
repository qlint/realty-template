
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EnKei | Contact Us</title>
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
                                <h1>Contact</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="index.php">Home /</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->

        <!--Contact page start-->
        <div class="contact-page pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map-area">
                            <div class="place-map-inner">
                                <div id="googleMap-2" style="width:100%;height:466px;filter: grayscale(100%);-webkit-filter: grayscale(100%);"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                                <div class="contact-list-inner">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="single-contact_list">
                                                <div class="single-contact-icon">
                                                    <img src="img/icon/c-4.png" alt="">
                                                </div>
                                                <div class="single-contact-desc">
                                                    <p>256, 1st AVE, Manchester</p>
                                                    <p>125 , Noth England</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 ">
                                            <div class="single-contact_list">
                                                <div class="single-contact-icon">
                                                    <img src="img/icon/c-5.png" alt="">
                                                </div>
                                                <div class="single-contact-desc">
                                                    <p>Telephone : +88 (012) 356 958 45</p>
                                                    <p>Telephone : +88 (012) 356 958 86</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="single-contact_list">
                                                <div class="single-contact-icon">
                                                    <img src="img/icon/c-6.png" alt="">
                                                </div>
                                                <div class="single-contact-desc">
                                                    <p>Email : info@sidainaivasha.com</p>
                                                    <p>Web : www.sidainaivasha.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="leave-message">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                    <div class="contact-form-inner">
                                        <div class="contact-form-title">
                                            <h5>Leave a Message</h5>
                                        </div>
                                        <form id="contact-form" action="mail.php" method="post">
                                            <input name="name" type="text" placeholder="Your Name">
                                            <input  name="email" type="text" placeholder="Email here">

                                            <textarea name="message" placeholder="Write here"></textarea>
                                            <div class="form-submit">
                                                <button type="submit">Submit</button>
                                            </div>
                                            <p class="form-messege"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact page end-->

        <?php require_once('includes/footer.php'); ?>