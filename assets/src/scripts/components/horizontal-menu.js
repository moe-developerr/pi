(function ($w){
	var debounceTime = 100, debounceTimeout = 0;
	var $items = $('.horizontal-menu-item');
	run();

	function run() {
		attachEvents();
	}

	function attachEvents() {
		$('.horizontal-menu-item').click(toggleSublist);
		$('.horizontal-menu-selected-link').click(toggleMenu);
		$w.resize(function () {
			debounce(hideSublists)
		});
		hideSublists();
	}

	function debounce(fn) {
		clearTimeout(debounceTimeout);
		debounceTimeout = setTimeout(fn, debounceTime);
	}

	function hideSublists() { $items.removeClass('selected'); }

	function toggleSublist(e) {
		var $this = $(this);
		if($this.children('div.horizontal-menu-link').length) {
			$this.hasClass('selected') ? $this.removeClass('selected') : $this.addClass('selected');
			$this.children('.horizontal-menu-sublist').css('min-width', $this.width());
		}
	}

	function toggleMenu(e) {
		var $this = $(this);
		$this.hasClass('selected') ? $this.removeClass('selected') : $this.addClass('selected');
	}
})($(window));