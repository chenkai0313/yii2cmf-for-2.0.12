jQuery(function(){
	$('#west-menu .nav > li').on('click', function(){
	    $(this).siblings('.show').find('.icon-rotate-90').removeClass('icon-rotate-90');
	    $(this).siblings('.show').removeClass('show').children('ul.nav').slideUp();
	});
	$('#west-menu .nav').on('click', 'li:not(.nav-parent) > a', function(){
	    $('#west-menu .nav .active').removeClass('active');
	    $(this).closest('li').addClass('active');
	});
});