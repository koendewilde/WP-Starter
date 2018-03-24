/*global $, jQuery */
/*eslint-env jquery*/

(function ($) {

    'use strict';

    // mobile button
    jQuery("#header-nav-button").click(function (e) {
        e.preventDefault();
        if (jQuery('html').hasClass('menu-active')) {
            jQuery("html").removeClass('menu-active');
        } else {
            jQuery("html").addClass('menu-active');
        }
    });





    jQuery('ul#main-menu li.menu-item-has-children').hover(function () {

        var $parent = jQuery(this);
        var $dropdown = $parent.children('ul');

        $dropdown.show(0, function () {
            $parent.mouseleave(function () {
                var $this = jQuery(this);
                $this.children('ul').fadeOut(10);
            });
        });
    });



    // .scrolled
    jQuery(document).ready(function () {

        var scroll_pos = 0;
        jQuery(document).scroll(function () {
            scroll_pos = jQuery(this).scrollTop();
            var h = 5;
            if (scroll_pos > h) {
                jQuery('html').addClass('scrolled');
            } else {
                jQuery('html').removeClass('scrolled');
            }
        });

    });

    // detect first hover
    $('html').addClass('has-mouse');

    // detect first touch
    window.addEventListener('touchstart', function onFirstTouch() {

        jQuery('html').removeClass('has-mouse');

        window.removeEventListener('touchstart', onFirstTouch, false);

    }, false);

}(jQuery));
