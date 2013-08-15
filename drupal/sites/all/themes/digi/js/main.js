com = window.com || {};
com.qualcomm = com.qualcomm || {};

/**
 * @class com.qualcomm.snapdragon
 * Static object for Snapdragon functions.
 * @param {object} $ jQuery
 */
com.qualcomm.snapdragon = (function($){

  var initNav= function() {
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

  var initResize = function() {
    $(window).resize(function() {
      if ($(window).height() >= 720) {
        $('.experienceZone').css('height', $(window).height() + 62);
      }
    });
    $(window).trigger('resize');
  };

  return {
    initialize : function () {
      initExpChooser();
      initExpElements();
      initNavWaypoints();
      initNav();
      initResize();
    }
  }
})(jQuery);




$(function() {
  /*$('.carousel').carousel({
      interval: false
  });*/

  com.qualcomm.snapdragon.initialize();

  $this = $('.sticky-nav');
  $window = $(window);
  var tabClick = false;


  $window.scroll(function(e){
    //console.log(tabClick, $window.scrollTop());
    //console.log($window.scrollTop() - $('.experienceZone').height());
    if (tabClick == false) {
      var diff = $window.scrollTop() - $('.experienceZone').height();
      if (diff >= -61) {
        $('.sticky-nav').removeClass('stuck-bottom').addClass('stuck-top');
      } else {
        $('.sticky-nav').removeClass('stuck-top').addClass('stuck-bottom');
      }
    }

  });

  $('.nav-tab a').on('click', function(e) {
    //console.log('click', $('.experienceZone').height())
    //$(window).scrollTop(976);
  });
});