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

  //-----------Animation--------------

  $(".js-an-1").waypoint(
    function () {
      $(".js-an-1").addClass("animate__animated animate__backInDown");
    },
    {
      offset: "80%",
    }
  );

  $(".js-an-2").waypoint(
    function () {
      $(".js-an-2").addClass("animate__animated animate__backInDown");
    },
    {
      offset: "60%",
    }
  );
  $(".js-an-3").waypoint(
    function () {
      $(".js-an-3").addClass("animate__animated animate__backInDown");
    },
    {
      offset: "60%",
    }
  );

  $(".js-an-4").waypoint(
    function () {
      $(".js-an-4").addClass("animate__animated animate__backInDown");
    },
    {
      offset: "70%",
    }
  );

  $(".js-an-5").waypoint(
    function () {
      $(".js-an-5").addClass("animate__animated animate__bounce");
    },
    {
      offset: "50%",
    }
  );

  $(".js-an-6").waypoint(
    function () {
      $(".js-an-6").addClass("animate__animated animate__swing");
    },
    {
      offset: "50%",
    }
  );

  $(".js-an-7").waypoint(
    function () {
      $(".js-an-7").addClass("animate__animated animate__rubberBand");
    },
    {
      offset: "50%",
    }
  );

  $(".js-an-8").waypoint(
    function () {
      $(".js-an-8").addClass("animate__animated animate__shakeX");
    },
    {
      offset: "50%",
    }
  );
});

var windowWidth = $(window).width();

$(document).ready(function ($) {
  if (windowWidth < 992) {
    $(".col-new").addClass("span2");
  } else if (windowWidth > 993) {
    $(".col-new").addClass("span-1-of-4");
  }
});
