$(document).ready(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() > 400) {
      $('.home').removeClass('nav-active');
      $('.home').removeClass('bg-red-light');
      $('.beranda').removeClass('clr-white');
      $('.home-2').addClass('nav-active');
      $('.home-2').addClass('bg-red-light');
      $('.home-2').addClass('clr-white');
      $('.home-2').removeClass('clr-black');
    } else {
      $('.home-2').removeClass('nav-active');
      $('.home-2').removeClass('bg-red-light');
      $('.home').addClass('nav-active');
      $('.home').addClass('bg-red-light');
    }
  });
  $('.home').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
});
