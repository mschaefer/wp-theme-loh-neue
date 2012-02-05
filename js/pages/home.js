jQuery(function($) { 
  // Prepare the image slider
  $('#home-slider .slider-content').each(function(i, element) {
    var caption_selector = 'nivo-html-caption-' + i,
        $slider = $('#slider');

    // prepare the image/a slide item
    $slide = $('p:first-child > a, p:first-child > img', element);
    if( $slide.has('img') ) {
      $img = $slide.find('img');
    }
    else {
      $img = $slide;
    }
    $img.attr('title', '#' + caption_selector);
    $slide.appendTo( $slider );

    // pull out the caption
    $caption_container = $('<div />', { 'class' : 'nivo-html-caption', id : caption_selector });
    $caption_container.append( $('.caption', element) );
    $slider.after($caption_container);

    // remove the initial slide/caption container
    $(element).remove();
  });

  $('#slider').nivoSlider({ effect : 'fade' });
});
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
