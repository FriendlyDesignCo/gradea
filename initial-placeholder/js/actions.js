// JavaScript Document

//$(window).load(function() {
//
//alert ("added");
        //var browserWidth = $(window).width();
		var browserHeight = $(window).height();
		var aboveHeight = $('#introimg').offset().top;
		var barHeight = $('#introimg').height();
		//
		//alert("browserHeight = "+browserHeight);
		//alert ("aboveHeight = "+aboveHeight+"    scrollTop = "+$(window).scrollTop()+"      barHeight = "+barHeight);
		//
	    $(window).scroll(function(){		
			if ($(window).scrollTop() < 200){
				$('.navbar').removeClass('white');
				//alert ("added");
			} else {
				//alert ("removed");
				$('.navbar').addClass('white');
			}
		}); 
//});