/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

function initDropdownContainer() {
	var dropdownContainer = jQuery('.column-container');
	jQuery.each(dropdownContainer, function(key, value) {
		if(!jQuery(value).hasClass('noautosize')) {
			var dropdownMenu = jQuery(value).width();
			jQuery(value).parent().width(dropdownMenu + 5);
		}
		jQuery(value).parent().css('visibility', 'visible');
		jQuery(value).parent().hide();
	});
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

	/*
	Responsive jQuery is a tricky thing.
	There's a bunch of different ways to handle
	it so, be sure to research and find the one
	that works for you best.
	*/

	function articleColumnSize() {
		var columnHeight = $('.single-article .eightcol').height();
		var currentHeight = $('.single-article .fourcol .products-box').height();

		var totalHeight = 0;
		$('.single-article .fourcol .expanding-box').each(function() {
			totalHeight += $(this).height();
		});

		newHeight = (columnHeight-totalHeight)-100;

		if(newHeight > currentHeight) {
			$('.single-article .fourcol .products-box').height(newHeight);
		}

	}

	function scrollAnimate(id) {
		$('html,body').animate({scrollTop: $(id).offset().top},'slow');
	}

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it so, be sure to research and find the one
    that works for you best.
    */

    /* getting viewport width */
    var responsive_viewport = $(window).width();

    /* if is below 481px */
    if (responsive_viewport < 481) {

    } /* end smallest screen */

    /* if is larger than 481px */
    if (responsive_viewport > 481) {

    } /* end larger than 481px */

    /* if is above 768px */
    if (responsive_viewport > 768) {

        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });

    }

    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {

    }


	/* getting viewport width */
	var responsive_viewport = $(window).width();

	/* if is below 481px */
	if (responsive_viewport < 481) {

	} /* end smallest screen */

	/* if is larger than 481px */
	if (responsive_viewport > 481) {

	} /* end larger than 481px */

	/* if is above 768px */
	if (responsive_viewport > 768) {

		/* load gravatars */
		$('.comment img[data-gravatar]').each(function(){
			$(this).attr('src',$(this).attr('data-gravatar'));
		});

	}

	/* off the bat large screen actions */
	if (responsive_viewport > 1030) {

	}

	// add all your scripts here

	var textBlocks = $('.enable-text-truncate');

	$.each(textBlocks, function(key, value) {
		var blockHtml = $(value).html();
		var length = blockHtml.replace(/(<([^>]+)>)/ig,"").length;

		var elemHeight = $('.enable-text-truncate').height()+11;

		if(elemHeight > 310) {
			var difference = elemHeight - 310;
			if (difference > 100) {
				$(value).addClass('truncate-enabled');

				$(value).attr('data-maxheight', elemHeight);

				$(value).addClass('truncate-text');

				var elemHeight = $('.enable-text-truncate').height();
				$(value).attr('data-minheight', elemHeight);

				$(value).children('.display-all-text').show();
			}
		}
	});

	initDropdownContainer();

    function getInnerContentSize(o, padding) {
        padding = padding || 0;
        var contentSize = 0;
        o.removeClass('truncate-text');
        o.css({height: 'auto'});
        contentSize = o.outerHeight() + padding;
        o.addClass('truncate-text');
        o.css({height: o.attr('data-minheight')});
        return contentSize;
    }

    // Setup truncatable text
    var expandableText = $('.enable-text-truncate');
    var extraInfo = expandableText.siblings().first();
    if (expandableText.length) {
        var eto = expandableText.first(), contentSize = getInnerContentSize(eto);
        if (contentSize <= eto.height()) {
            $('.display-all-text').hide();
            $('.display-all-text').first().parent().siblings().first().addClass('first-child');
            eto.removeClass('truncate-text');
            eto.height(eto.height());
        }
    }

	$(".display-all-text").click(function(e) {
		var textContainer = $(this).closest('.post-content').find('.enable-text-truncate').first();

        if(textContainer.hasClass('truncate-text')) {
			$(this).html('Read Less');
            extraInfo.addClass('revealed');

            // What we should do is calculate how much space the content is taking up. So let's do that...
            var contentSize = getInnerContentSize(textContainer, 20);
			textContainer.animate({
				height: contentSize
			}, 350, function() {
				textContainer.removeClass('truncate-text');
			});
		}
		else {
			$(this).html('Read More');
            extraInfo.removeClass('revealed');
			textContainer.addClass('truncate-text');

			textContainer.animate({
				height: textContainer.attr('data-minheight')
			}, 350);
		}

		e.preventDefault();
	});

	$(".drop-down-box").click(function(e) {

		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			$(this).parent().children('.drop-down-content').slideUp(250);
		}
		else {
			$(this).addClass('active');
			$(this).parent().children('.drop-down-content').slideDown(250);
		}

		e.preventDefault();
	});

	// Turning off drop down click functions as now using hover

	/*$(".menu .parent a").click(function(e) {

		var elem = $(this).parent();

		if($(elem).children('.menu-children').length > 0) {

			// This is to address a ridiculous IE8 animation bug:

			// On some pages (shop pages, gallery pages), the top navigation fails when animating the dropdown menu
			// I believe this is caused by a conflict with other plugins on these page (the content sliders and gallery sliders)
			// This is a quick fix which disables the menu animation if viewed on IE8.

			if($('html').hasClass('lt-ie9')) {
				animationCallbackTime = 0;
				animationTime = null;
			}
			else {
				animationCallbackTime = 200;
				animationTime = 200;
			}

			if($('.menu .active').length > 0) {
				$('.menu .active').children('.menu-children').hide(animationCallbackTime, function() {

					if($(elem).hasClass('active')) {
						$('.menu .parent').removeClass('active');
						$(elem).children('.menu-children').hide(animationTime);
					}
					else {
						$('.menu .parent').removeClass('active');
						$(elem).addClass('active');
						$(elem).children('.menu-children').show(animationTime);
					}

				});
			}
			else {
				if($(elem).hasClass('active')) {
					$(elem).removeClass('active');
					$(elem).children('.menu-children').hide(animationTime);
				}
				else {
					$(elem).addClass('active');
					$(elem).children('.menu-children').show(animationTime);
				}
			}

			return false;

		}
		else {
			return true;
		}

	});*/

	/*$('body').click(function() {
		$('.menu .parent').removeClass('active');
		$('.menu .parent').children('.menu-children').fadeOut(200);
	});*/

	/*$('.menu .parent .menu-children').click(function(event){
		event.stopPropagation();
	});


	$('.menu .parent .menu-children li').mouseover(function(e) {
		$('ul.hover-menu').hide();
		$(this).children('ul.hover-menu').show();
	});*/


	$('.menu .parent .menu-children').mousemove(function(event){
		event.stopPropagation();
	});

	// Bottom navigation hover on shop & destination page breadcrumbs
	$('.menu .parent-hover .menu-children li').mouseover(function(e) {
		$('ul.hover-menu').hide();
		$(this).find('ul.hover-menu').show();
	});

	$('.shop-content .menu-children li').mouseover(function(e) {
		$('ul.hover-menu').hide();
		$(this).find('ul.hover-menu').show();
	});
	$('body .not-mobile').mousemove(function() {
		$('ul.hover-menu').hide();
	});

	$('.menu .parent-hover .menu-children').mousemove(function(event){
		event.stopPropagation();
	});

	$('.shop-content .menu-children').mousemove(function(event){
		event.stopPropagation();
	});

	$('.toggle-map-show a').click(function(event){
		$(this).parent().hide();

		$('.toggle-map-hide').show();

		$('.map-dropdown').slideDown(200, function() { /*RGM.onResize(RGM.getMap('map_canvas'));*/ } );

		event.preventDefault();
	});

	$('.toggle-map-hide a').click(function(event){
		$(this).parent().hide();

		$('.map-dropdown').slideUp(200, function() { $('.toggle-map-show').show(); });

		event.preventDefault();
	});

	if( /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('.nivo-caption .split').each(function() {
			var text = $(this).text().split(' ');

			for( var i = 0, len = text.length; i < len; i++ ) {
				text[i] = '<span>' + text[i] + '</span>';
			}
			$(this).html(text.join(' ') + ' <span class="space">&nbsp;</span>');
		});
	} else {
		$('.split').each(function() {
			var text = $(this).text().split(' ');

			for( var i = 0, len = text.length; i < len; i++ ) {
				text[i] = '<span>' + text[i] + '</span>';
			}
			$(this).html(text.join(' ') + ' <span class="space">&nbsp;</span>');
		});
	}

	$('.animate-scroll').click(function() {
		scrollAnimate($(this).attr('href'));
		return false;
	});

	if ($(".lightbox").length > 0) {
		$(".lightbox").colorbox({inline:true, width:"50%"});
	}

	/*
	 * Temporary rough stuff javascript to bind filter links
	 */
	$(".filter-all").click(function(e) {
		$('.link-all').trigger('click');
		e.preventDefault();
	});

	$(".filter-video").click(function(e) {
		$('.f-youtube a').trigger('click');
		e.preventDefault();
	});

	$(".filter-facebook").click(function(e) {
		$('.f-facebook a').trigger('click');
		e.preventDefault();
	});

	$(".filter-twitter").click(function(e) {
		$('.f-twitter a').trigger('click');
		e.preventDefault();
	});

	$(".rough-stuff-nav li a").click(function(e) {
		if (!$(".rough-stuff-nav").hasClass('allow-click')) {
			$('.rough-stuff-nav li a').removeClass('active');
			$(this).addClass('active');
			e.preventDefault();
		}
	});

    // Renamed to rough-stuff to features...
    $(".features-nav li a").click(function(e) {
        if (!$(".features-nav").hasClass('allow-click')) {
            $('.features-nav li a').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        }
    });

	$(".gallery-list a").click(function(e) {
		clickedElem = $(this);
		galleryID = $(this).attr('data-gallery');

		if($('#' + galleryID).css('display') == 'none') {
			$('.gallery-list li').removeClass('active-gallery');

			$(clickedElem).parent().addClass('active-gallery');

			$('.gallery-thumbs:visible').fadeOut(200, function() {
				$('#' + galleryID).fadeIn(200);
			});
		}

		e.preventDefault();
	});

	//articleColumnSize();

	$(window).load(function() {

		if($('.gallery-home-page').length > 0) {
			var theWindow        = $(window),
			$bg              = $(".gallery-home-page #bg"),
			aspectRatio      = $bg.width() / ($bg.height());

			function resizeBg() {
				if ( (theWindow.width() / (theWindow.height()-147)) < aspectRatio ) {
					$bg
					.removeClass()
					.addClass('bgheight');
				} else {
					$bg
					.removeClass()
					.addClass('bgwidth');
				}
			}

			theWindow.resize(function() {
				resizeBg();
				$('#bg').css('visibility', 'visible');
			}).trigger("resize");

		}

		if($('.single-image-view').length > 0) {
			var theWindow    = $(window),
			$bg              = $(".single-image-view #bg"),
			aspectRatio      = $bg.width() / ($bg.height());

			function resizeBg() {
				if ( (theWindow.width() / (theWindow.height()-45)) < aspectRatio ) {
					$bg
					.removeClass()
					.addClass('bgheight');
				} else {
					$bg
					.removeClass()
					.addClass('bgwidth');
				}
			}

			theWindow.resize(function() {
				resizeBg();
				$('#bg').css('visibility', 'visible');
			}).trigger("resize");

		}
	});


	/*
	 * Product pages, add to cart functionality
	 */

	$('form.add_to_cart').submit(function(e){
		e.preventDefault();

		var xmlElem = $(this).children('[name=xmlString]');
		var xmlData = xmlElem.val();

		var qty = parseInt($(this).children('[name=qty]').val());
		xmlElem.val(xmlData.replace('{$qty}', qty));
	});

	$(".community .widgettitle a").click(function(e) {

		var item = $(this).parent().parent().children('div, ul').eq(0);
		var widgets = $('.community .widget');

		$.each(widgets, function(key, value) {
		  $(value).children('div, ul').eq(0).slideUp(250);
		  $(value).children('div, ul').eq(0).removeClass('active-widget');
		});


		if($(item).css('display') == 'none') {
			$(item).slideDown(250);
			$(item).addClass('active-widget');
		}

		e.preventDefault();
	});

	$('.community .widget').eq(0).children('div, ul').eq(0).show();
	//$('.community .widget').eq(0).children('div').eq(0).addClass('active-widget');

	$(document).ready(function() {
		$('a[rel=external]').click(function(){
			window.open(this.href);
			return false;
		});
		$('a[rel=external-new-window]').click(function(){
			window.open(this.href, "myWindowName", "width=800, height=600");
			return false;
		});
	});

	if ($('.app_platforms li').length > 0) {
		var loaded = false;

		if (window.location.hash != '') {
			var hash = window.location.hash.replace('#', '');

			if ($('.app_platforms li.' + hash).length > 0) {
				loaded = true;

				$('.app-item-button').hide();
				$('.app_platforms li.' + hash + ' a').addClass('active');
				$('a.app-item-button.buy-' + hash).show();
			}
		}

		if (!loaded) {
			$('.app-item-button').hide();
			$('.app_platforms li:first-child a').addClass('active');
			$('a.app-item-button:first').show();
		}

		$('.app_platforms li a').click(function(e){
			e.preventDefault();
			var platform = $(this).data('platform');
			$('.app-item-button').hide();
			$('.app_platforms li a').removeClass('active');
			$(this).addClass('active')
			$('.buy-' + platform).show();
			window.location.hash = '#' + platform;
		});
	}

	if (jQuery().dotdotdot) {
		$(".ellipsis").dotdotdot();
	}

	//product outbound click tracking
	var elems = 'a.item-button,div.item-button a';
	$(document).on('click', elems, function(e){
		e.preventDefault();
		var data = $(this).data();
		var label = data.name + ' - ' + data.format + ' - ' + data.id + ' - ' + data.affiliate;
		try {
			//var myTracker=_gat._getTrackerByName();
			window.ga('send', 'event', 'Products', 'BuyProduct', label);
		}
		catch(e){}

		window.open(this.href);
	});

	$('#chzn-select').change(function() {
		var selMulti = $.map($("#chzn-select option:selected"), function (el, i) {
			return $(el).text();
		});
		$("#chosen-question-tags").val(selMulti.join(", "));
	});

    $('#rgcom-category-select').change(function() {
        var redirect;

        if($(this).val() == 'all' || $(this).val() == '') {
            redirect = 'http://' + window.location.hostname + '/community/categories/';
        }
        else {
            redirect = 'http://' + window.location.hostname + '/community/categories/' + $(this).val() + '/';
        }

        window.location = redirect;
    });

	$('#rgcom-continent-select').change(function() {
		var redirect;

		if($(this).val() == 'all' || $(this).val() == '') {
			redirect = 'http://' + window.location.hostname + '/community/destinations/';
		}
		else {
			redirect = 'http://' + window.location.hostname + '/community/destinations/' + $(this).val() + '/';
		}

		window.location = redirect;
	});

	$('#rgcom-country-select').change(function() {
		var redirect;
        if($(this).val() == 'all' || $(this).val() == '') {
            redirect = 'http://' + window.location.hostname + '/community/destinations/';
        }
        else {
            redirect = 'http://' + window.location.hostname + '/community/destinations/' + $(this).val() + '/';
        }

		window.location = redirect;
	});

    $('#destination-multi-select').change(function() {
        var selMulti = $.map($("#destination-multi-select option:selected"), function (el, i) {
            return $(el).text();
        });
        $("#chosen-question-tags").val(selMulti.join(", "));
    });

    // Used?
	$('.add-comment-button a.post-comment-link').click(function(e) {

		if($(this).hasClass('comment-open')) {
			$(this).removeClass('comment-open');
			$(this).parent().find('.answer-comment-box').slideUp(250);
		}
		else {
			$(this).addClass('comment-open');
			$(this).parent().find('.answer-comment-box').slideDown(250, function() {
				$(this).parent().find('textarea').focus();
			});
		}

		e.preventDefault();
	});

    $('.rg-cta.reply-thread').on('click', function(e) {
        e.preventDefault();
        var o = $('#answer-section');

        if (o.hasClass('comment-open') == false) {
            window.scroll(0, $('#answer-section').offset().top);
        }
        setUpReplyForm(o);
    });
    $('.social-action.show-comment-form').on('click touchstart', function(e) {
        if (!$(this).hasClass('submit-redirect')) {
            var o = $(this).parent().parent().parent().find('.rgcom-comment-form').first();
            setUpReplyForm(o);
            e.preventDefault();
        }
    });
    $('.rgcom-item-delete').on('click touchstart', function(e) {
        if (confirm('This action is irreversible. Are you sure you want to delete this message?')) {
            return true;
        }
        return false;
    });

    function setUpReplyForm(o) {
        if (o.hasClass('comment-open')) {
            o.removeClass('comment-open');
            o.slideUp(250);
        }
        else {
            o.addClass('comment-open');
            o.slideDown(250, function() {
                o.find('textarea').focus();
            });
        }
    }

    /* Community Home Tabs */
    $(document).on('click', '.rgcom-home-pag', function(e) {
        var b = $(this);
        if (b.hasClass('disabled')) {
            return;
        }
        var tabContent = b.parent();
        var tabName = tabContent.data('tab');
        var page = parseInt(tabContent.data('page'));

        // Loading...
        var loader = $('#inf-loading');
        if (loader.length < 1) {
            tabContent.parent().parent().append(jQuery('<div id="inf-loading" class="hidden"><span id="inf-loading-img"></span><span id="inf-loading-text">Loading...</span></div>'));
            loader = $('#inf-loading');
        }

        jQuery('html,body').animate({scrollTop: jQuery('#community-tabs').offset().top-20},'slow');

        page = b.data('operator') == 'plus' ? page+1 : page-1;

        // Does the tab exist?
        var existing = $('#'+tabName+'-page'+page);

        tabContent.parent().find('.tab-content-page').addClass('hidden');

        if (existing.length > 0) {
            existing.removeClass('hidden');
        }
        else {
            loader.removeClass('hidden');
            var data = {
                action: 'rgcom_homepage_tab',
                tab: tabName,
                page: page
            };
            jQuery.post('http://' + window.location.hostname + '/wp/wp-admin/admin-ajax.php', data).success(function(result) {
                if (result != false) {
                    loader.addClass('hidden');
                    tabContent.parent().append(result);
                    $('#'+tabName+'-page'+page).removeClass('hidden');
                    jQuery('html,body').animate({scrollTop: jQuery('#community-tabs').offset().top-20},'slow');
                }
            });
        }
    });

    $('.rgcom-switchable').click(function(e) {
        var newTab = $(this);
        var tabContentId = '#'+newTab.attr('id')+'-content';

        var currentTab = $('.rgcom-tab.rgcom-switchable.current').first();

        $('#'+currentTab.attr('id')+'-content').addClass('hidden');
        currentTab.removeClass('current');

        newTab.addClass('current');
        var content = $(this).parent().parent().find('#rgcom-tab-content');
        content.find(tabContentId).removeClass('hidden');
    });

    $('form#rgcom-new-thread-form').on('submit', function(e) {
        var f = $(this);
        var title = f.find('#question-title').val();
        var content = f.find('#question-content').val();
        var destinations = f.find('#destination-multi-select').val();
        var category = f.find('#question_cat').val();

        if (title.length == 0 || content.length == 0) {
            e.preventDefault();
            alert('Please enter a title AND content before submitting.');
            return false;
        }
        if (!destinations && parseInt(category) < 1) {
            e.preventDefault();
            alert('Please select a destination or category.');
            return false;
        }
        return true;
    });

    $('#rgcom-answer-form, .rgcom-comment-form').on('submit', function(e) {
        var f = $(this);
        var content = f.find('textarea').val();
        if (content.length == 0) {
            e.preventDefault();
            alert('Please enter some content before submitting.');
        }
        return true;
    });

    if ($('h2#replies').length == 0) {
        if ($('#rgcom-reply-block .rgcom-reply').length == 0) {
            var o = $('#rgcom-answer-form');
            o.find('textarea').attr('placeholder', 'Be the first to reply');
            $('.rg-cta.reply-thread').first().trigger('click');
        }
    }

    /* Members */
    $('#rgcom-location-select').change(function() {
        var o = $('#rgcom_location_select_chzn');
        if (this.value == 'all') {
            o.removeClass('highlight');
        }
        else {
            o.addClass('highlight');
        }
        doComMemberFilter(1, jQuery('#community-search input').first().val());
    });

    $('.rgcom-switchable-filter').click(function(e) {
        $('#rgcom_location_select_chzn').val([]).trigger("chosen:updated");
        var newTab = $(this);
        var currentTab = $('.rgcom-tab.rgcom-switchable-filter.current').first();

        currentTab.removeClass('current');
        newTab.addClass('current');
        doComMemberFilter();
    });

    $('#reveal-member-search').click(function() {
        var b = $(this);
        var sb = $('#rgcom-member-search-block');
        var inp = $('#rgcom-member-search-term');
        if (b.hasClass('current')) {
            b.removeClass('current');
            sb.slideUp();
            if (inp.val().length > 0) {
                inp.val('');
                doComMemberFilter(1);
            }
        }
        else {
            b.addClass('current');
            sb.slideDown();
            $('#rgcom-member-search-term').focus();
        }
    });

    $('#rgcom-member-search-form').submit(function(e) {
        e.preventDefault();
        var inp = $(this).find('#rgcom-member-search-term');
        if (/^([\s]+)?$/.test(inp.val()) !== true) {
            doComMemberFilter(1);
        }
        return false;
    });

    /* Vote */
    $('.rgcom-vote').click(function(e) {
        e.preventDefault();
        var o = $(this);
        data = {
            _wpnonce: o.data('wpnonce'),
            post_id: o.data('reply'),
            vote_type: o.data('vote-type'),
            action: 'qa_vote'
        };
        $.post('http://' + window.location.hostname + '/wp/wp-admin/admin-ajax.php', data).success(function(result) {
            o.find('.rgcom-vote-count').text($(result).find('.score').text());
            if (o.data('vote-type') == 'up') {
                o.data('vote-type', 'undo');
            }
            else {
                o.data('vote-type', 'up');
            }
        });
    });
    /* to top */
    if ($('h2#replies').length == 1) {
        // find out how far down the page we are...
        var replyBlock = $('.rgcom-reply-block').first();
        var yPosition = replyBlock.position().top;
        var totalHeight = replyBlock.height() + yPosition;
        if (totalHeight > window.innerHeight) {
            var top = $('<span class="rgcom-to-top">Back to top</span>');
            top.on('click', function() {
                $('html,body').animate({scrollTop: 0}, 'slow');
            });
            $('#rgcom-single-post-replies').append(top);
        }
    }

    $('.rg-paginate-members').on('click', function() {
        doComMemberFilter($('#community-tabs-content').data('page'));
    });

	$(".side-toggle").click(function(e) {
		if($(this).parent().hasClass('side-open')) {
            //rgCookie.set('hide_related_ebooks', true, Infinity);
			$(this).parent().removeClass('side-open');
			$(this).parent().stop().animate({
				right: "-281px"
			}, 200, function() {
				$('#side-ebooks-container').css('width', '35px');
			});
		}
		else {
            //rgCookie.remove('hide_related_ebooks');
			$('#side-ebooks-container').css('width', '315px');
			$(this).parent().addClass('side-open');
			$(this).parent().stop().animate({
				right: "-2px"
			}, 200);
		}

		e.preventDefault();
	});

	$('#side-ebooks-container').css('width', '315px');

	$(".footer .change-region").click(function(e) {
		e.preventDefault();
	});

	$(".currency-dropdown a").click(function(e) {
		e.preventDefault();
		var selectedCurrency = $(this).attr('data-currency');
		$("#aelia_cs_currencies").val(selectedCurrency).change();
	});

	/*$("body").on('click','.currency-converter', function(e) {
		var selectedCurrency = $(this).attr('data-currency');
		$("#aelia_cs_currencies").val(selectedCurrency).change();
		//$( ".change_currency" ).trigger( "click" );

		e.preventDefault();
	});*/

	$("body").on('click','.currency-converter', function(e) {
		var selectedCurrency = $('a', this).attr('data-currency');
		$("#aelia_cs_currencies").val(selectedCurrency).change();

		e.preventDefault();
	});

	$(".regenerate-link").click(function(e) {
		$(this).parent().parent().find('.regenerate-form').submit();
		e.preventDefault();
	});


	$(".iframe-download-link").click(function(e) {
		document.getElementById('downloadframe').src = $(this).attr('href');
		e.preventDefault();
	});

	if($('#side-ebooks-container').length > 0) {
		$(window).scroll(function(e) {

			var scrollHeight = $(this).scrollTop();

			if($("#container").hasClass('no-page-slider')) {
				heightOffset = 205;
			}
			else {
				heightOffset = 500;
			}

			if(scrollHeight > heightOffset) {
				$('#side-ebooks-container').addClass('side-shop-floating');
			}
			else {
				$('#side-ebooks-container').removeClass('side-shop-floating');
			}

		});
	}

	//buy-button-disabled
	$('.buy-button-disabled').mouseover(function(e) {
		$('.already-in-basket').show();
	});

	$('.buy-button-disabled').mouseout(function(e) {
		$('.already-in-basket').hide();
	});

	$('.buy-button-disabled').click(function(e) {
		e.preventDefault();
	});

	if($().bxSlider && $("#destination-products-slider").length > 0) {
		var slider = $("#destination-products-slider").bxSlider({
			controls: false,
			pager: true,
			displaySlideQty: 1,
			moveSlideQty: 1,
			startingSlide: 0
		});

		$("#go-prev").click(function () {
			slider.goToPreviousSlide();
			return false;
		});

		$("#go-next").click(function () {
			slider.goToNextSlide();
			return false;
		});

		var bxTotalSlides = $('#destination-products-slider').find('li');

		if(slider.getSlideCount() <= 1) {
			$('.bx-pager').hide();
			$('#go-next').hide();
			$('#go-prev').hide();
		}

	}

    /* RG Event Tracking */
    function rgTE(category, action , label, e) {
        if (window.ga) {
            var ga = window.ga;
            if (e) {
                /*var hitCallback;
                // get the event type if form, submit, if anchor, change location.
                var o = $(e.currentTarget); // SS. Using currentTarget instead of target. If there is an element inside of an <A>, e.g. H1 or SPAN, that element will be the target and cause this switch to fail, using currentTarget will return <A>
                switch (o[0].nodeName) {
                    case 'A':
                        hitCallback = function() {
                            window.location.href = o.attr('href');
                        };
                        break;
                    case 'FORM':
                        e.preventDefault();
                        hitCallback = function() {
                            // LB: Special case for registration. Anymore and another solution will be necessary.
                            if (o.attr('id') == 'signup_form') {
                                var s = o.find('input[type=submit]').first();
                                o.append('<input type="hidden" name="'+ s.attr('name') +'" value="1" />');
                            }
                            o.unbind('submit').submit();
                        };
                        break;
                }*/
                ga('send', 'event', category, action, label);
                return true;

            }
            else {
                ga('send', 'event', category, action, label);
                return true;
            }

        }
        else {
            return !window.ga;
        }
    }

    // Registration
    $('#signup_form').on('submit', function(e) {
        return rgTE('Button', 'Submit', 'Member Registration Complete', e);
    });

    // Newsletter
    $('#newsletter-signup').on('submit', function(e) {
        return rgTE('Button', 'Submit', 'Newsletter Signup Complete', e);
    });

    // Community
    $('#rgcom-new-thread-form.new').on('submit', function(e) {
        return rgTE('Community', 'Thread Posted', $('#question-title').val(), e);
    });

    $('#rgcom-answer-form').on('submit', function(e) {
        return rgTE('Community', 'Reply Posted', 'Reply for \'' + $('#hero-header').find('h1').first().text() + '\'', e);
    });

    // Home
    $('.ebooks-cta.ebooks-content-block').find('a').first().on('click', function(e) {
        return rgTE('Shop', 'Click', 'HP Banner to Shop', e);
    });

    $('.shop-home-banner > a').on('click', function(e) {
        return rgTE('Shop', 'Click', 'HP Banner to Shop ' + ' ' + $(this).attr('class') + $(this).data('title'), e);
    });

    // All else...
    $('.social-icon.facebook').on('click', function(e) {
        return rgTE('Button','Click','Facebook Top Navigation Icon', e);
    });

    $('.social-icon.twitter').on('click', function(e) {
        return rgTE('Button','Click','Twitter Top Navigation Icon', e);
    });

    $('.social-icon.newsletter').on('click', function(e) {
        return rgTE('Button','Click','Newsletter Top Navigation Icon', e);
    });

    $('.slider-products a').on('click', function(e) {
        return rgTE('Shop', 'Click', $(this).find('.product-name').first().text());
    });

    $('.shop-info-box.find-a-hostel').find('a').first().on('click', function(e) {
        return rgTE('Affiliate', 'Click', 'HostelB-Booking-'+window.location.pathname);
    });

    $('.mobile-partner-offers .partner-hostels').find('a').first().on('click', function(e) {
        return rgTE('Affiliate', 'Click', 'HostelB-Booking-'+window.location.pathname);
    });

    $('.shop-info-box.travel-insurance').find('a').first().on('click', function(e) {
        return rgTE('Affiliate', 'Click', 'World Nomads-Quote Requested');
    });

    $('.mobile-partner-offers .partner-insurance').find('a').first().on('click', function(e) {
        return rgTE('Affiliate', 'Click', 'World Nomads-Quote Requested');
    });

    $('.ebook-download-link').on('click', function(e) {
        var o = $(this);
        var t = 'pdf';
        if (o.hasClass('epub')) {
            t = 'epub';
        }
        else if (hasClass('mobi')) {
            t = 'mobi';
        }
        return rgTE('ebooks', 'download', t, e);
    });

	if($('.checkout-form').length > 0) {
		$("#billing_phone_field").before(jQuery("#billing_email-2_field"));
	}

	/*
	if($('.checkout-form').length > 0) {
		$("#billing_first_name_field").before(jQuery("#billing_country_field"));
	}*/

	if($('.woocommerce-message').length > 0) {

		woocommerceMsg = $('.woocommerce-message').html().split("(");

		if(woocommerceMsg.length > 1) {
			$('.woocommerce-message').html(woocommerceMsg[0] + ' <span>WAS SUCCESSFULLY ADDED TO YOUR BASKET</span>');
		}

	}

    /*
     * A complete cookies reader/writer framework with full unicode support.
     * Adapted from:  https://developer.mozilla.org/en-US/docs/Web/API/document.cookie
     */
    var rgCookie = {
        get: function (sKey) {
            if (!sKey) { return null; }
            return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
        },
        set: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
            if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) { return false; }
            var sExpires = "";
            if (vEnd) {
                switch (vEnd.constructor) {
                    case Number:
                        sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
                        break;
                    case String:
                        sExpires = "; expires=" + vEnd;
                        break;
                    case Date:
                        sExpires = "; expires=" + vEnd.toUTCString();
                        break;
                }
            }
            document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
            return true;
        },
        remove: function (sKey, sPath, sDomain) {
            if (!this.has(sKey)) { return false; }
            document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");
            return true;
        },
        has: function (sKey) {
            if (!sKey) { return false; }
            return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
        },
        keys: function () {
            var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
            for (var nLen = aKeys.length, nIdx = 0; nIdx < nLen; nIdx++) { aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]); }
            return aKeys;
        }
    };


    /*if (rgCookie.get('hide_related_ebooks')) {
        $('#side-ebooks-container a.side-toggle').first().click();
    }*/

    // Promos
    var getParams = window.location.search.replace('?','').split('&'),
        curDate = new Date(),
        expDate = new Date(2015, 1, 1);
    if (getParams.length) {
        $.each(getParams, function(i, keyValue) {
            // Popup for PP 2014
            if (curDate >= expDate && keyValue == 'utm_campaign=paypal_promo1214' && !rgCookie.get('rg_paypal') && /^\/(shop|basket|checkout|travel-insurance|hostels)\//i.test(window.location.pathname)) {
                var html = '<div id="inline_content" class="exit-lightbox">' +
                    '<div class="title-bar"></div>' +

                    '<div class="cbox-inner-content">' +
                        '<div class="promo-header">' +
                            '<img src="'+window.location.protocol+'//'+window.location.hostname+'/wp-content/themes/roughguides/library/images/logo.png"  alt="Rough Guides" />' +
                            '<h1 class="primary">January Special</h1><br />' +
                            '<h2 class="secondary">20% off all ebooks</h2>' +
                        '</div>' +
                        '<h3>Make the most of Your Time on Earth</h3>' +
                        '<p>20% off all ebooks purchased through www.roughguides.com when you use your PayPal voucher code.</p>' +
                        '<h3 class="coupon">Coupon Code <span class="code">PAYPAL20</span> - Enter at Checkout</h3>' +
                        '<p>Offer valid until 31st January 2015</p>' +
                        '<p>This offer is applied to all ebooks purchased directly through the www.roughguides.com website only. Rough Guides print and ebooks purchased from third party websites are not included within this offer.</p>' +
                        '<a href="'+window.location.protocol+'//'+window.location.hostname+'/shop/" class="rg-cta gen-full-width">Proceed to shop</a>' +
                    '</div>';

                var isMobile = $('body').hasClass('mobile'),
                    isTablet = $('body').hasClass('tablet'),
                    modalWidth = "60%",
                    modalHeight = 490,
                    className = 'promo';

                if (isMobile) {
                    className += ' mobile';
                    modalHeight = false;
                    modalWidth = '95%';
                }
                var opts = {
                    html: html,
                    title: 'PayPal Offer',
                    className: className,
                    width: modalWidth,
                    maxWidth: 690,
                    rel: 'rg_promo',
                    onComplete: function() {
                        $(this).colorbox.resize();
                    }
                };
                if (modalHeight) {
                    opts.height = modalHeight;
                }
                $.colorbox(opts);
                rgCookie.set('rg_paypal', 'PAYPAL20', null, '/');
                return;
            }
        })
    }

    if (rgCookie.get('rg_paypal')) {
        if (curDate >= expDate) {
            rgCookie.remove('rg_paypal');
        }
    }

    if (/^\/(checkout|basket)/.test(window.location.pathname) && rgCookie.get('rg_paypal')) {
        $('#coupon_code').val(rgCookie.get('rg_paypal'));
        if (/^\/checkout/.test(window.location.pathname)) {
            $('.showcoupon').trigger('click');
        }
        if ($('.coupon-paypal20').length == 0 && $('.woocommerce-error').length == 0) {
            $('input[name="apply_coupon"]').trigger('click');
        }
    }

	$('.hostels-near-me').on('click', function(e) {
		console.log('hello');
		e.preventDefault();

		geoFindMe();


	});

}); /* end of as page load scripts */

