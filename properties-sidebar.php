
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EnKei | Properties Sidebar</title>
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
                                <h1>PROPERTIES</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="index.php">Home /</a></li>
                                    <li>PROPERTIES Sidebar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->

        <!--Feature property section-->
        <div class="feature-property pt-130">
            <div class="container">
                <div class="row">
                     <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="sidebar left">
                            <aside class="single-side-box search-property">
                                <div class="aside-title">
                                    <h5>Search for Property</h5>
                                </div>
                                <div class="find_home-box">
                                    <div class="find_home-box-inner">
                                        <form action="#">
                                            <div class="find-home-cagtegory">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="find-home-item custom-select ">                  
                                                            <select class="selectpicker" title="Location" data-hide-disabled="true" data-live-search="true">
                                                                <optgroup disabled="disabled" label="disabled">
                                                                    <option>Hidden</option>
                                                                </optgroup>
                                                                <optgroup label="Australia">
                                                                    <option>Sydney</option>
                                                                    <option>Melbourne</option>
                                                                    <option>Cairns</option>
                                                                </optgroup>
                                                                <optgroup label="USA">
                                                                    <option>South Carolina</option>
                                                                    <option>Florida</option>
                                                                    <option>Rhode Island</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="find-home-item custom-select">                  
                                                            <select class="selectpicker" title="Sub - Location" data-hide-disabled="true" data-live-search="true">
                                                                <optgroup disabled="disabled" label="disabled">
                                                                    <option>Hidden</option>
                                                                </optgroup>
                                                                <optgroup label="Australia">
                                                                    <option>southeastern coast</option>
                                                                    <option>southeastern tip</option>
                                                                    <option>northwest corner</option>
                                                                </optgroup>
                                                                <optgroup label="USA">
                                                                    <option>Charleston</option>
                                                                    <option>St. Petersburg</option>
                                                                    <option>Newport</option>
                                                                </optgroup>
                                                            </select>
                                                        </div> 
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="find-home-item">
                                                            <input type="text" name="min-area" placeholder="Min area (sqft)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="find-home-item ">
                                                            <input type="text" name="max-area" placeholder="Max area (sqft)">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="find-home-item no-caret  custom-select">                  
                                                            <select class="selectpicker" title="No. of Beadrooms" data-hide-disabled="true">
                                                                <optgroup  label="1">
                                                                    <option label="1">1 Beadrooms</option>
                                                                    <option>2 Beadrooms</option>
                                                                    <option>3 Beadrooms</option>
                                                                    <option>4 Beadrooms</option>
                                                                    <option>5 Beadrooms</option>
                                                                </optgroup>
                                                            </select>
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="find-home-item no-caret  custom-select">                  
                                                            <select class="selectpicker" title="No. of Bathrooms" data-hide-disabled="true">
                                                                <optgroup label="2">
                                                                    <option>1 Bathrooms</option>
                                                                    <option>2 Bathrooms</option>
                                                                    <option>3 Bathrooms</option>
                                                                    <option>4 Bathrooms</option>
                                                                    <option>5 Bathrooms</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="find-home_bottom">
                                                        <div class="col-md-12">
                                                            <div class="find-home-item">
                                                                <!-- shop-filter -->
                                                                <div class="shop-filter">
                                                                    <div class="price_filter">
                                                                        <div class="price_slider_amount">
                                                                            <input type="submit"  value="price range"/> 
                                                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
                                                                        </div>
                                                                        <div id="slider-range"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="find-home-item">
                                                               <button type="submit">SEARCH PROPERTY </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                            </aside>
                            <aside class="single-side-box feature">
                                <div class="aside-title">
                                    <h5>Featured Property</h5>
                                </div>
                                <div class="feature-property">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.php">
                                                        <img src="img/property/7.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.php">Concept's Name</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.php">
                                                        <img src="img/property/3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.php">Concept's Name</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.php">
                                                        <img src="img/property/5.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.php">Concept's Name</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.php">
                                                        <img src="img/property/11.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.php">Concept's Name</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single-side-box agent">
                                <div class="aside-title">
                                    <h5>Our Agent</h5>
                                </div>
                                <div class="our-agent-sidbar">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="agent-details.php">
                                                        <img src="img/team/1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                    <h6><a href="agent-details.php">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="agent-details.php">
                                                        <img src="img/team/2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                    <h6><a href="agent-details.php">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="agent-details.php">
                                                        <img src="img/team/3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                    <h6><a href="agent-details.php">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="agent-details.php">
                                                        <img src="img/team/4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                    <h6><a href="agent-details.php">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="agent-details.php">
                                                        <img src="img/team/5.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                   <h6><a href="agent-details.php">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-agent">
                                                <div class="agent-img">
                                                    <a href="agent-details.php">
                                                        <img src="img/team/6.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="agent-title">
                                                    <h6><a href="agent-details.php">Agent's Name</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single-side-box tags">
                                <div class="aside-title">
                                    <h5>Tags</h5>
                                </div>
                                <div class="our-tag-list">
                                    <ul>
                                        <li><a href="#">Real Estate</a></li>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Appartment</a></li>
                                        <li><a href="#">Duplex villa</a></li>
                                        <li><a href="#">But property</a></li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="single-side-box video">
                                <div class="aside-title">
                                    <h5>Take a tour</h5>
                                </div>
                                <div class="video-sidebar">
                                    <div class="video-img">
                                        <img src="img/common/video.jpg" alt="">
                                    </div>
                                    <div class="play-button">
                                        <a href="https://youtu.be/vb5KLYAtPIs"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-property mb-40">
                                    <span>FOR SALE</span>
                                    <div class="property-img">
                                        <img src="img/property/7.jpg" alt="">
                                    </div>
                                    <div class="property-desc">
                                        <div class="property-desc-top">
                                            <h6><a href="#">Concept's Name</a></h6>
                                            <h4 class="price">$52,354</h4>
                                            <div class="property-location">
                                                <p><img src="img/property/icon-5.png" alt=""> Location</p>
                                            </div>
                                        </div>
                                        <div class="property-desc-bottom">
                                            <div class="property-bottom-list">
                                                <ul>
                                                    <li>
                                                        <img src="img/property/icon-1.png" alt="">
                                                        <span>550 sqft</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-2.png" alt="">
                                                        <span>6</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-3.png" alt="">
                                                        <span>4</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-4.png" alt="">
                                                        <span>3</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-property mb-40">
                                    <div class="property-img">
                                        <img src="img/property/8.jpg" alt="">
                                    </div>
                                    <div class="property-desc">
                                        <div class="property-desc-top">
                                            <h6><a href="#">Concept's Name</a></h6>
                                            <h4 class="price">$52,354</h4>
                                            <div class="property-location">
                                                <p><img src="img/property/icon-5.png" alt=""> Location</p>
                                            </div>
                                        </div>
                                        <div class="property-desc-bottom">
                                            <div class="property-bottom-list">
                                                <ul>
                                                    <li>
                                                        <img src="img/property/icon-1.png" alt="">
                                                        <span>550 sqft</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-2.png" alt="">
                                                        <span>6</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-3.png" alt="">
                                                        <span>4</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-4.png" alt="">
                                                        <span>3</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-property mb-40">
                                    <span class="bg-blue">FOR Rent</span>
                                    <div class="property-img">
                                        <img src="img/property/9.jpg" alt="">
                                    </div>
                                    <div class="property-desc">
                                        <div class="property-desc-top">
                                            <h6><a href="#">Concept's Name</a></h6>
                                            <h4 class="price">$52,354</h4>
                                            <div class="property-location">
                                                <p><img src="img/property/icon-5.png" alt=""> Location</p>
                                            </div>
                                        </div>
                                        <div class="property-desc-bottom">
                                            <div class="property-bottom-list">
                                                <ul>
                                                    <li>
                                                        <img src="img/property/icon-1.png" alt="">
                                                        <span>550 sqft</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-2.png" alt="">
                                                        <span>6</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-3.png" alt="">
                                                        <span>4</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-4.png" alt="">
                                                        <span>3</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-property mb-40">
                                    <span>FOR SALE</span>
                                    <div class="property-img">
                                        <img src="img/property/16.jpg" alt="">
                                    </div>
                                    <div class="property-desc">
                                        <div class="property-desc-top">
                                            <h6><a href="#">Concept's Name</a></h6>
                                            <h4 class="price">$52,354</h4>
                                            <div class="property-location">
                                                <p><img src="img/property/icon-5.png" alt=""> Location</p>
                                            </div>
                                        </div>
                                        <div class="property-desc-bottom">
                                            <div class="property-bottom-list">
                                                <ul>
                                                    <li>
                                                        <img src="img/property/icon-1.png" alt="">
                                                        <span>550 sqft</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-2.png" alt="">
                                                        <span>6</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-3.png" alt="">
                                                        <span>4</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-4.png" alt="">
                                                        <span>3</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-property mb-40">
                                    <div class="property-img">
                                        <img src="img/property/2.jpg" alt="">
                                    </div>
                                    <div class="property-desc">
                                        <div class="property-desc-top">
                                            <h6><a href="#">Concept's Name</a></h6>
                                            <h4 class="price">$52,354</h4>
                                            <div class="property-location">
                                                <p><img src="img/property/icon-5.png" alt=""> Location</p>
                                            </div>
                                        </div>
                                        <div class="property-desc-bottom">
                                            <div class="property-bottom-list">
                                                <ul>
                                                    <li>
                                                        <img src="img/property/icon-1.png" alt="">
                                                        <span>550 sqft</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-2.png" alt="">
                                                        <span>6</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-3.png" alt="">
                                                        <span>4</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-4.png" alt="">
                                                        <span>3</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-property mb-40">
                                    <span class="bg-blue">FOR Rent</span>
                                    <div class="property-img">
                                        <img src="img/property/3.jpg" alt="">
                                    </div>
                                    <div class="property-desc">
                                        <div class="property-desc-top">
                                            <h6><a href="#">Concept's Name</a></h6>
                                            <h4 class="price">$52,354</h4>
                                            <div class="property-location">
                                                <p><img src="img/property/icon-5.png" alt=""> Location</p>
                                            </div>
                                        </div>
                                        <div class="property-desc-bottom">
                                            <div class="property-bottom-list">
                                                <ul>
                                                    <li>
                                                        <img src="img/property/icon-1.png" alt="">
                                                        <span>550 sqft</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-2.png" alt="">
                                                        <span>6</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-3.png" alt="">
                                                        <span>4</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-4.png" alt="">
                                                        <span>3</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-property mb-40">
                                    <span>FOR SALE</span>
                                    <div class="property-img">
                                        <img src="img/property/4.jpg" alt="">
                                    </div>
                                    <div class="property-desc">
                                        <div class="property-desc-top">
                                            <h6><a href="#">Concept's Name</a></h6>
                                            <h4 class="price">$52,354</h4>
                                            <div class="property-location">
                                                <p><img src="img/property/icon-5.png" alt=""> Location</p>
                                            </div>
                                        </div>
                                        <div class="property-desc-bottom">
                                            <div class="property-bottom-list">
                                                <ul>
                                                    <li>
                                                        <img src="img/property/icon-1.png" alt="">
                                                        <span>550 sqft</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-2.png" alt="">
                                                        <span>6</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-3.png" alt="">
                                                        <span>4</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-4.png" alt="">
                                                        <span>3</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-property mb-40">
                                    <div class="property-img">
                                        <img src="img/property/5.jpg" alt="">
                                    </div>
                                    <div class="property-desc">
                                        <div class="property-desc-top">
                                            <h6><a href="#">Concept's Name</a></h6>
                                            <h4 class="price">$52,354</h4>
                                            <div class="property-location">
                                                <p><img src="img/property/icon-5.png" alt=""> Location</p>
                                            </div>
                                        </div>
                                        <div class="property-desc-bottom">
                                            <div class="property-bottom-list">
                                                <ul>
                                                    <li>
                                                        <img src="img/property/icon-1.png" alt="">
                                                        <span>550 sqft</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-2.png" alt="">
                                                        <span>6</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-3.png" alt="">
                                                        <span>4</span>
                                                    </li>
                                                    <li>
                                                        <img src="img/property/icon-4.png" alt="">
                                                        <span>3</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination">
                                    <div class="pagination-inner text-center">
                                        <ul>
                                            <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="current">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>. . . . . .</li>
                                            <li><a href="#">15</a></li>
                                            <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                         </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <!--Feature property section end-->


        <?php require_once('includes/footer.php'); ?>