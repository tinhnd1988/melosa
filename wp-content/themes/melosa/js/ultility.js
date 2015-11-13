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
	$('.pic-content').each(function(index, element) {
		$(element).BTQSlider({
			items : 3,
			itemsDesktop : [1199, 3],
			itemsDesktopSmall : [979, 2],
			itemsTabletSmall : [620, 1],
			autoPlay : 5000,
        	stopOnHover : true,
			autoHeight : true,
            slideSpeed: 600,
            paginationSpeed: 800,
		    navigation : true,
		    lazyLoad : true,
		    lazyEffect : "fade",
        });
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
    jQuery('.ui_tabs.active').click();
});
