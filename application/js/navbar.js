$(document).ready(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() > 50) {
      $('#scroll').fadeIn();
      $('.navbar').addClass('bg-white');
      $('.navbar').addClass('shadow-sm');
      $('.navbar').removeClass('bg-transparent');
      $('.nav-link').addClass('clr-black');
      $('.nav-link').removeClass('clr-white');
      $('.navbar-toggler i').addClass('clr-black');
      $('.navbar-toggler i').removeClass('clr-white');
    } else {
      $('#scroll').fadeOut();
      $('.navbar').removeClass('bg-white');
      $('.navbar').removeClass('shadow-sm');
      $('.navbar').addClass('bg-transparent');
      $('.nav-link').addClass('clr-white');
      $('.nav-link').removeClass('clr-black');
      $('.navbar-toggler i').addClass('clr-white');
      $('.navbar-toggler i').removeClass('clr-black');
    }
  });
  $('.dropdown-submenu').click(function(){
    
  });
});
