com = window.com || {};
com.qualcomm = com.qualcomm || {};

/**
 * @class com.qualcomm.snapdragon
 * Static object for Snapdragon functions.
 * @param {object} $ jQuery
 */
com.qualcomm.snapdragon = (function($){

  var initNav = function() {
    $('.zone-1 a').smoothScroll({
      offset : -116
    });
    $('.zone-2 a, .zone-3 a, .zone-4 a, .zone-5 a, .nav-tab a').smoothScroll({
      offset : -61
    });
  };

  var initNavWaypoints = function() {
    /*$('.zone-1').waypoint(function() {

    });*/
  };

  var initExpChooser = function() {
    var isAnimating = false;

    $('.chooser-nav a').on('click', function(e) {
      e.preventDefault();
      if (isAnimating) { return false; }


      var hash = this.hash.substr(1),
      currentmedia = $.find('.exp-media.visible'),
      currentdesc = $.find('.exp-description.visible'),
      selectionmedia = $('.exp-media-box .' + hash),
      selectiondesc = $('.exp-description-box .' + hash);

      // uses Transit for CSS animations
      // http://ricostacruz.com/jquery.transit/
      if (!$(currentmedia).hasClass(hash) && isAnimating === false) {
        isAnimating = true;
        // animate current media
        $(currentmedia).transition({
          top : '-253px'
        }, 300, function() {
          $(currentmedia).removeClass('visible');
          $(currentmedia).css('top', '253px');
        });
        // animate current description
        $(currentdesc).transition({
          top : '253px'
        }, 300, function() {
          $(currentdesc).removeClass('visible');
          $(currentdesc).css('top', -this.outerHeight());
        });

        // animate selected media
        $(selectionmedia).delay(300).transition({
          top : 0
        }, 300, function() {
          $(selectionmedia).addClass('visible');
          isAnimating = false;
        });
        // animate selected description
        $(selectiondesc).delay(300).transition({
          top : 0
        }, 300, function() {
          $(selectiondesc).addClass('visible');
          isAnimating = false;
        });
      } else {
        return false;
      }
    });
  };

  var initExpElements = function() {
    var elCount = 3;

    enquire.register('screen and (max-width: 719px)', {
      match : function() {

      }
    }).register('screen and (min-width: 720px) and (max-width: 959px)', {
      match : matchIt
    }).register('screen and (min-width: 960px) and (max-width: 1280px)', {
      match : matchIt
    }).register('screen and (min-width: 1281px)', {
      match : matchIt
    }).listen();

    /*while (--elCount) {
      // position all but first picture
      if (elCount + 1 > 1) {
          $('.exp-media-box .exp-media:nth-child(' + (elCount + 1) + ')').css(
              'top', '253px');
          $('.exp-description-box').css('height', $('.exp-content').outerHeight());
          $('.exp-description-box .exp-description:nth-child(' + (elCount + 1) + ')').css(
              'top', '-253px');
      }
    }*/
  };

  var matchIt = function() {
    var elCount = 3;
    while (--elCount + 1) {
      // position all but first picture
      if (!$('.exp-description:eq(' + elCount + ')').hasClass('visible')) {
          $('.exp-media-box .exp-media:nth-child(' + (elCount + 1) + ')').css(
              'top', '253px');
          $('.exp-description-box').css('height', $('.exp-content').outerHeight());
          $('.exp-description-box .exp-description:nth-child(' + (elCount + 1) + ')').css(
              'top', -$('.exp-content').outerHeight());
      }
    }
  };

  var initFeatureDevice = function() {
    var id;

    $('.marker-bar-rail .marker-bar-container').css({left : '-28px'});

    $('.node-tab').on('click', function(e) {
      //console.log($(this).prop('class'));
      // close all open modals
      closeDeviceModal();
      removeMarkers();
      // get number from #container-modal-n
      id = $(this).attr('id').substr(-1);
      // TODO : add active to marker class

      // hide .featured-device-tout
      $('.featured-device-tout').transition({'opacity' : 0});
      // show modal
      $('#container-modal-' + id).addClass('active'); //.transition({opacity : 1})
      $(this).find('.marker-bar').removeClass('tab-hover').addClass('active');


      markerAnimate(this);

    });

    $('.tab-0, .tab-1, .tab-2, .tab-3').hover(function() {
      if ($(this).find('.hover-image').hasClass('active') === false) {
        $(this).find('.hover-image').toggleClass('hover-image-hover');
      }
      if ($(this).find('.marker-bar').hasClass('active') === false) {
        $(this).find('.marker-bar').toggleClass('tab-hover');
      }
    });

    $('.close-btn a').on('click', function (e) {
      e.preventDefault();
      removeMarkers();
      $(this).parent().parent().removeClass('active');
      // show .featured-device-tout
      $('.featured-device-tout').transition({'opacity' : 1});
    });
  };

  var markerAnimate = function(obj) {
    var t = obj,
    mb = $('.marker-bar-rail .marker-bar-container'),
    tabWidth = $('.tab-0').width(),
    pos = mb.position(),
    currentPos = pos.left,
    leftPos,
    interval;

    //mb.removeClass('pos-tab-0 pos-tab-1 pos-tab-2 pos-tab-3');
    if ($(t).hasClass('tab-0')) {
      leftPos = (tabWidth * 1) - (tabWidth * 0.5);
    } else if ($(t).hasClass('tab-1')) {
      leftPos = (tabWidth * 2) - (tabWidth * 0.5); //436
    } else if ($(t).hasClass('tab-2')) {
      leftPos = (tabWidth * 3) - (tabWidth * 0.5);
    } else if ($(t).hasClass('tab-3')) {
      leftPos = (tabWidth * 4) - (tabWidth * 0.5); //1036
    }

    mb.animate({
      left: (leftPos - 15) + 'px'
    },
    {
      duration: 500,
      step : stepFunc
    });

    function stepFunc(pos) {
      // change the background position of sprite based on left position of marker-bar-container
      if (pos > -28 && pos < (tabWidth * 1)) {
          $(this).css({'background-position' : '0 0'});
        } else if (pos >= (tabWidth * 1) && pos < (tabWidth * 2)) {
          $(this).css({'background-position' : '0 -14px'});
        } else if (pos >= (tabWidth * 2) && pos < (tabWidth * 3)) {
          $(this).css({'background-position' : '0 -28px'});
        } else if (pos >= (tabWidth * 3)) {
          $(this).css({'background-position' : '0 -42px'});
        }
    }
  };

  var removeMarkers = function() {
    $('.node-tab').find('.marker-bar.active').each(function() {
      $(this).removeClass('active');
    });
  };

  var closeDeviceModal = function() {
    /*$('.content').find('.modal-detail.active').each(function() {
      $(this).removeClass('active');
    });*/
// new code follows
    $('.modal-container').find('.modal-detail.active').each(function() {
      $(this).removeClass('active');
    });
  };

  var initResize = function() {
    $(window).resize(function() {
      if ($(window).height() >= 720) {
        $('.experienceZone').css('height', $(window).height()); // + 62
      }
    });
    $(window).trigger('resize');
  };

  return {
    initialize : function () {
      initFeatureDevice();
      initExpChooser();
      initExpElements();
      initNavWaypoints();
      initNav();
      initResize();
    }
  }
})(jQuery);


jQuery(function() {
  com.qualcomm.snapdragon.initialize();

  $this = jQuery('.sticky-nav');
  $window = jQuery(window);
  var tabClick = false;

  $window.scroll(function(e){
    if (tabClick == false) {
      var diff = $window.scrollTop() - jQuery('.experienceZone').height();
      //console.log(diff, jQuery('.experienceZone').height() * 0.5);
      /*if (diff >= -61) {
        jQuery('.sticky-nav').removeClass('stuck-bottom').addClass('stuck-top');
      } else {
        jQuery('.sticky-nav').removeClass('stuck-top').addClass('stuck-bottom');
      }*/

      // hide/show nav-tab
      if (diff >= -(jQuery('.experienceZone').height() * 0.5)) {
        jQuery('.nav-tab').addClass('nav-tab-hide');
      } else {
        jQuery('.nav-tab').removeClass('nav-tab-hide');
      }
      // hide/show nav-section
      if (diff >= -100) {
        jQuery('.nav-section').addClass('nav-section-show');
      } else {
        jQuery('.nav-section').removeClass('nav-section-show');
      }
    }
  });

});