function loh_prepare_slider(raw_selector, target_selector) {
  var $ = jQuery;
  // Prepare the image slider
  $(raw_selector).each(function(i, element) {
    var caption_selector = 'nivo-html-caption-' + i,
        $slider = $(target_selector);

    // prepare the image/a slide item
    $slide = $('p:first-child > a, p:first-child > img', element);
    if( $slide.has('img') ) {
      $img = $slide.find('img');
    }
    else {
      $img = $slide;
    }

    if( !$img.hasAttr('title') || $img.attr('title') == '' ) {
      $img.attr('title', '#' + caption_selector);
    }
    $slide.appendTo( $slider );

    // pull out the caption
    $caption_container = $('<div />', { 'class' : 'nivo-html-caption', id : caption_selector });
    $caption_container.append( $('.caption', element) );
    $slider.after($caption_container);

    // remove the initial slide/caption container
    $(element).remove();
  });

  $slider = $(target_selector);
  $slider.nivoSlider({ effect : 'fade' });

  // Set up the left and right nav arrows in a navigational container
  $nav = $('.nivo-controlNav');
  $leftArrow = $('<div class="nivo-controlNav-loh"><a class="nivo-control left-arrow">Previous</a></div>');
  $rightArrow = $('<div class="nivo-controlNav-loh"><a class="nivo-control right-arrow">Next</a></div>');

  $navContainer = $('<div class="nivo-controlNav-container"></div>');
  $nav.before($navContainer);
  $navContainer.append($leftArrow).append($nav).append($rightArrow);

  // Since there's no api, hook up left and right arrows with slider equivalents
  $rightArrow.click(function() { $('a.nivo-nextNav', $slider.get()).trigger('click'); } );
  $leftArrow.click(function() { $('a.nivo-prevNav', $slider.get()).trigger('click'); });

/*
  effects: 
  'random', 'sliceDownRight', 'sliceDownLeft', 
  'sliceUpRight', 'sliceUpLeft', 'sliceUpDown',
  'sliceUpDownLeft', 'fold', 'fade', 'boxRandom',
  'boxRain','boxRainReverse','boxRainGrow',
  'boxRainGrowReverse'

  defaults:
  effect: 'random',
  slices: 15,
  boxCols: 8,
  boxRows: 4,
  animSpeed: 500,
  pauseTime: 3000,
  startSlide: 0,
  directionNav: true,
  directionNavHide: true,
  controlNav: true,
  controlNavThumbs: false,
  controlNavThumbsFromRel: false,
  controlNavThumbsSearch: '.jpg',
  controlNavThumbsReplace: '_thumb.jpg',
  keyboardNav: true,
  pauseOnHover: true,
  manualAdvance: false,
  captionOpacity: 0.8,
  prevText: 'Prev',
  nextText: 'Next',
  randomStart: false,
  beforeChange: function(){},
  afterChange: function(){},
  slideshowEnd: function(){},
  lastSlide: function(){},
  afterLoad: function(){}
*/

} // loh_prepare_slider
