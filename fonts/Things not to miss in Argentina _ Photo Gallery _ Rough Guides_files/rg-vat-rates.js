jQuery(document).ready(function($) {
	$( 'body' ).on( 'checkout_error', function (){
		var form = $('form.checkout');
		var form_html = $(form).html();
		var check_data_1 = form_html.split("<!--RG")[1];
		var check_data = check_data_1.split("-->")[0];
		var result = $.parseJSON( check_data );

		if (typeof(result['check_response']) != 'undefined') {

			var popup_data = result['check_response'];

			if (popup_data['result'] == 'Popup') {

				var html = '<div style="width: 580px; max-width: 100%; overflow: auto; min-height: 247px; margin-top: 35px;">' +
					'<div id="cboxTitle_RG" style="float: left; display: block;">Location Confirmation</div>' +
					'<div class="cbox-inner-content">' +
					'<h1 class="cboxfont">Confirm your Location</h1>' +
					'<ul class="vat-check-list clearfix">' +
					'<li class="first" style="width:100%;">' +
					'<div class="padding">' +
					'<h2 class="vat-button">' + popup_data['billing-full'] + '</h2><button name="select-billing" id="select-billing">SELECT</button>' +
					'</div>' +
					'</li>' +
					'<li class="last" style="width:100%;">' +
					'<div class="padding">' +
					'<h2 class="vat-button">' + popup_data['ip-full'] + '</h2><button name="select-ip" id="select-ip">SELECT</button>' +
					'</div>' +
					'</li>' +
					'</ul>' +
					'<p class="cboxfont"><span class="blue">Why do we need this information?</span> By confirming your location we can apply the correct taxes to your receipt. These taxes are incurred by Rough Guides and will not affect the price that you pay on the website.</p>' +
					'</div></div>';

				$.colorbox({fixed: true, html: html});

				var $form = $( '.checkout-form .checkout' );
				$form.removeClass( 'processing' ).unblock();

				$('#select-billing').on('click', function(){
					$('#cboxClose').trigger('click');

					$('#vat_checked').val(1);
					$('#vat_country').val(popup_data['billing']);
					$('#evidence_1').val('BILLING ADDRESS');
					$('#evidence_2').val(popup_data['evidence-2']);
					$('#ip_country').val(popup_data['ip-full']);

					setTimeout(function() {jQuery('#place_order').trigger('click');}, 100);
				});

				$('#select-ip').on('click', function(){
					$('#cboxClose').trigger('click');

					$('#vat_checked').val(1);
					$('#vat_country').val(popup_data['ip']);
					$('#evidence_1').val('IP ADDRESS');
					$('#evidence_2').val(popup_data['evidence-2']);
					$('#ip_country').val(popup_data['ip-full']);

					setTimeout(function() {jQuery('#place_order').trigger('click');}, 100);
				});
			}

			if (popup_data['result'] == 'IP Error') {

				var htmlip = '<div style="width: 580px; max-width: 100%; overflow: auto; min-height: 247px; margin-top: 35px;">' +
					'<div id="cboxTitle_RG" style="float: left; display: block;">Location Confirmation</div>' +
					'<div class="cbox-inner-content">' +
					'<h1 class="cboxfont">Confirm your Location</h1>' +
					'<p class="cboxfont">We were unable to detect your location using your IP Address, could you please confirm your location below.</p>' +
					'<ul class="vat-check-list clearfix">' +
					'<li class="first" style="width:100%;">' +
					'<div class="padding">' +
					'<select id="country-selection" class="chosen-country" data-placeholder="Choose a Country">' +
					'<option value="Non-EU">Non EU Country</option>' +
					'<option value="GB">United Kingdom</option>' +
					'</select>' +
					'<button name="select-dropdown" id="select-dropdown">SELECT</button>' +
					'</div>' +
					'</li>' +
					'</ul>' +
					'<p class="cboxfont"><span class="blue">Why do we need this information?</span> By confirming your location we can apply the correct taxes to your receipt. These taxes are incurred by Rough Guides and will not affect the price that you pay on the website.</p>' +
					'</div></div><br/>';


				$.colorbox({fixed: true, html: htmlip});
				$('.chosen-country').chosen({width: "77.28%"});
				$.each(popup_data['countries'], function(key, value){
					$('#country-selection').append('<option value="' + value.country_code + '">' + value.country + '</option>');
				});
				$("#country-selection").trigger("chosen:updated");

				var $formip = $( '.checkout-form .checkout' );
				$formip.removeClass( 'processing' ).unblock();

				$('#select-dropdown').on('click', function(){
					$('#cboxClose').trigger('click');

					var selection = $('#country-selection').val();
					$('#vat_checked').val(1);
					$('#vat_country').val(selection);
					if (selection == popup_data['billing']) {
						$('#evidence_1').val('BILLING ADDRESS');
					} else {
						$('#evidence_1').val('DECLARATION');
					}
					$('#evidence_2').val('DECLARATION');
					$('#ip_country').val('UNDETECTED');

					setTimeout(function() {jQuery('#place_order').trigger('click');}, 100);
				});
			}
		}
	} );

	// Popup for country VAT
	$('.download-vat-invoice').on('click', function(e){
		var order_id = $(this).data('orderid');
		var msg = 'You have requested a copy of the VAT Invoice for Order #' + order_id + '. You will receive an email shortly.';
		alert(msg);

		$.ajax({
			type: "POST",
			url: wp_home_url + '/wp/wp-admin/admin-ajax.php',
			data: { order_id: order_id, action : 'rg_wc_invoice'},
			dataType: 'json',
			error: function(error) {
				console.log(error);
			}
		});

		e.preventDefault();
	});
});