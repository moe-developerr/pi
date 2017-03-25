var aside = (function ($w) {
	var $aside = $('.aside');
	var throttleTime = debounceTime = 100;
	var debounceTimer = null;
	var runFunction = true;
	run();

	function run() {
		attachEvents();
	}

	function attachEvents() {
		$('.aside-show').click(showAside);
		$('.aside-hide').click(hideAside);
		$w.scroll(function () {
			throttle(toggleAsidePosition);
		});
		$w.resize(function () {
			if($w.width() < 768)
				debounce(resetAsidePosition);
			else
				debounce(toggleAsidePosition);
		});
	}

	function showAside() {
		if(!$aside.hasClass('is-visible'))
			$aside.addClass('is-visible')
	}

	function hideAside() {
		if($aside.hasClass('is-visible'))
			$aside.removeClass('is-visible')
	}

	function toggleAsidePosition() {
		if($w.width() > 768) {
			var scrollTop = $w.scrollTop();
			var windowHeight = $w.height();
			var asideHeight = $aside.innerHeight();

			if(asideHeight > windowHeight) {
				$aside.css('transform', 'translateY(' + (windowHeight - asideHeight) + 'px)');
			} else {
				$aside.css('transform', 'translateY(0)');
			}

			if(scrollTop == 0)
				resetAsidePosition();

			runFunction = true;
		}
	}

	function resetAsidePosition() {
		$aside.css('transform', '');
	}

	function debounce(fn) {
		clearTimeout(debounceTimer);
		debounceTimer = setTimeout(fn, debounceTime);
	}

	function throttle(fn) {
		if(runFunction) {
			setTimeout(fn, throttleTime);
			runFunction = false;
		}
	}

	return {
		togglePosition: toggleAsidePosition
	}
})($(window));