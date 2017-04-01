(function ($w){
	run();

	function run() {
		attachEvents();
	}

	function attachEvents() {
		$('.horizontal-menu-item').click(toggleSublist);
		$('.horizontal-menu-selected-link').click(toggleMenu);
	}

	function toggleSublist(e) {
		var $this = $(this);
		if($this.children('div.horizontal-menu-link').length)
			$this.hasClass('selected') ? $this.removeClass('selected') : $this.addClass('selected');
	}

	function toggleMenu(e) {
		var $this = $(this);
		$this.hasClass('selected') ? $this.removeClass('selected') : $this.addClass('selected');
	}
})($(window));