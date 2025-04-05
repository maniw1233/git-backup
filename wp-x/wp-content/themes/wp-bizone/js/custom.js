/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

jQuery(document).ready(function () {

  var topMenu = jQuery('#menu-top-menu');
  topMenu.find('li.menu-item-has-children > a').append('<i class="fas fa-angle-down"></i>');
  topMenu.find(' > li').last().addClass('lastChild');

  var mainMenu = jQuery('.wrapper-menu ul.navbar-nav');
  mainMenu.find('li.menu-item-has-children > a').append('<i class="fas fa-angle-down"></i>');
  mainMenu.find(' > li').last().addClass('lastChild');

  const menuItems = document.querySelectorAll('.menu .menu-item-has-children');

  function addClassToParent(event) {
    const menuItem = event.target;
    menuItem.parentElement.classList.add('focus');
  }

  function removeClassFromParent(event) {
    const menuItem = event.target;
    menuItem.parentElement.classList.remove('focus');
  }

  menuItems.forEach(item => {
    item.addEventListener('mouseenter', addClassToParent);
    item.addEventListener('mouseleave', removeClassFromParent);

    item.addEventListener('focusin', addClassToParent);
    item.addEventListener('focusout', removeClassFromParent);

    const subMenu = item.querySelector('.sub-menu');
    if (subMenu) {
      subMenu.addEventListener('mouseenter', addClassToParent);
      subMenu.addEventListener('mouseleave', removeClassFromParent);

      subMenu.addEventListener('focusin', function () {
        item.classList.add('focus');
      });
      subMenu.addEventListener('focusout', function () {
        item.classList.remove('focus');
      });
    }
  });

  const megaMenuItems = document.querySelectorAll('.navbar .mega-menu-item-has-children');

  function addClassToParent(event) {
    const megaMenuItems = event.target;
    megaMenuItems.parentElement.classList.add('focus');
  }

  function removeClassFromParent(event) {
    const megaMenuItems = event.target;
    megaMenuItems.parentElement.classList.remove('focus');
  }

  megaMenuItems.forEach(item => {
    item.addEventListener('mouseenter', addClassToParent);
    item.addEventListener('mouseleave', removeClassFromParent);

    item.addEventListener('focusin', addClassToParent);
    item.addEventListener('focusout', removeClassFromParent);

    const subMenu = item.querySelector('.mega-sub-menu');
    if (subMenu) {
      subMenu.addEventListener('mouseenter', addClassToParent);
      subMenu.addEventListener('mouseleave', removeClassFromParent);

      subMenu.addEventListener('focusin', function () {
        item.classList.add('focus');
      });
      subMenu.addEventListener('focusout', function () {
        item.classList.remove('focus');
      });
    }
  });

  function footerToBottom() {
    var heightHeader = jQuery('.header').outerHeight(true);
    var heightFooter = jQuery('#footer').outerHeight(true);
    var heightWindow = jQuery(window).outerHeight(true);
    var bodyHeight = jQuery("body").prop("scrollHeight");
    if (bodyHeight > heightWindow) {
      jQuery('#wrapper-content').css({ 'min-height': 0 });
    } else {
      jQuery('#wrapper-content').css({ 'min-height': heightWindow - heightFooter - heightHeader });
    }

  }

  footerToBottom();
  jQuery(window).resize(function () {
    footerToBottom();
  });


  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 200) {
      jQuery('.top_up').fadeIn();
    } else {
      jQuery('.top_up').fadeOut();
    }
  });
  jQuery('.top_up').click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 1100);
    return false;
  });

  // ----------------------
  var show = true;
  var countbox = ".wrapperStatistics";
  el = jQuery(".wrapperStatistics").html();
  if (!el) {

  } else {
    jQuery(window).on("scroll load resize", function () {
      if (!show) return false;
      var w_top = jQuery(window).scrollTop();
      var e_top = jQuery(countbox).offset().top;
      var w_height = jQuery(window).height();
      var d_height = jQuery(document).height();
      var e_height = jQuery(countbox).outerHeight();
      if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
        jQuery('.statisticsNumber').css('opacity', '1');
        jQuery('.statisticsNumber').spincrement({
          thousandSeparator: " ",
          duration: 10000
        });

        show = false;
      }
    });
  }
  // ---------------------

});