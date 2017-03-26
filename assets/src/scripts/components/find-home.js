(function ($w) {
	var isMobile = false;
	var data = {
		location: '',
		status: '',
		priceStart: '',
		priceEnd: '',
		areaStart: '',
		areaEnd: ''
	};
	run();

	function run() {
		attachEvents();
	}

	function attachEvents() {
		$('.find-home-btn').click(findHome);
	}

	function findHome() {
		setIsMobile();
		collectData();
		redirect();
	}

	function setIsMobile() {
		isMobile = $w.width() < 768 ? true: false;
	}

	function collectData() {
		var location = '';
		var status = '';
		var priceStart = '';
		var priceEnd = '';
		var areaStart = '';
		var areaEnd = '';
		if(isMobile) {
			var $footer = $('.footer');
			location = $footer.find('.location').val();
			status = $footer.find('.status').val();
			priceStart = $footer.find('.price-slider-start').text();
			priceEnd = $footer.find('.price-slider-end').text();
			areaStart = $footer.find('.area-slider-start').text();
			areaEnd = $footer.find('.area-slider-end').text();
		}
		else {
			var $aside = $('.aside');
			location = $aside.find('.location').val();
			status = $aside.find('.status').val();
			priceStart = $aside.find('.price-slider-start').text();
			priceEnd = $aside.find('.price-slider-end').text();
			areaStart = $aside.find('.area-slider-start').text();
			areaEnd = $aside.find('.area-slider-end').text();
		}
		data.location = location;
		data.status = status;
		data.priceStart = priceStart;
		data.priceEnd = priceEnd;
		data.areaStart = areaStart;
		data.areaEnd = areaEnd;
	}

	function redirect() {
		var url = '/results?location='+data.location+'&status='+data.status+'&priceStart='+data.priceStart+'&priceEnd='+data.priceEnd+'&areaStart='+data.areaStart+'&areaEnd='+data.areaEnd;;
		location.assign(url);
	}
})($(window));