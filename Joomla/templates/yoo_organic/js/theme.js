/* Copyright (C) YOOtheme GmbH, YOOtheme Proprietary Use License (http://www.yootheme.com/license) */

jQuery(function($) {

    var config = $('html').data('config') || {}, $body = $('body');

    // Social buttons
    $('article[data-permalink]').socialButtons(config);

    // Navbar
    var navbar       = $('.tm-navbar'),
        navbarmargin = navbar.css('margin-bottom').replace('px', ''),
        navbarspace;

    // Center Navbar Dropdown
    navbar.find('.uk-dropdown').addClass('uk-dropdown-center');

    if (!$body.hasClass('tm-navbar-space')) {

        // Split navbar if logo
        var logowidth   = $('.tm-logo > *').width(),
            nav         = $('.tm-nav'),
            navitems    = nav.children().children(),
            equal       = Math.ceil(navitems.length / 2),
            rtl         = ($.UIkit.langdirection == 'right'),
            movenav     = 0;

            nav.css('visibility', 'hidden');

        nav.css({ 'margin-right':'', 'margin-left':'' });
        navitems.eq(equal - 1).css({ 'margin-right':'', 'margin-left':'' });

        for( var i = 0; i < equal; i++ ) {
            movenav += navitems.eq(i).outerWidth(true);
        }

        movenav = (nav.width() - movenav) - movenav;

        nav.css(rtl ? 'margin-right' : 'margin-left', movenav);
        navitems.eq(equal - 1).css(rtl ? 'margin-left' : 'margin-right', logowidth + 60);

        setTimeout(function(){
            nav.css('visibility', '');
        }, 250);

    }

    // Parallax Background Scrolling
    if (!$.UIkit.support.touch && $body.hasClass('tm-background-parallax')) {

        var ratio     = 2,
            container = $('.tm-wrapper:first').css({
                'background-position': '50% 0px',
                'background-attachment': 'fixed',
                'background-repeat': 'no-repeat'
            })[0], x;

        $.UIkit.$doc.on('scroll', function(){

            x = -1 * window.pageYOffset / ratio;

            container.style.backgroundPosition = '50%' + x + 'px';
        });
    }

});
