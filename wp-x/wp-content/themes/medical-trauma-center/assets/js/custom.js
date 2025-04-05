function medical_trauma_center_mobile_menu_open() {
  jQuery(".side_nav").addClass('show');
}
function medical_trauma_center_mobile_menu_close() {
  jQuery(".side_nav").removeClass('show');
}

jQuery(function($){
  $('.toggle').click(function () {
    medical_trauma_center_Keyboard_loop($('.side_nav'));
  });
});

var medical_trauma_center_Keyboard_loop = function (elem) {
  var medical_trauma_center_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var medical_trauma_center_firstTabbable = medical_trauma_center_tabbable.first();
  var medical_trauma_center_lastTabbable = medical_trauma_center_tabbable.last();
  medical_trauma_center_firstTabbable.focus();

  medical_trauma_center_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      medical_trauma_center_firstTabbable.focus();
    }
  });

  medical_trauma_center_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      medical_trauma_center_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};

jQuery('#banner-area .owl-carousel').owlCarousel({
  loop: true,
  margin: 0,
  nav: false,
  dots: true,
  navText: [
    '<span>PREV</span>', // Left arrow
    '<span>NEXT</span>' // Right arrow
  ],
  responsive: {
    0: {
      items: 1,
      dots: false,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    }
  }
});