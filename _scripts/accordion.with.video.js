$(function(){

    $('.accordion header').bind('click', function() {
        var self = $(this),
            wrapper = self.parent(),
            activeClosedHeight = $('.opened header').outerHeight(),
            minHeight = self.outerHeight(),
            contentHeight = wrapper.find('.content').outerHeight();
			
		//alert (contentHeight);

        /* Conditional to determine current state */
        if ( !wrapper.hasClass('opened') ) {

            // Close other opened accordions than this
            $('.opened')
                .css({
                    "height" : activeClosedHeight
                })
                .removeClass('opened');

            // Now add a class to the clicked accordion and set height
            // CSS transitions will animate the height
			//$("div.video-container").show();
            wrapper
                .addClass('opened')
                .height(contentHeight + minHeight);

        } else if ( wrapper.hasClass('opened') ) {

            // Remove opened class and set the original height
            // Again CSS3 will handle the slideIn animation
            wrapper
                .removeClass('opened')
                .height(minHeight);
			//$("div.video-container").hide();
        }
    });
});