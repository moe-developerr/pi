filter = (function () {
	var $panels = {};

	function togglePanels() {
		$panels.removeClass('hide');	
		$('.filter-checkbox:checked').each(function () {
			$panels.filter('[data-'+getCheckboxType($(this))+'="false"]').addClass('hide');
		});
	}

	function reloadIframe() {
		$('.iframe').attr('src', '/apartments.php?sortBy='+$(this).val())
	}

	function getCheckboxType($checkbox) {
		var checkboxType = '';
		if($checkbox.attr('data-available'))
			checkboxType = 'available';
		else if($checkbox.attr('data-terrace'))
			checkboxType = 'terrace';
		else if($checkbox.attr('data-duplex'))
			checkboxType = 'duplex';
		else if($checkbox.attr('data-simplex'))
			checkboxType = 'simplex';
		return checkboxType;
	}

	function onIframeDocumentReady() {
		$panels = $('.iframe').contents().find('.search-panel-wrapper');
		$('.filter-checkbox').change(togglePanels);
		$('.filter-dropdown').change(reloadIframe);
	}

	return {
		onIframeDocumentReady: onIframeDocumentReady
	};
})();