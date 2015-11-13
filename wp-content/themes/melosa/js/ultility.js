jQuery(document).ready(function($) {
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: false,  
	});
	$('.fancybox').fancybox();

	$("#hidden_link").find('a').click();
	//jQuery("#hidden_link").fancybox().trigger('click');
	$('#hambuger').click(function(event) {
        var menu = $(this).siblings('.nav');
        if( menu.hasClass('open') ){
            menu.removeClass('open').slideUp();
        }
        else{
            menu.addClass('open').slideDown();
        }
    });

	$(window).resize(function(){
		if($(window).width() > 980){
			$('#header .nav').show();
		}else{
			$('#header .nav').hide();
		}
	});
	jQuery('.ui_tabs').click(function(){
    	jQuery('.content_tab').hide();
    	jQuery('.ui_tabs').removeClass('active');
    	jQuery(this).addClass('active');
    	var class_ui = jQuery(this).find('span').attr('class');
    	jQuery('#'+class_ui).show();
    });
});
