$(function(){
  $('header').data('size','big');
});

$(window).scroll(function(){
  var header = $('header');
  if ($('body').scrollTop() > 0) {
    if (header.data('size') == 'big') {
      header.data('size','small').stop().animate({
        height:'40px'
      }, 600);
      header.addClass('header-compact');
      $("ul.nav-links").addClass('nav-links-compact')
      $('#sub-logo').addClass('sub-logo-compact')
      //$('#sub-logo').animate({
      //  left: "+=175",
      //  bottom: "+=40.5"
      //})
    }
  } else {
    if (header.data('size') == 'small') {
      header.data('size','big').stop().animate({
        height:'100px'
      }, 600);
      header.removeClass('header-compact');
      $("ul.nav-links").removeClass('nav-links-compact')
      $('#sub-logo').removeClass('sub-logo-compact')
      //$('#sub-logo').animate({
      // left: "-=175",
      //bottom: "-=40.5"
      //})
    }  
  }
});

$(document).ready(function(){ 
  $(".button").on("click", function(e) {
    $(document).scrollTop($(this).parent().next().offset().top);
    // $(this).parent().next() // this is the next div container.
    return false; // prevent anchor
  });
})
