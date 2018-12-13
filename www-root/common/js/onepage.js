var lastAnimation = 0;
var scrollPageCnt = 0;
var firstTouchY = 0;

$(function () {
	var height = window.innerHeight;
	$(".scroll-item").css({"height": (height)+"px"});
	$(window).on('mousewheel wheel scroll DOMMouseScroll', function(event) {
		event.preventDefault();
		var timeNow = new Date().getTime();

		if(timeNow - lastAnimation < 1000) return;

		var scrollEvent = event.originalEvent;

		if (scrollEvent.wheelDelta > 0 || scrollEvent.deltaY < 0) {
			scrollUp();
		} else {
			scrollDown();
		}
		lastAnimation = timeNow;
	});

	$(window).on('touchstart', function (event) {
		var scrollEvent = event.originalEvent;
		firstTouchY = scrollEvent.changedTouches[0].screenY;
	});

	$(window).on('touchend', function (event) {
		var scrollEvent = event.originalEvent;

		var lastTouchY = scrollEvent.changedTouches[0].screenY;

		if (firstTouchY == lastTouchY) {
		} else if (firstTouchY > lastTouchY) {
			scrollDown();
		} else {
			scrollUp();
		}
	});
	$(window).on('touchmove', function (event) {
		event.preventDefault();
	});
});

function scrollUp () {
	var windowHeight = window.innerHeight;
	var windowMcnt = windowHeight * (scrollPageCnt-1);
	var nthPrev = scrollPageCnt;
	var nthNext = scrollPageCnt+1;
 
	if ($("#scroll-container > .scroll-item:nth-child("+nthPrev+")").length > 0) {
		$("#scroll-container > .scroll-item:nth-child("+nthPrev+")").animate({'top': "0%"}, 500);
		$("#scroll-container > .scroll-item:nth-child("+nthNext+")").animate({'top': "100%"}, 500);

		scrollPageCnt--;
	}
	if (scrollPageCnt == 0) {
		$('#scroll-container').removeClass('bg-darkGray');
		$('#scroll-container').addClass('bg-white');
	}
}

function scrollDown () {
	var windowHeight = window.innerHeight;
	var windowMcnt = windowHeight * (scrollPageCnt+1);
	var nthPrev = (scrollPageCnt+1);
	var nthNext = (scrollPageCnt+2);

	if ($("#scroll-container > .scroll-item:nth-child("+nthNext+")").length > 0) {
		$("#scroll-container > .scroll-item:nth-child("+nthPrev+")").animate({'top': "-100%"}, 500);
		$("#scroll-container > .scroll-item:nth-child("+nthNext+")").animate({'top': "0%"}, 500);

		scrollPageCnt++;
	}
	if (window.location.pathname != "/address.php") {
		if (scrollPageCnt == 1) {
			$('#scroll-container').removeClass('bg-white');
			$('#scroll-container').addClass('bg-darkGray');
		}
	}
}