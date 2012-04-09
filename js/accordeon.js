$(function() {
 
	//ACCORDION BUTTON ACTION	
	$('.accordionButton').click(function() {
		$('.accordionContent').slideUp('normal');	
		$(this).next().slideDown('normal');
	});
 
	//HIDE THE DIVS ON PAGE LOAD	
	$(".accordionContent").hide();
 
});