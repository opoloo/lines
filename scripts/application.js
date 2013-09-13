$(document).ready(function(){
  //.parallax(xPosition, speedFactor, outerHeight) options:
  //xPosition - Horizontal position of the element
  //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
  //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
  $(window).resize(function() {
    if ($(window).width() >= 960) {
      $('#header').parallax("50%", 0.2);
      $('#footer').parallax("50%", 0.4);
    }
  });

  // Smooth Anchor Scrolling
  $('a').click(function(){
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 80
    }, 500);
    return false;
  });

  // Lightbox
  $('#desc').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small>Lines by Opoloo</small>';
      }
    }
  });
});