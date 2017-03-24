<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="/src/scripts/jquery.selectric.js"></script>
<script src="/src/scripts/jquery-ui.min"></script>
<script src="./src/scripts/jquery.royalslider.min.js"></script>
<script src="./src/scripts/perfect-scrollbar.jquery.min.js"></script>
<script>
	// select component
  $('.component-select').selectric();

  // slider-range component
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

  // slider
  (function ($w) {
    var $fullHeightSlider = $('.full-height-slider');
    var $visibleNearbySlider = $('.visible-nearby-slider');
    var $defaultSlider = $('.default-slider');
    var fullHeightSlider = null;
    var debounceTime = 100;
    var timeout = null;
    var options = null;
    run();

    function run() {
      setOptions();
      init();
      updateHeight();
      updateHeightOnResize();
    }

    function init() {
      fullHeightSlider = $fullHeightSlider.royalSlider(options.defaultSlider).data('royalSlider');
      $defaultSlider.royalSlider(options.defaultSlider);
      // $w.load(function () {
      //   $visibleNearbySlider.royalSlider(options.visibleNearby);
      // });
    }

    function updateHeight() {
      if(fullHeightSlider != null) {
        if($w.width() > 768) {
          $fullHeightSlider.height($w.height() - 35 - 30);
          fullHeightSlider.updateSliderSize(true);
        }
        else {
          $fullHeightSlider.height('');
          fullHeightSlider.updateSliderSize(true);
        }
      }
    }

    function updateHeightOnResize() {
      if(fullHeightSlider != null) {
        $w.resize(function () {
          debounce(updateHeight);
        });
      }
    }

    function debounce(fn) {
      if(timeout) clearTimeout(timeout);
      timeout = setTimeout(fn, debounceTime);
    }

    function setOptions() {
      options = {
        "defaultSlider": {
          controlNavigation: 'none',
          imageScaleMode: 'fill',
          arrowsNavAutoHide: true,
          keyboardNavEnabled: true,
          imageAlignCenter: true,
          transitionType: 'fade',
          loop: true,
          autoPlay: {
            enabled: true,
            pauseOnHover: true,
            delay: 3000,
            stopAtAction: false,
          }
        }
      };
    }
  })($(window));
  
  // scrollbar
  $('.aside').perfectScrollbar();
</script>