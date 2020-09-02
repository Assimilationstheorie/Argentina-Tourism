function createCookie(a, b, c) {
    if (c) {
        var d = new Date;
        d.setTime(d.getTime() + c * 24 * 60 * 60 * 1e3);
        var e = "; expires=" + d.toGMTString()
    } else var e = "";
    document.cookie = a + "=" + b + e + "; path=/"
}

function readCookie(a) {
    var b = a + "=";
    var c = document.cookie.split(";");
    for (var d = 0; d < c.length; d++) {
        var e = c[d];
        while (e.charAt(0) == " ") e = e.substring(1, e.length);
        if (e.indexOf(b) == 0) return e.substring(b.length, e.length)
    }
    return null
}
jQuery(document).ready(function () {
    var privacyUrl = "/privacy-cookies#cookies";
    var closeText = "Accept &amp; Close";
    var cookieStatus = readCookie("cookieStatus");
    if (cookieStatus != 1) {
		jQuery('head').append('<link rel="stylesheet" type="text/css" href="/wp-content/themes/roughguides/library/css/cookie.css">');
        jQuery("#eucookielaw").html("<div><span>This site uses cookies and by continuing to browse it you agree to us sending you cookies. We have recently updated our policies regarding cookies. <span class='hide-mobile-text'>For more on our cookies and changing your settings <a id='findoutmore' target='_blank' href=" + privacyUrl + '>click here</a>.</span></span> <a href="#" id="removecookie">' + closeText + "</a></div>");

        jQuery("#eucookielaw").show();
        jQuery("#eucookielaw a#removecookie").click(function () {
			jQuery("#eucookielaw").slideUp(500, function() { jQuery("#eucookielaw").remove(); });
            createCookie("cookieStatus", 1, 3650)
        })
    }
})