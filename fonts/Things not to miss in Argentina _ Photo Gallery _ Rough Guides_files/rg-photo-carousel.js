jQuery(document).ready(function($) {  
	
	if($('.home').length > 0) {
		
		$('#slider_home').nivoSlider({
			effect: 'fade',
			pauseTime: 7000,
			pauseOnHover: true,
			manualAdvance: false,
			//directionNav: false
		});
		
		$(".nivo-controlNav a, .nivo-directionNav a").click(function() {	
			$('#slider_home').data( 'nivoslider' ).stop();
		});
	}
	
	if($('.page-template-gallery-home-template-php').length > 0) {
		
		$('#slider_home').nivoSlider({
			effect: 'fade',
			pauseTime: 10000,
			pauseOnHover: true,
			manualAdvance: false,
			controlNav: '#slider-controlNav',
			controlNavThumbs: true
		});
		
		$(".nivo-controlNav a, .nivo-directionNav a").click(function() {	
			$('#slider_home').data( 'nivoslider' ).stop();
		});
	}
	
	
	if($('.single-destination').length > 0) {
		$('#slider').nivoSlider({
			effect: 'fade',
			pauseTime: 7000,
			pauseOnHover: false,
			manualAdvance: true,
			directionNav: false
		});	
		
		$(".nivo-controlNav a, .nivo-directionNav a").click(function() {
			$('#slider').data( 'nivoslider' ).stop();
		});
	}
	
});

