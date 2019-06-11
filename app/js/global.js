$(document).ready(function(){
  // Checks if button #scroll on click back to top
  $('#scroll').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
  // Checks if Button Anti Korupsi on click back to bottom
  $('.D-Ba').click(function(){
    $("html, body").animate({ scrollTop: 600 }, 600);
  });
  // Checks if Button SELANJUTNYA on click back to bottom
  $('#D-selanjutnya-1').click(function(){
    $("html, body").animate({ scrollTop: 600 }, 600);
  });
  $('#D-selanjutnya-2').click(function(){
    $("html, body").animate({ scrollTop: 600 }, 600);
  });
  $('#D-selanjutnya-3').click(function(){
    $("html, body").animate({ scrollTop: 600 }, 600);
  });

  $('#T-selanjutnya-1').click(function(){
    $("html, body").animate({ scrollTop: 400 }, 600);
  });
  $('#T-selanjutnya-2').click(function(){
    $("html, body").animate({ scrollTop: 400 }, 600);
  });
  $('#T-selanjutnya-3').click(function(){
    $("html, body").animate({ scrollTop: 400 }, 600);
  });

  $('#M-selanjutnya-1').click(function(){
    $("html, body").animate({ scrollTop: 550 }, 600);
  });
  $('#M-selanjutnya-2').click(function(){
    $("html, body").animate({ scrollTop: 550 }, 600);
  });
  $('#M-selanjutnya-3').click(function(){
    $("html, body").animate({ scrollTop: 550 }, 600);
  });

});
