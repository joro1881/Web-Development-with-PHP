  $(function() {
    $('.tooltip-carousel').popover();

    $('#carousel-example-generic').on('slide.bs.carousel', function() {
      $('.tooltip-carousel').popover('hide');
      $(this).find('.caraousel-tooltip-item.active').fadeOut(function() {
        $(this).removeClass('active');
      });
    }); 

    $('.tooltip-carousel').mouseenter(function() {
      $(this).popover('show');
    }).mouseleave(function() {
      $(this).popover('hide');
    });
  });