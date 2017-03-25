(function () {
	run();

	function run() {
		attachEvents();
	}

	function attachEvents() {
		$('div.main-menu-link').click(toggleDropdown);
	}

	function toggleDropdown() {
		var $item = $(this).closest('.main-menu-item');
		if($item.hasClass('selected')) {
			hideDropDown($item);
		}
		else {
			showDropDown($item);
		}
		aside.togglePosition();
	}

	function showDropDown($item) {
		$('.main-menu-item').not($item).removeClass('selected');
		$item.addClass('selected');
	}

	function hideDropDown($item) {
		$item.removeClass('selected');
	}
})();