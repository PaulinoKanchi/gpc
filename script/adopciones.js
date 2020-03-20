$(document).ready(function() {
  // Scroll
  $(window).scroll(function(){
    var scrollTop = $(window).scrollTop();
    var scrollBottom = scrollTop + $(window).height();

    if ($("header").offset().top + $("header").height() >= $(".adopciones-screen-bottom").offset().top + $(".adopciones-screen-bottom").height()){
      var filterWidth = $(".filter").width();
      var filterSpace = $(".filter").offset().top - $("header").offset().top;
      $(".filter-container").css({
        "position":"fixed",
        "top":"0",
        "margin-top":filterSpace,
        "width":filterWidth
      });
    } else {
      $(".filter-container").css({
        "position":"",
        "top":"",
        "margin-top":""
      });
    }
  });
});