/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
	var doc = w.document;
	if( !doc.querySelector ){ return; }
	var meta = doc.querySelector( "meta[name=viewport]" ),
		initialContent = meta && meta.getAttribute( "content" ),
		disabledZoom = initialContent + ",maximum-scale=1",
		enabledZoom = initialContent + ",maximum-scale=10",
		enabled = true,
		x, y, z, aig;
	if( !meta ){ return; }
	function restoreZoom(){
		meta.setAttribute( "content", enabledZoom );
		enabled = true; }
	function disableZoom(){
		meta.setAttribute( "content", disabledZoom );
		enabled = false; }
	function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
		if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );

// Ugly...
function doComMemberFilter(page) {
    var loading = jQuery('<div id="inf-loading"><span id="inf-loading-img"></span><span id="inf-loading-text">Loading...</span></div>');
    jQuery('#community-tabs-content').html(loading);

    var term = jQuery('#rgcom-member-search-term').val();

    if (/^([\s]+)?$/.test(term) === true) {
        term = '';
    }
    var data = {
        action: 'rgcom_member_filter',
        location: jQuery('#rgcom-location-select').val(),
        sort: jQuery('.rgcom-switchable-filter.current').first().data('sort'),
        term: term,
        page: page || 1
    };
    jQuery.post('http://' + window.location.hostname + '/wp/wp-admin/admin-ajax.php', data).success(function(result) {
        jQuery('#community-tabs-content').replaceWith(jQuery(result));
        jQuery('html,body').animate({scrollTop: jQuery('#community-tabs').offset().top},'slow');
    });
}

window.onbeforeunload = function(e) {
    window.sessionStorage.setItem('rgLastVisited', window.location.pathname);
};

function geoFindMe() {
	if (!navigator.geolocation){
		return;
	}

	function success(position) {
		var latitude  = position.coords.latitude;
		var longitude = position.coords.longitude;

		window.location = 'http://m.booking.com/searchresults.en-gb.html?aid=804103;is_aroundme=1;latitude=' + latitude + ';longitude=' + longitude + ';nflt=ht_id%3D203%3B';
	};

	function error() {
		return;
	};

	navigator.geolocation.getCurrentPosition(success, error);
}