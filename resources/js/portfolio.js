$(document).ready(function () {
  $(".js-class-feature").waypoint(function (direction) {
    if (direction == "down") {
      $("nav").addClass("sticky");
    } else {
      $("nav").removeClass("sticky");
    }
  });

  // var waypoint = new Waypoint({
  //     element: document.getElementById('waypoint'),
  //     handler: function(direction) {
  //       console.log('Scrolled to waypoint!')
  //     }
  //   })
});
