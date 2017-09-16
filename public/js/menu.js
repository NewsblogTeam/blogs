$(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()>100){
			$("#goto-top").fadeIn('slow');
			$("#menu").addClass('menu');
		}
		else{
			$("#goto-top").fadeOut('slow');
			$("#menu").removeClass('menu');
		}

	});

	$("#goto-top").click(function(){
		$("body,html").animate({scrollTop:0},1000);
		return false;
	});
});