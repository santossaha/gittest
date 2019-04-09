$(document).on('ready',function(){
	"use strict";
	
	// Grab the current date
	var currentDate = new Date();

	// Set some date in the future. In this case, it's always Jan 1
	var futureDate  = new Date(currentDate.getFullYear() + 1, 0, 1);

	// Calculate the difference in seconds between the future and current date
	var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

	// Instantiate a coutdown FlipClock
	var clock = $('.clock').FlipClock(diff, {
		clockFace: 'DailyCounter',
		countdown: true
	});



	var Page = (function() {
		
		var $navArrows = $( '.nav-arrows' ).hide(),
			$navDots = $( '.nav-dots' ).hide(),
			$nav = $navDots.children( 'span' ),
			slicebox = $( '.full-banner' ).slicebox( {
				onReady : function() {

					$navArrows.show();
					$navDots.show();
					/*slicebox.play();
					slicebox.pause();
					return false;*/
					

				},
				onBeforeChange : function( pos ) {

					$nav.removeClass( 'nav-dot-current' );
					$nav.eq( pos ).addClass( 'nav-dot-current' );

				}/*,
				
				orientation : 'r',
				cuboidsRandom : true,
				disperseFactor : 150*/
			} ),
			
			
			init = function() {

				initEvents();
				
			};

			var initEvents = function() {

				// add navigation events
				$navArrows.children( ':first' ).on( 'click', function() {

					slicebox.next();
					return false;

				} );
				$navArrows.children( ':last' ).on( 'click', function() {
					
					slicebox.previous();
					return false;

				} );
				/*$( '.full-banner' ).hover(function() {
								
					slicebox.pause();
					return false;

				} );*/
				
				$nav.each( function( i ) {
							
					$( this ).on( 'click', function( event ) {
						
						var $dot = $( this );
						
						if( !slicebox.isActive() ) {

							$nav.removeClass( 'nav-dot-current' );
							$dot.addClass( 'nav-dot-current' );
						
						}
						
						slicebox.jump( i + 1 );
						return false;
					
					} );
					
				} );
				
			};

			return { init : init };

	})();

	Page.init();
	

	/* ==============================================================
	   Aside Testimonial Script Start
   ============================================================== */
   
	if($('.aladin_aside_testi_slider,.aladin_slider_widget').length){
		$('.aladin_aside_testi_slider,.aladin_slider_widget').bxSlider({
			auto:true,	
		});
	}
	
	
	/*
  ==============================================================
	   Choose US Script Start
  ============================================================== */  
	if($('.aladin_accordian_hdg').length){
		//custom animation for open/close
		$.fn.slideFadeToggle = function(speed, easing, callback) {
		  return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
		};

		$('.aladin_accordian_hdg').accordion({
		  defaultOpen: 'seaction1',
		  cookieName: 'nav',
		  speed: 'slow',
		  animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
			elem.next().stop(true, true).slideFadeToggle(opts.speed);
		  },
		  animateClose: function (elem, opts) { //replace the standard slideDown with custom function
			elem.next().stop(true, true).slideFadeToggle(opts.speed);
		  }
		});
	} 
		
	/*
  ==============================================================
	   Job Offered Salary Script Start
  ============================================================== */  
	if($('.aladin_aside_job_accord_hdg').length){
		//custom animation for open/close
		$.fn.slideFadeToggle = function(speed, easing, callback) {
		  return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
		};

		$('.aladin_aside_job_accord_hdg').accordion({
		  defaultOpen: 'aladin_range1',
		  cookieName: 'nav',
		  speed: 'slow',
		  animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
			elem.next().stop(true, true).slideFadeToggle(opts.speed);
		  },
		  animateClose: function (elem, opts) { //replace the standard slideDown with custom function
			elem.next().stop(true, true).slideFadeToggle(opts.speed);
		  }
		});
	} 

		
		
	/* ==============================================================
	   Progress Bar Script Start
	============================================================== */
	if($('.progressbar').length){
	$('.progressbar').each(function(){
		var t = $(this),
			dataperc = t.attr('data-perc'),
			barperc = Math.round(dataperc*5.56);
		t.find('.bar').animate({width:barperc}, dataperc*25);
		t.find('.label').append('<div class="perc"></div>');
		
		function perc() {
			var length = t.find('.bar').css('width'),
				perc = Math.round(parseInt(length)/5.56),
				labelpos = (parseInt(length)-2);
			t.find('.label').css('left', labelpos);
			t.find('.perc').text(perc+'%');
		}
		perc();
		setInterval(perc, 0); 
	});
	}
	  
	/* =======================================================================
			 Chosen Script Script
	=======================================================================
	*/	
	if($(".chosen-select").length){
		$(".chosen-select").chosen()
	}

	if($(".breaking-news-item").length){
		$('.breaking-news-item').slick({
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  autoplay:true,
		});
	}
		
	/* ---------------------------------------------------------------------- */
	/*	DL Responsive Menu
	/* ---------------------------------------------------------------------- */
	if(typeof($.fn.dlmenu) == 'function'){
		$('#kode-responsive-navigation').each(function(){
			$(this).find('.dl-submenu').each(function(){
				if( $(this).siblings('a').attr('href') && $(this).siblings('a').attr('href') != '#' ){
					var parent_nav = $('<li class="menu-item kode-parent-menu"></li>');
					parent_nav.append($(this).siblings('a').clone());
					
					$(this).prepend(parent_nav);
				}
			});
			$(this).dlmenu();
		});
	}
	
	/*
	  =======================================================================
		  		Map Calling Script Script
	  =======================================================================
	*/
	if($('#map-canvas').length){
		google.maps.event.addDomListener(window, 'load', initialize);
	}
});		
/*
=======================================================================
		Map Style Script
=======================================================================
*/
function initialize() {
	var MY_MAPTYPE_ID = 'custom_style';
	var map;
	var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
	var featureOpts = [
		{
		  stylers: [
			{ hue: '#f9f9f9' },			
			{ visibility: 'simplified' },
			{ gamma: 0.7 },
			{ saturation: -200 },
			{ lightness: 45 },
			{ weight: 0.6 }
		  ]
		},
		{
		featureType: "road",
		  elementType: "geometry",
		  stylers: [
			{ lightness: 200 },
			{ visibility: "simplified" }
		  ]
		},
		{
		  elementType: 'labels',
		  stylers: [		  
			{ visibility: 'on' }
		  ]
		},
		{
		  featureType: 'water',
		  stylers: [
			{ color: '#ffffff' }
		  ]
		}
	];	

	var mapOptions = {
		zoom: 15,
		scrollwheel: false,
		center: brooklyn,
		mapTypeControlOptions: {
		  mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
		},
		mapTypeId: MY_MAPTYPE_ID
	};

	map = new google.maps.Map(document.getElementById('map-canvas'),
		  mapOptions);

	var styledMapOptions = {
		name: 'Custom Style'
	};

	var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

	map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
}