/*
 *  Document   : base_pages_coming_soon.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Coming Soon Page
 */

var BasePagesComingSoon = function() {
    // Init Countdown.js, for more examples you can check out https://github.com/hilios/jQuery.countdown
    var initCounter = function(){
        jQuery('.js-countdown').countdown((new Date().getFullYear() + 0) + '/8/20', function(event) {
            jQuery(this).html(event.strftime('<div class="row items-push text-center">'
                    + '<div class="col-xs-3"><div class="font-s36 font-w700 text-white">%-D</div><div class="font-s12 font-w700 text-white-op">HARI</div></div>'
                    + '<div class="col-xs-3"><div class="font-s36 font-w700 text-white">%H</div><div class="font-s12 font-w700 text-white-op">JAM</div></div>'
                    + '<div class="col-xs-3"><div class="font-s36 font-w700 text-white">%M</div><div class="font-s12 font-w700 text-white-op">MINIT</div></div>'
                    + '<div class="col-xs-3"><div class="font-s36 font-w700 text-white">%S</div><div class="font-s12 font-w700 text-white-op">SAAT</div></div>'
                    + '</div>'
            ));
        });
    };

    return {
        init: function () {
            // Init Countdown
            initCounter();
        }
    };
}();

// Initialize when page loads
jQuery(function(){ BasePagesComingSoon.init(); });