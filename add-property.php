
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EnKei | Add property</title>
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
                                <h1>ADD PROPERTY</h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="index.php">Home /</a></li>
                                    <li>Add property</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->

        <!-- Add property page start -->
        <div class="add-property-page pt-130">
            <form action="#">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="add-property-box step-1">
                                <div class="step-title">
                                    <h4>Step # 1</h4>
                                </div>
                                <div class="basic-information-box">
                                    <div class="information-title">
                                        <h5>Basic Information</h5>
                                    </div>
                                    <div class="basic-information-form">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-7 col-xs-12">
                                                <div class="input-file">
                                                    <label>Property Title</label>
                                                    <input type="text" placeholder="Enter your title here">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-5 col-xs-12">
                                                <div class="input-file">
                                                    <label>Price</label>
                                                    <input type="text" placeholder="Price $">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <div class="information-text">
                                                    <label>Property Text</label>
                                                    <textarea placeholder="Write here"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-property-box step-2">
                                <div class="step-title">
                                    <h4>Step # 2</h4>
                                </div>
                                <div class="information-title">
                                    <h5>Basic Information</h5>
                                </div>
                                <div class="details-information-box">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                                            <div class="input-file">
                                                <label>Location</label>
                                                <select class="selectpicker" title="Location" data-hide-disabled="true" data-live-search="true">
                                                    <optgroup disabled="disabled" label="disabled">
                                                        <option>Hidden</option>
                                                    </optgroup>
                                                    <optgroup label="Naivasha">
                                                        <option>Sydney</option>
                                                        <option>Melbourne</option>
                                                        <option>Cairns</option>
                                                    </optgroup>
                                                    <optgroup label="Nairobi">
                                                        <option>Rongai</option>
                                                        <option>Kitengela</option>
                                                        <option>Ruaka</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>Sub-Location</label>
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
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>Property type</label>
                                                <select class="selectpicker" title="Property type" data-hide-disabled="true">
                                                    <option>Property type 1</option>
                                                    <option>Property type 2</option>
                                                    <option>Property type 3</option>
                                                    <option>Property type 4</option>
                                                    <option>Property type 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>Status</label>
                                                <select class="selectpicker" title="Sale" data-hide-disabled="true">
                                                    <option>sale 1</option>
                                                    <option>sale 2</option>
                                                    <option>sale 3</option>
                                                    <option>sale 4</option>
                                                    <option>sale 5</option>
                                                    <option>sale 6</option>
                                             </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>No. of Bathroom</label>
                                                <select class="selectpicker" title="No. of Bedrooms" data-hide-disabled="true">
                                                    <optgroup  label="1">
                                                        <option label="1">1 Bedrooms</option>
                                                        <option>2 Bedrooms</option>
                                                        <option>3 Bedrooms</option>
                                                        <option>4 Bedrooms</option>
                                                        <option>5 Bedrooms</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>No. of Bathroom</label>
                                                <select class="selectpicker" title="No. of Bedrooms" data-hide-disabled="true">
                                                    <optgroup  label="2">
                                                        <option label="1">2 Bedrooms</option>
                                                        <option>2 Bedrooms</option>
                                                        <option>3 Bedrooms</option>
                                                        <option>4 Bedrooms</option>
                                                        <option>5 Bedrooms</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>No. of Garage</label>
                                                <select class="selectpicker" title="No of Garage" data-hide-disabled="true">
                                                    <optgroup >
                                                        <option >Garage 1</option>
                                                        <option >Garage 2</option>
                                                        <option >Garage 3</option>
                                                        <option >Garage 4</option>
                                                        <option >Garage 5</option>
                                                        <option >Garage 6</option>
                                                   </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-file">
                                                <label>Area (quft)</label>
                                                <input type="text" name="max-area" placeholder="Area (quft)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-property-box step-3">
                                <div class="step-title">
                                    <h4>Step # 3</h4>
                                </div>
                                <div class="image-upload-inner">
                                    <div class="information-title">
                                        <h5>Image gallery</h5>
                                    </div>
                                    <div class="image-upload-box">
                                        <label class="custom-file-upload">
                                            <span><i class="icofont icofont-folder-open"></i> Browse Images</span> <input type="file">
                                        </label>
                                    </div>
                                </div>
                                <div class="video-upload-inner">
                                    <div class="information-title">
                                        <h5>Video Presentation</h5>
                                    </div>
                                    <div class="video-upload-box">
                                        <label class="custom-video-upload">
                                            <span>Add Video</span> <input type="file">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="add-property-box step-4">
                                <div class="row">
                                    <div class="col-md-4 col-sm-5 col-xs-12">
                                        <div class="property-features">
                                            <div class="information-title">
                                                <h5>Property Features</h5>
                                            </div>
                                        </div>
                                        <div class="features-box">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="feature-check box1">
                                                        <input id="remember-1" type="checkbox">
                                                        <label for="remember-1">Air Conditioning</label>
                                                    </div>
                                                    <div class="feature-check box2">
                                                        <input id="remember-2" type="checkbox">
                                                        <label for="remember-2">Bedding</label>
                                                    </div>
                                                    <div class="feature-check box3">
                                                        <input id="remember-3" type="checkbox">
                                                        <label for="remember-3">Balcony</label>
                                                    </div>
                                                    <div class="feature-check box4">
                                                        <input id="remember-4" type="checkbox">
                                                        <label for="remember-4">Cable TV</label>
                                                    </div>
                                                    <div class="feature-check box5">
                                                        <input id="remember-5" type="checkbox">
                                                        <label for="remember-5">Internet</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 pd-left">
                                                    <div class="feature-check box6">
                                                        <input id="remember-6" type="checkbox">
                                                        <label for="remember-6">Parking</label>
                                                    </div>
                                                    <div class="feature-check box7">
                                                        <input id="remember-7" type="checkbox">
                                                        <label for="remember-7">Lift</label>
                                                    </div>
                                                    <div class="feature-check box8">
                                                        <input id="remember-8" type="checkbox">
                                                        <label for="remember-8">Pool</label>
                                                    </div>
                                                    <div class="feature-check box9">
                                                        <input id="remember-9" type="checkbox">
                                                        <label for="remember-9">Dishwasher</label>
                                                    </div>
                                                    <div class="feature-check box10">
                                                        <input id="remember-10" type="checkbox">
                                                        <label for="remember-10">Toaster</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <div class="place-map">
                                            <div class="information-title">
                                                <h5>Place on Map</h5>
                                            </div>
                                            <div class="place-map-inner">
                                                <div id="googleMap-2" style="width:100%;height:365px;"></div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                            <div class="add-property-submit">
                                <button type="submit">ADD PRPPERTY</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Add property page End -->

        <!--Happy client section end-->
        <?php require_once('includes/footer.php'); ?>