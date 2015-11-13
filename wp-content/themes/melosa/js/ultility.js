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
	})
});