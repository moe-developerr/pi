(function () {
	run();

	function run() {
		attachEvents();
	}

	function attachEvents() {
		$('.find-home-btn').click(findHome);
	}

	function findHome() {
		collectData();
		redirect();
	}

	function collectData() {

	}

	function redirect() {
		
	}
})();