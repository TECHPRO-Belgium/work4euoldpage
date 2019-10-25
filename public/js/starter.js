"use strict";

jQuery(window).load(function() { // makes sure the whole site is loaded
    jQuery("#status").fadeOut(); // will first fade out the loading animation
    jQuery("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
});


jQuery(document).ready(function() {

    $('#sandbox-container .input-daterange').datepicker({
        weekStart: 1,
        todayHighlight: true
    });

    //parallax effect

    var wW = jQuery(window).width();

    if (wW > 1024) {
        $('.parallax1').parallax("50%", 0.6);
        $('.parallax2').parallax("50%", 0.6);
        $('.parallax3').parallax("50%", 0.6);
    }

});

(function($) {
    var $window = $(window);
    var windowHeight = $window.height();

    $window.resize(function() {
        windowHeight = $window.height();
    });

    $.fn.parallax = function(xpos, speedFactor, outerHeight) {
        var $this = $(this);
        var getHeight;
        var firstTop;
        var paddingTop = 0;

        //get the starting position of each element to have parallax applied to it	
        function update() {

            $this.each(function() {

                firstTop = $this.offset().top;
            });

            if (outerHeight) {
                getHeight = function(jqo) {
                    return jqo.outerHeight(true);
                };
            } else {
                getHeight = function(jqo) {
                    return jqo.height();
                };
            }

            // setup defaults if arguments aren't specified
            if (arguments.length < 1 || xpos === null) xpos = "50%";
            if (arguments.length < 2 || speedFactor === null) speedFactor = 0.5;
            if (arguments.length < 3 || outerHeight === null) outerHeight = true;

            // function to be called whenever the window is scrolled or resized

            var pos = $window.scrollTop();

            $this.each(function() {
                var $element = $(this);
                var top = $element.offset().top;
                var height = getHeight($element);

                // Check if totally above or totally below viewport
                if (top + height < pos || top > pos + windowHeight) {
                    return;
                }

                $this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px");

            });
        }

        $window.bind('scroll', update).resize(update);
        update();
    };
})(jQuery);