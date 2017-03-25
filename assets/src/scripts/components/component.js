(function () {
	run();

	function run() {
		attachEvents();
	}

	function attachEvents() {
		$('.component-header').click(toggleComponent);
	}

	function toggleComponent() {
		var $component = $(this).closest('.component');
		if($component.hasClass('active')) hideComponent($component);
		else showComponent($component)
		aside.togglePosition();
	}

	function showComponent($component) {
		var $otherComponents = $component.closest('.components-container').find('.component').not($component);
		$otherComponents.removeClass('active');
		$component.addClass('active');
	}

	function hideComponent($component) {
		$component.removeClass('active');
	}
})();