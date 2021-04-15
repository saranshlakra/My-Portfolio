$(document).ready(function () {
  $(".js-class-feature").waypoint(
    function (direction) {
      if (direction == "down") {
        $("nav").addClass("sticky");
      } else {
        $("nav").removeClass("sticky");
      }
    },
    {
      offset: "8%",
    }
  );
});

var windowWidth = $(window).width();

jQuery(document).ready(function ($) {
  if (windowWidth < 992) {
    $(".col-new").addClass("span2");
  } else if (windowWidth > 993) {
    $(".col-new").addClass("span-1-of-4");
  }
});
