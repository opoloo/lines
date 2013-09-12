$(document).ready(function(){
  //.parallax(xPosition, speedFactor, outerHeight) options:
  //xPosition - Horizontal position of the element
  //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
  //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
  $('#header').parallax("50%", 0.2);
  $('#footer').parallax("50%", 0.4);

  // Smooth Anchor Scrolling
  $('a').click(function(){
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 80
    }, 500);
    return false;
  });
})