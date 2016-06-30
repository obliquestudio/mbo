/**
 * Main scripts file
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */


/**
 * DOM-based Routing
 *
 * Fire javascript based on body class (working off strictly WordPress body_class)
 * or put javascript in  common for executing on all pages.
 *
 * Several of the WordPress body classes include hyphens in the name, for these
 * cases replace the hyphen in the name with an underscore and this script will
 * handle the rest
 *
 * @link http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
 *
 * @author Paul Irish (paulirish.com)
 * @since MBO Framework 1.0.0
 */
(function($) {

    var frameworkNS = {

        // All pages
        'common': {
            init: function () {

            },
            finalise: function() {

              // JavaScript to be fired on all pages, after page specific JS is fired
              
            }
        },

        // Home page
        'home': {
            init: function () {

                // JS here

            }
        },

        // Blog
        'blog': {
            init: function () {

                // JS here

            }
        }

    };

    // You can ignore this part, this is used to check and fire the above based on the body class
    var UTIL = {
        fire: function (func, funcname, args) {
            var namespace = frameworkNS;
            funcname = (funcname === undefined) ? 'init' : funcname;
            if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function () {

            UTIL.fire('common');

            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function (i, classnm) {
                UTIL.fire(classnm);
            });

            UTIL.fire('common', 'finalise');
        }
    };

    $(document).ready(UTIL.loadEvents);

})(jQuery);