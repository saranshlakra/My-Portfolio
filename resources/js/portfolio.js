$(document).ready(function () {
  // $(".js-class-feature").waypoint(
  //   function (direction) {
  //     if (direction == "down") {
  //       $("nav").addClass("sticky");
  //     } else {
  //       // $("nav").removeClass("sticky");
  //     }
  //   },
  //   {
  //     offset: "8%",
  //   }
  // );

  //-----------Animation--------------

  $(".js-an-1").waypoint(
    function () {
      $(".js-an-1").addClass("animate__animated animate__backInDown");
    },
    {
      offset: "40%",
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

  $(".js-an-4-1").waypoint(
    function () {
      $(".js-an-4-1").addClass("animate__animated animate__fadeInUp");
    },
    {
      offset: "50%",
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
  $(".js-an-9").waypoint(
    function () {
      $(".js-an-9").addClass("animate__animated animate__swing");
    },
    {
      offset: "50%",
    }
  );
  $(".js-an-10").waypoint(
    function () {
      $(".js-an-10").addClass("animate__animated animate__tada");
    },
    {
      offset: "50%",
    }
  );
  $(".js-an-11").waypoint(
    function () {
      $(".js-an-11").addClass("animate__animated animate__tada");
    },
    {
      offset: "50%",
    }
  );

  $(".check-icon-0").click(function () {
    $(".check-icon-0").addClass("nav-icon-0");
    $(".check-icon-0").removeClass("nav-icon-1");
    $(".check-icon-1").addClass("nav-icon-1");
  });

  $(".check-icon-1").click(function () {
    $(".check-icon-1").addClass("nav-icon-0");
    $(".check-icon-1").removeClass("nav-icon-1");
    $(".check-icon-0").addClass("nav-icon-1");
  });

  $(".nav-icon").click(function () {
    var nav = $(".transparent");

    nav.slideToggle(200);
    $(".transparent1").removeClass("hide-nav");
  });
  $(".transparent").click(function () {
    $(".transparent").addClass("hide-nav");
    $(".check-icon-1").addClass("nav-icon-0");
    $(".check-icon-1").removeClass("nav-icon-1");
    $(".check-icon-0").addClass("nav-icon-1");
  });
});

var windowWidth = $(window).width();

$(document).ready(function ($) {
  if (windowWidth < 992) {
    $(".col-new").addClass("span2");
  } else if (windowWidth > 993) {
    $(".col-new").addClass("span-1-of-4");
  }
});
