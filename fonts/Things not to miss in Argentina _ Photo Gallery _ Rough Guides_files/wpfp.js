jQuery(document).ready( function($) {
	$('.wpfp-link').on('click', function() {
		
		if ($(this).parent().hasClass('wpfp-logged-out')) {
			
			/*var redirect=confirm("Please create a Rough Guides account to add a favourite");
			
			if (redirect==true) {
				document.location.href=$('#register-link').attr('href');
			} else {
			
				return false;
			}*/
			$("<div id='dialog-overlay'><div id='dialog-box-outer'><div id='dialog-box-inner'><div id='dialog-close'><a href='#'><span>X</span></a></div><div id='dialog-text'>You need a Rough Guides account to favourite pages.<br/><br/>It's really easy to join - just follow this <a href='/community/register'>link</a>, or if you're already a member, login <a href='/community/log-in'>here.</a></div></div></div></div>").insertAfter('#container').animate({ opacity: "1"});
			$("#dialog-close").click(function () {
  				$("#dialog-overlay").remove();
			});
			return false;
			
		}
		
		else {
			dhis = $(this);
			wpfp_do_js( dhis, 1 );
			// for favorite post listing page
			if (dhis.hasClass('remove-parent')) {
				dhis.parent("li").fadeOut();
			}
		}
		return false;
	});
});

function wpfp_do_js( dhis, doAjax ) {
	//loadingImg = dhis.prev();
	//loadingImg.show();
	//beforeImg = dhis.prev().prev();
	//beforeImg.hide();
	var theParent = jQuery(dhis.parent());
	theParent.addClass('rg-wpfp-loading');
	url = document.location.href.split('#')[0];
	params = dhis.attr('href').replace('?', '') + '&ajax=1';
	if ( doAjax ) {
		jQuery.get(url, params, function(data) {
			dhis.parent().html(data);
			if(typeof wpfp_after_ajax == 'function') {
				wpfp_after_ajax( dhis ); // use this like a wp action.
			}
			//loadingImg.hide();
			 theParent.removeClass('rg-wpfp-loading');
			}
		);
	}
}
