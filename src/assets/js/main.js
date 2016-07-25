/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var MBO = {
        // All pages
        'common': {
            init: function() {

                // Sample Modernizr checks
                // ========================

                // Touch events
                if (!Modernizr.touchevents) {
                    console.log('No touch events');
                }

                // Media queries
                var mediaQuery = Modernizr.mq('(min-width: 900px)');
                if (mediaQuery) {
                    console.log('The browser window is larger than 900px');
                }

            },
            finalise: function() {

            }
        },
        // Home page
        'home': {
            init: function() {

            },
            finalise: function() {

            }
        },
        // About us page, note the change from about-us to about_us.
        'about_us': {
            init: function() {

            },
            finalise: function() {

            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalise event
    var UTIL = {
        fire: function(func, funcname, args) {
            var fire;
            var namespace = MBO;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function() {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalise JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalise');
            });

            // Fire common finalise JS
            UTIL.fire('common', 'finalise');
        }
    };

    // Load Events
    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
