var iframeController = (function () {

	function setHeight(height) {
		$('.iframe').height(height);
	}

	return {
		setHeight: setHeight	
	};
})();