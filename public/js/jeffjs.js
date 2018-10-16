$(document).ready(function(){

    // var isshow = localStorage.getItem('isshow');
    // console.log('isshow', isshow);
    // if (isshow== null) {
    //     localStorage.setItem('isshow', 1);
    //     console.log('isshownotnull', isshow);
    //     // Show popup here
    setTimeout(function(){
    	$('.subscribeFormcover').css('display', 'block');
    },3000);
        
    // }


	$('#aboutLink').click(function(){
		$('#hum').css('display','none');
		if($('.header-list').hasClass('fixTop')){
			$('html, body').animate(
				{
					scrollTop: ($('#aboutTitle').offset().top - 80)
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		}else{
			$('html, body').animate(
				{
					scrollTop: ($('#aboutTitle').offset().top - 230)
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		}

		
		return false;
	});

	// $('#visionLink').click(function(){
	// 	$('#hum').css('display','none');
	// 	$('html, body').animate(
	// 		{
	// 			scrollTop: $('#visionTitle').offset().top
	// 		},
	// 		{
	// 			duration:500,
	// 			easing:'swing'
	// 		}
	// 	);
	// 	return false;
	// });

	$('#appLink').click(function(){
		$('#hum').css('display','none');
		if($('.header-list').hasClass('fixTop')){
			$('html, body').animate(
				{
					scrollTop: $('#appTitle').offset().top - 80
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		}else{
			$('html, body').animate(
				{
					scrollTop: $('#appTitle').offset().top - 230
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		}
		return false;
	});

	$('#pinchargeLink').click(function(){
		$('#hum').css('display','none');
		if($('.header-list').hasClass('fixTop')){
			$('html, body').animate(
				{
					scrollTop: $('.pinCharge-title').offset().top - 80
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		}else{
			$('html, body').animate(
				{
					scrollTop: $('.pinCharge-title').offset().top - 230
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		}
		return false;
	});

	$('#roadMapLink').click(function(){
		$('#hum').css('display','none');
		if($('.header-list').hasClass('fixTop')){
			$('html, body').animate(
				{
					scrollTop: $('#roadMapTitle1').offset().top - 80
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		}else{
			$('html, body').animate(
				{
					scrollTop: $('#roadMapTitle1').offset().top - 230
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		}
		return false;
	});

	$('#blogLink').click(function(){
		$('#hum').css('display','none');
		if($('.header-list').hasClass('fixTop')){
			$('html, body').animate(
				{
					scrollTop: $('#blogTitle').offset().top - 80
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		}else{
			$('html, body').animate(
							{
								scrollTop: $('#blogTitle').offset().top - 230
							},
							{
								duration:500,
								easing:'swing'
							}
						);
		}
		return false;
	});

	// $('#teamLink').click(function(){
	// 	$('#hum').css('display','none');
	// 	$('html, body').animate(
	// 		{
	// 			scrollTop: $('#teamTitle').offset().top
	// 		},
	// 		{
	// 			duration:500,
	// 			easing:'swing'
	// 		}
	// 	);
	// 	return false;
	// });

	$('#partnerLink').click(function(){
		$('#hum').css('display','none');
		if($('.header-list').hasClass('fixTop')){
			$('html, body').animate(
				{
					scrollTop: $('#partnerTitle').offset().top - 80
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		}else{
			$('html, body').animate(
				{
					scrollTop: $('#partnerTitle').offset().top - 230
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		}
		return false;
	});


	$('#aboutLinkh').click(function(){
		$('#hum').css('display','none');
		
			$('html, body').animate(
				{
					scrollTop: ($('#aboutTitle').offset().top)
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		

		
		return false;
	});

	$('#appLinkh').click(function(){
		$('#hum').css('display','none');
			$('html, body').animate(
				{
					scrollTop: $('#appTitle').offset().top
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		
		return false;
	});

	$('#pinchargeLinkh').click(function(){
		$('#hum').css('display','none');
		
			$('html, body').animate(
				{
					scrollTop: $('.pinCharge-title').offset().top
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		
		return false;
	});

	$('#roadMapLinkh').click(function(){
		$('#hum').css('display','none');
		
			$('html, body').animate(
				{
					scrollTop: $('#roadMapTitle1').offset().top
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		
		return false;
	});

	$('#blogLinkh').click(function(){
		$('#hum').css('display','none');
		
			$('html, body').animate(
				{
					scrollTop: $('#blogTitle').offset().top
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		
		return false;
	});

	// $('#teamLink').click(function(){
	// 	$('#hum').css('display','none');
	// 	$('html, body').animate(
	// 		{
	// 			scrollTop: $('#teamTitle').offset().top
	// 		},
	// 		{
	// 			duration:500,
	// 			easing:'swing'
	// 		}
	// 	);
	// 	return false;
	// });

	$('#partnerLinkh').click(function(){
		$('#hum').css('display','none');
		
			$('html, body').animate(
				{
					scrollTop: $('#partnerTitle').offset().top
				},
				{
					duration:500,
					easing:'swing'
				}
			);
		
		return false;
	});


	// $('#aboutLinkh').click(function(){
	// 	$('#hum').css('display','none');
	// 	$('html, body').animate(
	// 		{
	// 			scrollTop: $('#aboutTitle').offset().top
	// 		},
	// 		{
	// 			duration:500,
	// 			easing:'swing'
	// 		}
	// 	);
	// 	return false;
	// });

	// $('#visionLinkh').click(function(){
	// 	$('#hum').css('display','none');
	// 	$('html, body').animate(
	// 		{
	// 			scrollTop: $('#visionTitle').offset().top
	// 		},
	// 		{
	// 			duration:500,
	// 			easing:'swing'
	// 		}
	// 	);
	// 	return false;
	// });

	// $('#appLinkh').click(function(){
	// 	$('#hum').css('display','none');
	// 	$('html, body').animate(
	// 		{
	// 			scrollTop: $('#appTitle').offset().top
	// 		},
	// 		{
	// 			duration:500,
	// 			easing:'swing'
	// 		}
	// 	);
	// 	return false;
	// });

	// $('#roadMapLinkh').click(function(){
	// 	$('#hum').css('display','none');
	// 	$('html, body').animate(
	// 		{
	// 			scrollTop: $('#roadMapTitle1').offset().top
	// 		},
	// 		{
	// 			duration:500,
	// 			easing:'swing'
	// 		}
	// 	);
	// 	return false;
	// });

	// $('#teamLinkh').click(function(){
	// 	$('#hum').css('display','none');
	// 	$('html, body').animate(
	// 		{
	// 			scrollTop: $('#teamTitle').offset().top
	// 		},
	// 		{
	// 			duration:500,
	// 			easing:'swing'
	// 		}
	// 	);
	// 	return false;
	// });


	$('#aboutLinkB').click(function(){
		$('#hum').css('display','none');
		$('html, body').animate(
			{
				scrollTop: $('#aboutTitle').offset().top - 80
			},
			{
				duration:500,
				easing:'swing'
			}
		);
		return false;
	});

	// $('#visionLinkB').click(function(){
	// 	$('#hum').css('display','none');
	// 	$('html, body').animate(
	// 		{
	// 			scrollTop: $('#visionTitle').offset().top
	// 		},
	// 		{
	// 			duration:500,
	// 			easing:'swing'
	// 		}
	// 	);
	// 	return false;
	// });

	$('#appLinkB').click(function(){
		$('#hum').css('display','none');
		$('html, body').animate(
			{
				scrollTop: $('#appTitle').offset().top - 80
			},
			{
				duration:500,
				easing:'swing'
			}
		);
		return false;
	});

	$('#pinchargeB').click(function(){
		$('#hum').css('display','none');
		$('html, body').animate(
			{
				scrollTop: $('.pinCharge-title').offset().top - 80
			},
			{
				duration:500,
				easing:'swing'
			}
		);
		return false;
	});

	$('#roadMapLinkB').click(function(){
		$('#hum').css('display','none');
		$('html, body').animate(
			{
				scrollTop: $('#roadMapTitle1').offset().top - 80
			},
			{
				duration:500,
				easing:'swing'
			}
		);
		return false;
	});

	$('#blogB').click(function(){
		$('#hum').css('display','none');
		$('html, body').animate(
			{
				scrollTop: $('#blogTitle').offset().top - 80
			},
			{
				duration:500,
				easing:'swing'
			}
		);
		return false;
	});

	// $('#teamLinkB').click(function(){
	// 	$('#hum').css('display','none');
	// 	$('html, body').animate(
	// 		{
	// 			scrollTop: $('#teamTitle').offset().top
	// 		},
	// 		{
	// 			duration:500,
	// 			easing:'swing'
	// 		}
	// 	);
	// 	return false;
	// });

	$('#partnerB').click(function(){
		$('#hum').css('display','none');
		$('html, body').animate(
			{
				scrollTop: $('#partnerTitle').offset().top - 80
			},
			{
				duration:500,
				easing:'swing'
			}
		);
		return false;
	});
});


var windowWidth = $(window).width();
var divWidth = windowWidth*0.08;
$('.s-img').css('height', divWidth);
$('.s-img').css('width', divWidth);
$('.img-box-d').css('height', divWidth);
$('.img-box-d').css('width', divWidth);

window.onresize = function(event){
	var windowWidth = $(window).width();
	var divWidth = windowWidth*0.08;
	$('.s-img').css('height', divWidth);
	$('.s-img').css('width', divWidth);
	$('.img-box-d').css('height', divWidth);
	$('.img-box-d').css('width', divWidth);
	var leftsideHeight = $('.side-l').height()-parseInt($('.addborder').css("padding-top"))*2-30;
	console.log(leftsideHeight);
	$('.addborder').height(leftsideHeight);
	if(screen.width >= 1450 || $(window).width() >= 1450){
		$('.header-list-two').css('font-size','20px')
	}
	if(screen.width < 1450 || $(window).width() < 1450){
		$('.header-list-two').css('font-size','14px')
	}
	if(screen.width < 950 || $(window).width() < 950){
		$('.header-list-two').css('font-size','12px')
	}
	if(screen.width >= 1450 || $(window).width() >= 1450){
		$('.footer-list-two').css('font-size','20px')
	}
	if(screen.width < 1450 || $(window).width() < 1450){
		$('.footer-list-two').css('font-size','14px')
	}
	if(screen.width < 950 || $(window).width() < 950){
		$('.footer-list-two').css('font-size','12px')
	}

	if(screen.width < 1050 || $(window).width() < 1050){
		// $('#planBtn1').css('margin-right','5px');
		// $('#planBtn2').css('margin-left','5px');
	}else{
		// $('#planBtn1').css('margin-right','5%');
		// $('#planBtn2').css('margin-left','5%');
	}
	if(screen.width < 1150 || $(window).width() < 1150){
		$('#planBtn1').text('Free Trial');
		// $('#planBtn2').css('margin-left','5px');
	}else{
		$('#planBtn1').text('Start Your Free Trial');
		// $('#planBtn2').css('margin-left','5%');
	}
}
	$('#checkLoad').on('load', function(){
		var leftsideHeight = $('.side-l').height()-parseInt($('.addborder').css("padding-top"))*2-30;
		console.log($('.addborder').css("padding-top"));
		$('.addborder').height(leftsideHeight);
	});

	var leftsideHeight = $('.side-l').height()-parseInt($('.addborder').css("padding-top"))*2-30;
	console.log($('.addborder').css("padding-top"));
	$('.addborder').height(leftsideHeight);
	if(screen.width >= 1450 || $(window).width() >= 1450){
		$('.header-list-two').css('font-size','20px')
	}
	if(screen.width < 1450 || $(window).width() < 1450){
		$('.header-list-two').css('font-size','14px')
	}
	if(screen.width < 950 || $(window).width() < 950){
		$('.header-list-two').css('font-size','12px')
	}
	if(screen.width >= 1450 || $(window).width() >= 1450){
		$('.footer-list-two').css('font-size','20px')
	}
	if(screen.width < 1450 || $(window).width() < 1450){
		$('.footer-list-two').css('font-size','14px')
	}
	if(screen.width < 950 || $(window).width() < 950){
		$('.footer-list-two').css('font-size','12px')
	}


	if(screen.width < 1150 || $(window).width() < 1150){
		$('#planBtn1').text('Free Trial');
		// $('#planBtn2').css('margin-left','5px');
	}else{
		$('#planBtn1').text('Start Your Free Trial');
		// $('#planBtn2').css('margin-left','5%');
	}

	if(screen.height < 750 || $(window).height() < 750){
		$('textarea[name=addition]').css('height', '50xp');
		$('.formContainer').css('margin-top', '30px');
	}else{
		$('textarea[name=addition]').css('height', '100xp');
		$('.formContainer').css('margin-top', '90px');
	}
	


// $('#hum').css('height', screen.height)

function humOpen() {
	$('#hum').css('display','block');

}

function humClose(){
	$('#hum').css('display','none');
}