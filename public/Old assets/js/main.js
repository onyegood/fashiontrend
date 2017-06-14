(function ($) {
 "use strict";

/*----------------------------
 jQuery MeanMenu
------------------------------ */
	jQuery('nav#mobile-menu').meanmenu({
		meanScreenWidth: "991",
        meanMenuContainer: '.mobile-menu-area',
	});		
	
/*----------------------------
 wow js active
------------------------------ */
 new WOW().init();
 
    /*---------------------
     tooltip
    --------------------- */
		$('.product-extra-link a').tooltip({
        container: 'body'
    });
 
 	//News Scroll
	$('.item-left').last().find('.item-news').addClass('item-last-child');
	$('.item-right').last().find('.item-news').addClass('item-last-child');
	if($('.content-news-scroll').length>0){
		$(".content-news-scroll").mCustomScrollbar({
			scrollButtons:{
				enable:true
			}
		});
	}
 
/*----------------------------
 owl active
------------------------------ */  
  $(".wrap-item").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],	  
	    items: 4,
        itemsCustom : [
        [0, 1],
        [450, 1],
        [480, 2],
        [600, 2],
        [700, 3],
        [768, 3],
        [992, 3],
        [1199, 4]
        ],
  }); 
/*----------------------------
 owl active
------------------------------ */  
  $(".related-item").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
  });
  /*----------------------------
 owl active
------------------------------ */  
  $(".wrap-item-single").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 owl active
------------------------------ */  
  $(".upcoming-curosel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:3000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
 /*----------------------------
 owl active
------------------------------ */  
  $(".total-blog").owlCarousel({
      autoPlay: false, 
	  slideSpeed:3000,
	  pagination:false,
	  navigation:false,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
  }); 
  /*----------------------------
 owl active
------------------------------ */  
  $(".client-active").owlCarousel({
      autoPlay: false, 
	  slideSpeed:3000,
	  pagination:false,
	  navigation:false,	  
      items : 6,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,5],
	  itemsDesktopSmall : [980,5],
	  itemsTablet: [768,3],
	  itemsMobile : [479,2],
  });
  /*----------------------------
 owl active
------------------------------ */  
  $(".best-sell").owlCarousel({
      autoPlay: false, 
	  slideSpeed:3000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 owl active (testimonial)
------------------------------ */ 
    $(".testimonial-carousel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:3000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	  singleItem: true,
  });
/*----------------------------
 owl active (aside-hotsell)
------------------------------ */ 
    $(".aside-hotsell").owlCarousel({
      autoPlay: false, 
	  slideSpeed:3000,
	  pagination:false,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	  singleItem: true,
  });
    /*----------------------------
 owl active (single product)
------------------------------ */ 
    $("#gallery_01").owlCarousel({
    autoPlay: false,
    slideSpeed: 2000,
    items: 4,
    pagination: false,
    navigation: false,
    itemsDesktop: [1199, 4],
    itemsDesktopSmall: [979, 3],
    itemsTablet: [768, 2],
    itemsMobile: [480, 3]
    });
/*----------------------------
 price-slider active
------------------------------ */  
	  $( "#slider-range" ).slider({
	   range: true,
	   min: 40,
	   max: 600,
	   values: [ 60, 570 ],
	   slide: function( event, ui ) {
		$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	   }
	  });
	  $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	   " - $" + $( "#slider-range" ).slider( "values", 1 ) ); 
	   
    /*----------------------------
    Countdown active
    ------------------------------ */
    $('[data-countdown]').each(function () {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span><span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span><span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"><span class="time-count">%S</span> <p>Sec</p></span>'));
        });
    });
	
	// account-currency-language
	$(".n-menu > li > a").on("click", function(e) {
		e.preventDefault();
		if($(this).parent('li').hasClass('active')){
			$(this).parent('li').removeClass('active');
			$(this).siblings('ul').slideUp();
		}
		else{
			$('.n-menu > li > a').parent('li').removeClass('active');
			$(this).parent('li').addClass('active');
			$(".n-menu > li ul").slideUp();
			$(this).siblings('ul').slideDown();
		}
    });
	
	
	/*----------------------------
     cart-plus-minus-button
    ------------------------------ */
    $(".cart-plus-minus")
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });
    
     /*----------------------------
     fancybox active
    ------------------------------ */
    $(document).ready(function() {
        $('.fancybox').fancybox();
    });
    /*----------------------------
     Elevate Zoom active
    ------------------------------ */
    $("#zoom_03").elevateZoom({
        constrainType: "height",
        zoomType: "lens",
        containLensZoom: true,
        gallery: 'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: "active"
    });

    //pass the images to Fancybox
    $("#zoom_03").on("click", function(e) {
        var ez = $('#zoom_03').data('elevateZoom');
        $.fancybox(ez.getGalleryList());
        return false;
    });
	
	/*-------------------------------------------
    	 scrollUp jquery active
    --------------------------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
	
    
})(jQuery); 