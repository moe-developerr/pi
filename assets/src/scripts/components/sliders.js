(function ($w) {
  var $fullHeightSlider = $('.full-height-slider');
  var $visibleNearbySlider = $('.visible-nearby-slider');
  var $defaultSlider = $('.default-slider');
  var $gallerSlider = $('.gallery');
  var fullHeightSlider = null;
  var debounceTime = 100;
  var debounceTimeout = null;
  var options = null;
  run();

  function run() {
    setOptions();
    init();
    updateHeight();
    updateHeightOnResize();
  }

  function init() {
    fullHeightSlider = $fullHeightSlider.royalSlider(options.fullHeightSlider).data('royalSlider');
    $defaultSlider.royalSlider(options.defaultSlider);
    $visibleNearbySlider.flickity(options.visibleNearbySlider);
    $gallerSlider.royalSlider(options.gallerySlider);
  }

  function updateHeight() {
    if(fullHeightSlider != null) {
      if($w.width() >= 768) {
        $fullHeightSlider.height($w.height() - (+$fullHeightSlider.attr('data-subtracted-height')));
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
    if(debounceTimeout) clearTimeout(debounceTimeout);
    debounceTimeout = setTimeout(fn, debounceTime);
  }

  function setOptions() {
    options = {
      "defaultSlider": {
        controlNavigation: 'none',
        imageScaleMode: 'fill',
        // arrowsNav: false,
        arrowsNavAutoHide: true,
        keyboardNavEnabled: true,
        imageAlignCenter: true,
        transitionType: 'fade',
        loop: true,
        globalCaption: false,
        autoPlay: {
          enabled: true,
          pauseOnHover: true,
          delay: 3000,
          stopAtAction: false,
        }
      },
      "fullHeightSlider": {
        controlNavigation: 'none',
        imageScaleMode: 'fill',
        arrowsNavAutoHide: true,
        keyboardNavEnabled: true,
        imageAlignCenter: true,
        transitionType: 'fade',
        loop: true,
        globalCaption: true,
        autoPlay: {
          enabled: true,
          pauseOnHover: true,
          delay: 3000,
          stopAtAction: false,
        }
      },
      "visibleNearbySlider": {
        setGallerySize: true,
        initialIndex: 1,
        cellAlign: 'center',
        contain: true,
        pageDots: false,
        bgLazyLoad: 1,
        autoPlay: false,
        arrowShape: { 
          x0: 10,
          x1: 60, y1: 50,
          x2: 65, y2: 50,
          x3: 15
        }
      },
      "gallerySlider": {
        controlNavigation: 'thumbnails',
        loop: true,
        autoScaleSlider: true,
        autoScaleSliderWidth: 800,
        autoScaleSliderHeight: 600,
        imageScaleMode: 'fill',
        navigateByClick: true,
        numImagesToPreload: 2,
        arrowsNav: false,
        keyboardNavEnabled: true,
        fadeinLoadedSlide: true,
        globalCaption: false,
        globalCaptionInside: false,
        thumbs: {
          appendSpan: true,
          firstMargin: false,
          paddingBottom: 0,
          spacing: 10
        }
      }
    };
  }
})($(window));