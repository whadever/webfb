
$(document).ready(function(){
  $('.bxslider').bxSlider({
        adaptiveHeight : true,
        auto : true,
        pause : 1000,
        autoHover : true,

  });
});

$('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

  // ADD SLIDEUP ANIMATION TO DROPDOWN //
$('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

var waypoint = new Waypoint({
  element: document.getElementById('navbar'),
  handler: function(direction) {
    $('#navbar').addClass('navbar-fixed-top');
  }
});

var waypoint2 = new Waypoint({
    element: document.getElementById('waypoint2'),
    handler:function(direction) {
        $('#navbar').removeClass('navbar-fixed-top');
    },
    offset: 100
});
