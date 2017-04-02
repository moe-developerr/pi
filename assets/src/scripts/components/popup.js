var popup = (function () {
	var popup = document.querySelectorAll('.pswp')[0];
	var options = {
		showAnimationDuration: 0,
		hideAnimationDuration: 0
	};
	var items = [];

	run();

	function run() {
		$(function () {
			attachEvents();
		});
	}

	function attachEvents() {
		$('.floor-plans').click(function () {
			showPopup($(this));
		});
	}

	function showPopup($btn) {
		var $btn = $btn;
		var srcs = $btn.attr('data-srcs').split(',');
		var titles = $btn.attr('data-titles').split(',');
		var length = srcs.length;
		items = [];

		for(var i=0; i<length; i++) {
			items.push({
				src: srcs[i],
				w: 1200,
				h: 800,
				title: titles[i]
			});
		}
		new PhotoSwipe(popup, PhotoSwipeUI_Default, items, options).init();
	}

	return {
		showPopup: showPopup
	};
})();