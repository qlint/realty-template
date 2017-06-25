/*----------------------
   Template Name: Haven Real Estate html5 template
    Template URI: http://hastech.company/
    Description: This is html5 template
    Author: Devitems
    Author URI: https://devitems.com/
    Version: 1.0
---------------------------*/
(function($) {
    "use strict";
    
    
    
   /*-------------------------------------------
    	 jQuery MeanMenu
    --------------------------------------------- */
    jQuery('nav#dropdown').meanmenu();
    
    /*-------------------------------------------
    	 wow js active
    --------------------------------------------- */
    new WOW().init();
    
    /*-------------------------------------------
    	 toltip js active
    --------------------------------------------- */
    $('[data-toggle="tooltip"]').tooltip();
    
    /*----------------------------
       stickey menu
    ----------------------------*/
    $(window).on('scroll',function() {    
	   var scroll = $(window).scrollTop();
	   if (scroll < 265) {
		$(".sticky-header").removeClass("sticky");
	   }else{
		$(".sticky-header").addClass("sticky");
           }
    });
    
    $('.close-home').on('click', function(){
		$('.find-home-box').addClass('fadeOut');
        
    });

    /*----------------------
		Nivo slider activation
	----------------------*/
   $('#mainSlider').nivoSlider({
        directionNav: true,
        controlNavThumbs: false,
        animSpeed: 1000,
        slices: 10,
        pauseTime: 5000,
        pauseOnHover: true,
        controlNav: false,
        manualAdvance: true,
        prevText: '<i class="fa fa-angle-left"></i>', 
        nextText: '<i class="fa fa-angle-right"></i>'
    });
    /*-------------------------
      slider active
    ------------------------------ */  
    $(".property-list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
      navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [991,2],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
    });
    $(".happy-client-list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 4,
      navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [991,3],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
    });

    $(".brand-list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:false,	  
      items : 5,
       navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [991,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
    });
    $(".property_list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 1,
      navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
    });
    
    /*------------------------------------    
      Search Bar
    --------------------------------------*/ 

      $( '.search-icon a' ).on( 'click', function () {
        $( '.header' ).toggleClass( 'search-box-show' );
        return false;
      });

      $( '.search-close-btn a' ).on( 'click', function () {
        $( '.header' ).toggleClass( 'search-box-show' );
        return false;
      });
    /*----------------------    
        magnificPopup active
    --------------*/
    $('.play-button a').magnificPopup({
            disableOn: 0,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,

            fixedContentPos: false
    });
    /*----------------------    
        collpase active
    --------------*/
    $(".accordion-active").collapse({
		accordion:true,
	  open: function() {
		this.slideDown(550);
	  },
	  close: function() {
		this.slideUp(550);
	  }		
	});	
    
    
    /*--------------------
        You tube video active
    -------------------------*/
    $(".youtube-bg").YTPlayer({
        videoURL:"https://youtu.be/vb5KLYAtPIs",
        containment:'.youtube-bg',
        mute:true,
        loop:true,
        showControls: true
        
    });
    
    /*--------------------------
		 Parallax active
	----------------------*/
	$('.parallax').parallax("50%", 0.5);
    
    /*------------------
        5. Price Slider
    --------------------------*/
    $( "#slider-range" ).slider({
        range: true,
        min: 20,
        max: 2500,
        values: [ 600, 2000 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ) );


    /*--------------------------
      Counter Up
    ---------------------------- */	
    $('.counter').counterUp({
        delay: 70,
        time: 5000
    });
    
     /*-------------------------------------------
    	scrollUp jquery active
    --------------------------------------------- */
    $.scrollUp({
        scrollText: '<i class="icofont icofont-simple-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    
    /*-----------------------------
    Loader activation here. 
    -------------------------------*/
    $("#fakeLoader").fakeLoader({
        timeToHide:1500, 
        zIndex:999999, 
        spinner:"spinner1",   //Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7' 
        bgColor:"#fff"
    });

    
})
(jQuery);




