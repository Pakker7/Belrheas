var productAniLoading = false;

$(function() {
	$("#parentDiv").animate({'opacity': '1'}, 1000);
	$(".img-div").animate({'width': '100%', 'height': '100%'}, 1000);

	setTimeout(function () {
		$(".line-div > span:nth-child(1)").animate({"height": "100%"}, 1500);
		$(".line-div > span:nth-child(2)").animate({"height": "100%"}, 1500);
		$(".line-div > span:nth-child(3)").animate({"height": "100%"}, 1500);
	}, 1000);

	leftAni('nextpage-back', 1000);

	$(".one-step").mouseenter(function () {
		boxingMouseEnter("one-image-content", "one-image");
	}).mouseleave(function () {
		boxingMouseLeave("one-image-content", "one-image");
	});

	$(".two-step").mouseenter(function () {
		boxingMouseEnter("two-image-content", "two-image");
	}).mouseleave(function () {
		boxingMouseLeave("two-image-content", "two-image");
	});

	$(".three-step").mouseenter(function () {
		boxingMouseEnter("three-image-content", "three-image");
	}).mouseleave(function () {
		boxingMouseLeave("three-image-content", "three-image");
	});

	$(".four-step").mouseenter(function () {
		boxingMouseEnter("four-image-content", "four-image");
	}).mouseleave(function () {
		boxingMouseLeave("four-image-content", "four-image");
	});

	/*
	$(".two-step").mouseenter(function () {
		$(".two-image-content").stop().fadeIn('slow');
		$(".two-image").removeClass('t_s_1');
		$(".two-image").addClass('transition_3 t_s_1_2');
	}).mouseleave(function () {
		$(".two-image-content").stop().fadeOut('slow');
		$(".two-image").removeClass('t_s_1_2');
		$(".two-image").addClass('t_s_1');
	});

	$(".three-step").mouseenter(function () {
		$(".three-image-content").stop().fadeIn('slow');
		$(".three-image").removeClass('t_s_1');
		$(".three-image").removeClass('t_s_1');
		$(".three-image").addClass('transition_3 t_s_1_2');
	}).mouseleave(function () {
		$(".three-image-content").stop().fadeOut('slow');
		$(".three-image").removeClass('t_s_1_2');
		$(".three-image").addClass('t_s_1');
	});

	$(".four-step").mouseenter(function () {
		$(".four-image-content").stop().fadeIn('slow');
		$(".four-image").removeClass('t_s_1');
		$(".four-image").addClass('transition_3 t_s_1_2');
	}).mouseleave(function () {
		$(".four-image-content").stop().fadeOut('slow');
		$(".four-image").removeClass('t_s_1_2');
		$(".four-image").addClass('t_s_1');
	});
	*/
});

function leftAni (className, time) {
	$("."+className).animate({'left':'100%'}, time);
	setTimeout(function () {
		$("."+className).animate({'left':'-100%'}, 0);
		leftAni(className, time);
	}, 1200);
}

function productAni () {
	productAniLoading = false;

	$(".one-image-cover").animate({'left': '100%'}, 3000);
	$(".one-image").animate({'left': '0%'}, 3000);

	$(".two-image-cover").animate({'top': '100%'}, 3000);
	$(".two-image").animate({'top': '0%'}, 3000);

	$(".three-image-cover").animate({'bottom': '100%'}, 3000);
	$(".three-image").animate({'bottom': '0%'}, 3000);

	$(".four-image-cover").animate({'right': '100%'}, 3000);
	$(".four-image").animate({'right': '0%'}, 3000);

	setTimeout(function () {
		productAniLoading = true;
	}, 3000);
}

function action_move (val) {
	$(".wrap-container").animate({'top': '-100%'}, 1500, 'easeInOutBack');
	$(".loading-container").animate({'top': '-100%'}, 1500, 'easeInOutBack');

	setTimeout(function () {
		location.href = './contents.php?product='+val;
	}, 1800);
}

function loading_end () {
	$(".loading-container").fadeOut('slow');
}

function boxingMouseEnter (fadeInClass, className) {
	if (productAniLoading == true) {
		var fade = $("."+fadeInClass);
		var trans = $("."+className);
		fade.stop().fadeIn('slow');
		trans.removeClass('t_s_1');
		trans.addClass('transition_3 t_s_1_2');
	}
}

function boxingMouseLeave (fadeInClass, className) {
	if (productAniLoading == true) {
		var fade = $("."+fadeInClass);
		var trans = $("."+className);
		fade.stop().fadeOut('slow');
		trans.removeClass('t_s_1_2');
		trans.addClass('t_s_1');
	}
}