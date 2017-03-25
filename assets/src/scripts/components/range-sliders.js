(function () {
	run();

	function run() {
		init();
	}

	function init() {
		initAreaSlider();
		initPriceSlider();
	}

	function initAreaSlider() {
		$( ".area-slider-range" ).slider({
		    range: true,
		    min: 150,
		    max: 1000,
		    values: [ 250, 700 ],
		    create: function (event, ui) {
		    	var values = $( ".area-slider-range" ).slider( "option", "values" );
			$( ".area-slider-start" ).text(values[0]);
		      $( ".area-slider-end" ).text(values[1]);
		    },
		    slide: function( event, ui ) {
		      $( ".area-slider-start" ).text(ui.values[ 0 ]);
		      $( ".area-slider-end" ).text(ui.values[ 1 ]);
		    }
		});
	}

	function initPriceSlider() {
		$( ".price-slider-range" ).slider({
		    range: true,
		    min: 150000,
		    max: 1000000,
		    values: [ 300000, 700000 ],
		    create: function (event, ui) {
		    	var values = $( ".price-slider-range" ).slider( "option", "values" );
			$( ".price-slider-start" ).text(values[0]);
		      $( ".price-slider-end" ).text(values[1]);
		    },
		    slide: function( event, ui ) {
		      $( ".price-slider-start" ).text(ui.values[ 0 ]);
		      $( ".price-slider-end" ).text(ui.values[ 1 ]);
		    }
		});
	}
})();