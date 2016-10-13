$(document).ready(function() {

	$("#sou-novo").hover(function() {
    	$(".navBottom").toggleClass("sou-novo");
    	$("#caption-novo").toggleClass("show-caption");
    	$("#content-novo").toggleClass("show-caption");
	});

	$("#sou-membro").hover(function() {
    	$(".navBottom").toggleClass("sou-membro");
    	$("#caption-membro").toggleClass("show-caption");
    	$("#content-membro").toggleClass("show-caption");
	});

	$("#mensagens").hover(function() {
    	$(".navBottom").toggleClass("mensagens");
    	$("#caption-mensagens").toggleClass("show-caption");
    	$("#content-mensagens").toggleClass("show-caption");
	});


  	///////////////////////////////////
    //    Scroll To show Shadow         
    ///////////////////////////////////
        $(window).scroll(function() {
            var y = $(window).scrollTop();
            if (y > 800) {
                $(".navbar-default").css({
                    'background': 'black'
                });
                
            } else {
                $(".navbar-default").css({
                    'background': 'transparent'
                });
            }
        });
});