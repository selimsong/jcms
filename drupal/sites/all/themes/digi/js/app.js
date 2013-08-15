com = window.com || {};
com.qualcomm = com.qualcomm || {};

/**
 * @class com.qualcomm.snapdragon
 * Static object for Snapdragon functions.
 * @param {object} $ jQuery
 */
com.qualcomm.snapdragon = (function($){
  'use strict';

  var clickOrTouch = (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) ? 'touchend' : 'click',
    BCplayersObj = {},
    currentTab = {};

  // detect Surface RT
  var ua = navigator.userAgent,
    pattern = /MSIE 10.0; Windows NT 6.2; ARM; Trident\/6.0/,
    isSurfaceRT = pattern.test(ua);

  var initResize = function() {
    $( window ).resize( function() {
      var ww = ( document.documentElement.clientWidth ? document.documentElement.clientWidth : document.body.clientWidth );

      if ( ww >= 960 ) {
        markerAnimate(currentTab);
        $( '.experienceZone' ).css( 'height', $( window ).height() ); // + 62
        // carousel slide content
        $('.carousel-item').each(function() {
          var ici = $(this).find('.item-columns-inner'),
            icm = $(this).find('.item-column-media'),
            icc = $(this).find('.item-column-content'),
            iccib = $(this).find('.item-column-content-inner .block'),
            vl = $(this).find('.video-left'),
            vr = $(this).find('.video-right'),
            cr = $(this).find('.content-right'),
            cl = $(this).find('.content-left');
          // left-align CTA
          $(this).find('.cta-link').removeClass('cta-link-centered');

          // vertically center slide content text to image and video
          if ($(cr).length > 0) {
            //icm.css('width', ici.width() * 0.37656);
            icc.css('marginLeft', icm.width() * 1.05);
            iccib.css('height', icm.height());
          }

          if ($(cl).length > 0) {
            icc.css('marginRight', icm.width() * 1.05);
            iccib.css('height', icm.height());
          }

          if ($(vl).length > 0) {
            icc.css('marginLeft', icm.width());
            iccib.css('height', icm.height() * 0.89285);
          }

          if ($(vr).length > 0) {
            icc.css('marginRight', icm.width());
            iccib.css('height', icm.height() * 0.89285);
          }
        });

        // left-align CTA in touts
        $('.tout .tout-list').each(function() {
          $(this).find('.cta-link').removeClass('cta-link-centered');
        });

        var colWidth = $( window ).width() * 0.80;
        if (colWidth > 1280) { colWidth = 1280; }
        $( '.item-container-inner .item-columns' ).css( 'width', colWidth );

        // vertically center slide content inside window
        $( '.item-container-inner' ).each( function() {
          var el = $( this ).find( '.item-columns' );
          $( this )
            .css( 'paddingTop', 0 )
            .css( 'paddingTop', (( $( this ).height() - el.height() ) * 0.5) - 10 );
        });

        //vertically center featured device text to image
        $('.featured-device-image').css('marginLeft', $('.featured-device-content').width() * 1.05);
        $('.featured-device-content-inner .block').css('height', $('.featured-device-image').height());

        // if a device is being shown and you move from tablet to desktop size, change the display property
        if ($('.featured-device-tout').css('opacity') == 0) {
          $('.featured-device-tout').css({ display : 'none', opacity : 0 });
        }

        if ($('.oem-tile-back').hasClass('open')) {
          $('.oem-tile-back').css('height', $('.list-box-header').outerHeight());
          if ( ww > 1199 ) {
            $('.oem-tile-back').css('height', $('.list-box-header').outerHeight());
          }
        }


      } else if ( ww < 960 && ww >= 720 ) {
        //tablet

        $( '.experienceZone' ).css( 'height', $( window ).height() ); // + 62

        $('.carousel-item').each(function() {
          var ici = $(this).find('.item-columns-inner'),
            icm = $(this).find('.item-column-media'),
            icc = $(this).find('.item-column-content'),
            iccib = $(this).find('.item-column-content-inner .block'),
            vl = $(this).find('.video-left'),
            vr = $(this).find('.video-right'),
            cr = $(this).find('.content-right'),
            cl = $(this).find('.content-left');
            //center CTA
            $(this).find('.cta-link').addClass('cta-link-centered');

          //remove vertical centering style attributes
          if ($(cr).length > 0) {
            icc.removeAttr('style');
            iccib.removeAttr('style');
          }

          if ($(cl).length > 0) {
            icc.removeAttr('style');
            iccib.removeAttr('style');
          }

          if ($(vl).length > 0) {
            icc.removeAttr('style');
            iccib.removeAttr('style');
          }

          if ($(vr).length > 0) {
            icc.removeAttr('style');
            iccib.removeAttr('style');
          }
        });

        // left-align CTA in touts
        $('.tout .tout-list').each(function() {
          $(this).find('.cta-link').removeClass('cta-link-centered');
        });

        var colWidth = $( window ).width() * 0.80;
        if (colWidth > 1280) { colWidth = 1280; }
        $( '.item-container-inner .item-columns' ).css( 'width', colWidth );

        // vertically center slide content inside window
        $( '.item-container-inner' ).each( function() {
          var el = $( this ).find( '.item-columns' );
          $( this )
            .css( 'paddingTop', 0 )
            .css( 'paddingTop', (( $( this ).height() - el.height() ) * 0.5) - 10 );
        });

        // remove vertical centering style attributes from featured device text and image
        $('.featured-device-image').removeAttr('style');
        $('.featured-device-content-inner .block').removeAttr('style');

        // if a device is being shown and you move from desktop and tablet size, change the display property
        if ($('.featured-device-tout').css('display') == 'none') {
          $('.featured-device-tout').css({ display : 'block', opacity : 0 });
        }

        if ($('.oem-tile-back').hasClass('open')) {
          $('.oem-tile-back').css('height', $('.list-box-header').outerHeight());
        }

      } else if ( ww <= 719) {
        // make sure mobile nav is closed
        $('#main-nav').removeClass('nav-section-show');

        $('.carousel-item').each(function() {
          var ici = $(this).find('.item-columns-inner'),
            icm = $(this).find('.item-column-media'),
            icc = $(this).find('.item-column-content'),
            iccib = $(this).find('.item-column-content-inner .block'),
            vl = $(this).find('.video-left'),
            vr = $(this).find('.video-right'),
            cr = $(this).find('.content-right');
            //center CTA
            $(this).find('.cta-link').addClass('cta-link-centered');

          //remove vertical centering style attributes
          if ($(cr).length > 0) {
            icc.removeAttr('style');
            iccib.removeAttr('style');
          }

          if ($(vl).length > 0) {
            icc.removeAttr('style');
            iccib.removeAttr('style');
          }

          if ($(vr).length > 0) {
            icc.removeAttr('style');
            iccib.removeAttr('style');
          }
        });

        var colWidth = $( window ).width();
        if (colWidth > 1280) { colWidth = 1280; }
        $( '.item-container-inner .item-columns' ).css( 'width', colWidth );

        $('.featured-device-image').removeAttr('style');
        $('.featured-device-content-inner .block').removeAttr('style');

        $( '.experienceZone' ).css( 'height', 0 ).css( 'height', '450px' );
        // size experienceZone to the tallest item-column
        // var ciHeight, largestCarouselItem = 0;
        // $('.carousel-item').each(function() {
        //   ciHeight = $(this).find('.item-columns').height();
        //   if (ciHeight > largestCarouselItem) { largestCarouselItem = ciHeight; }
        // });
        // $( '.experienceZone' ).css( 'height', 0 ).css( 'height', largestCarouselItem + 20 + ($('.carousel-nav').height() * 2));

        $( '.item-container-inner' ).each( function() {
          var el = $( this ).find( '.item-columns' );
          $( this )
            .css( 'paddingTop', '10px' );
            //.css( 'paddingTop', (( $( this ).height() - el.height() ) * 0.5) - 10 );
          if (el.hasClass('video-right') || el.hasClass('video-left')) {
            // remove padding so video is a the top to the container
            $( this ).css( 'paddingTop', 0 );
          }
        });
      }

      // CTA centering for small devices
      if ( $('.expZone-box').innerWidth() >= 480 && $('.expZone-box').innerWidth() <= 719) {
        //center CTA for mobile landscape
        $('.carousel-item').each(function() {
          $(this).find('.cta-link').addClass('cta-link-centered');
        });
        $('.tout .tout-list').each(function() {
          $(this).find('.cta-link').addClass('cta-link-centered');
        });
      } else if ($('.expZone-box').innerWidth() <= 479) {
        //left-align CTA for mobile portrait
        $('.carousel-item').each(function() {
          $(this).find('.cta-link').removeClass('cta-link-centered');
        });
        $('.tout .tout-list').each(function() {
          $(this).find('.cta-link').removeClass('cta-link-centered');
        });
      }

      // vertical center device text in zone 2
      $('.device-container').each(function() {
        var dt = $(this).find('.device-thumb'),
          dtib = $(this).find('.device-title-inner .block'),
          dtitle = $(this).find('.device-title');

        if ($(dtitle).length > 0) {
          dtib.css('height', dt.height());
        }
      });

    });
  };

  var browserAlertReveal = function() {
    if ($('html').is('.lt-ie7')) {
      $('#browserAlert').show();
      $('#main-nav').hide();
      $('.ie6-close-btn a').on('click', function(e) {
        e.preventDefault();
        $('#browserAlert').hide();
        $('#main-nav').show();
      });
    }
  };

  var initNav = function() {
    var mobile = ['windows mobile','windows phone','iemobile'],
      isWP = false;
    for (var i in mobile) {
      if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0) {
        isWP = true;
        break;
      }
    }

    if (!isWP) {
      // https://github.com/individual11/Scroll-To
      var zone1Offset = -116, otherZonesOffset = -61;

      if ( $( window ).width() <= 481 ) {
        // adjust offsets for mobile
        zone1Offset = otherZonesOffset = -42;
      }

      $('.zone-1 a').scrollTo({
          offset: zone1Offset
      });
      $('.zone-2 a, .zone-3 a, .zone-4 a, .zone-5 a, .zone-6 a, .nav-tab a').scrollTo({
          offset: otherZonesOffset
      });

      // $('.zone-2 a, .zone-3 a, .zone-4 a, .zone-5 a, .nav-tab a').on('click', function() {
      //   var id = $(this).attr('href');
      //   $(id).ScrollTo();
      // });


      // $('.zone-2 a, .zone-3 a, .zone-4 a, .zone-5 a, .nav-tab a').ScrollTo({
      //   offsetTop : otherZonesOffset
      // });
    }


    $('#main-nav .nav-inner h2, #main-nav li a').on('click', function(e) {
      if ( !$('#main-nav').hasClass('nav-section-show') ) {
        $('#main-nav').addClass('nav-section-show');
      } else {
        if ( $( window ).width() <= 719 ) {
          $('#main-nav').removeClass('nav-section-show');
        }
      };
      if (!isWP) {
        e.preventDefault();
      }
    });
  };

  var stickyNavReveal = function() {
    var tabClick = false,
      $window = $(window);

    $window.scroll(function(e){
      // tab isn't shown at mobile sizes; also prevents .nav-section-show from being added to show the menu
      if ( $( window ).width() >= 719 ) {
        if (tabClick == false) {
          var diff = $window.scrollTop() - jQuery('.experienceZone').height();

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
      }
    });
  };

  var initFeatureDevice = function() {
    var index,
      ww = ( document.documentElement.clientWidth ? document.documentElement.clientWidth : document.body.clientWidth ),
      smallScreen = false;
      //ua = navigator.userAgent,
      //pattern = /MSIE 10.0; Windows NT 6.2; ARM; Trident\/6.0/; // look for Surface RT

    // reset marker off screen
    $('.marker-bar-rail .marker-bar-container').css({left : '-28px'});
    $('.featured-device-tout').css('display', 'block');
    $('.node-tab').on('click', function(e) {
      // enquire.register('screen and (max-width: 800px)', {
      //   match: function() {
      //     smallScreen = true;
      //   },
      //   unmatch: function() {
      //     smallScreen = false;
      //   }
      // }).listen();
      if (jQuery.browser.mobile || isSurfaceRT) {
        // mobile device (including iPad) or Surface RT
        smallScreen = true;
      }

      if (smallScreen) {
        var padding = 0;
        if ( ww > 719 ) { padding = 61; }
        $('html, body').scrollTop($('.experienceZone').height() - padding);
      }

      closeDeviceModal();
      //removeMarkers();

      index = $('.node-tab').index($(this));
      // hide .featured-device-tout
      $('.featured-device-tout').animate({'opacity' : 0}, 500, function() {
        if ( $('.deviceZone-inner').width() > 959 ) {
          $(this).css('display', 'none');
        } else {
          $(this).css('display', 'block');
        }
      });
      // show modal
      $('.modal-detail.detail-'+index).addClass('active'); //.transition({opacity : 1})
      $(this).find('.marker-bar').removeClass('tab-hover').addClass('active');

      currentTab = this;
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

    $('.close-btn a').on(clickOrTouch, function (e) {

      removeMarkers();
      closeDeviceModal();
      $(this).parent().parent().removeClass('active');
      // show .featured-device-tout
      $('.featured-device-tout').css('display', 'block').animate({'opacity' : 1});
      e.preventDefault();
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

    mb.stop(true, true).animate({
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
    // hide marker
    $('.marker-bar-container').css({'background-position' : '0 8px', 'left' : '-15px'});
  };

  var closeDeviceModal = function() {
    // close all open modals
    $('.modal-container').find('.modal-detail.active').each(function() {
      $(this).removeClass('active');
    });
  };


  var initOEM = function() {
    var closeTiles,
        openTile,
        largeScreenOpen,
        $el, $closeTileButton = $('<span class="icon-cancel"></span>'),
        $tilesContainer = $('.oem-list-box'),
        $tiles = $tilesContainer.find('.oem-list-item'),
        $tileBack = $tilesContainer.find('.oem-tile-back'),
        $listBoxHeader = $tilesContainer.find('.list-box-header'),
        lessThanIE9 = $('html').is('.lt-ie9'),
        isOpen = false;

    closeTiles = function(e) {
      //console.log('closeTitles')
      $tiles.removeClass('open');
      $tileBack.removeClass('open').css('height', '0');
      isOpen = false;
      e.preventDefault();
    };

    openTile = function(el) {
      // Reveal "back" side of tile, update its content and match height to container
      $el = $(el);
      $el.addClass('open');
      // Copy tile content to tile "back" container
      $tileBack.html($el.children('.oem-tile-content').html())
        .css('height', $listBoxHeader.outerHeight())
        .append($closeTileButton)
        .addClass('open');
      // Update color/background
      $tileBack.find('.oem-content-container').css('background-color', $el.data('bgColor'));
      $tileBack.find('.oem-content-container').css('color', $el.data('textColor'));
      $closeTileButton.on('click', closeTiles);
      isOpen = true;
    }

    largeScreenOpen = function() {
      $tiles.unbind('click');

      // check to see if tile is open from mobile (added specifically for Galaxy Tab 2)
      var $openTile = {};
      $('.oem-list-item').each(function() {
        if ($(this).hasClass('open')) {
          $openTile = $(this);
          $(this).removeClass('open');
        }
      });

      // Update tile color on hover
      $tiles = $tilesContainer.find('.oem-list-item'),
      $tiles.on('mouseenter', function(e) {
        $(this).find('.oem-tile-front').css({
          'background': $(this).data('bgColor'),
          'color': $(this).data('textColor')
        })
      }).on('mouseleave', function(e) {
        $(this).find('.oem-tile-front').attr('style', '');
      });

      $tiles.on('click', function(e) {
        openTile(this);
        e.preventDefault();
        e.stopPropagation();
      });

      //
      if ($openTile.length > 0) {
        // open the tile in mobile layout
        $openTile.trigger('click');
        $openTile = {};
      }
    }

    if (lessThanIE9) {
      largeScreenOpen();
      return;
    }


    // Initialize enquire media query behaviors
    enquire.register('screen and (min-width: 720px)', {

      // Desktop/tablet flips over using 3D transform
      match: function() {
        largeScreenOpen();
        // $tiles.unbind('click');
        // // Update tile color on hover
        // $tiles = $tilesContainer.find('.oem-list-item'),
        // $tiles.on('mouseenter', function(e) {
        //   $(this).find('.oem-tile-front').css({
        //     'background': $(this).data('bgColor'),
        //     'color': $(this).data('textColor')
        //   })
        // }).on('mouseleave', function(e) {
        //   $(this).find('.oem-tile-front').attr('style', '');
        // });

        // $tiles.on('click', function(e) {
        //   openTile(this);
        //   e.preventDefault();
        //   e.stopPropagation();
        // });
      }

    }).register('screen and (max-width: 719px)', {

      // Mobile is a simple expand/collapse
      match: function() {
        $tiles.unbind('mouseenter mouseleave click');
        //$tiles = $tilesContainer.find('.oem-list-item');
        $tiles = $tilesContainer.find('.oem-tile-front');

        // check to see if tile is open from desktop (added specifically for Galaxy Tab 2)
        var $openTile = {};
        if ($('.oem-tile-back').hasClass('open')) {
          $('.oem-list-item').each(function() {
            if ($(this).hasClass('open')) {
              $openTile = $(this);
              $tiles.removeClass('open');
              $tileBack.removeClass('open').css('height', '0');
              isOpen = false;
            }
          });
        }

        if ($openTile.length > 0) {
          // open the tile in mobile layout
          $openTile.addClass('open');
          // remove background color
          $openTile.find('.oem-tile-front').removeAttr('style');
        }

        $tiles.on('click', function(e) {
          if (!isOpen) {
            $(this).parent().find('.oem-content-container').css('background-color', $(this).parent().data('bgColor'));
            $(this).parent().find('.oem-content-container').css('color', $(this).parent().data('textColor'));
            $(this).parent().toggleClass('open').siblings().removeClass('open');
            $('html, body').animate({scrollTop : $(this).parent().offset().top - 41});
            isOpen = true;
          }
          e.preventDefault();
        });
        // add close button
        $tiles.parent().find('.oem-tile-content').append($closeTileButton);
        $tiles.parent().find('.icon-cancel').on('click', function(e) {
          $(this).parent().parent().toggleClass('open').siblings().removeClass('open');
          isOpen = false;
        });
      }
    }).listen();
  }

  var initCampaignPlayer = function() {
    // create the Brightcove video player for the Campaign Zone
    var $el = $('.campaignZone .BCLvideoWrapper'),
      objID = $el.data('obj-id'),
      videoID = $el.data('video-id'),
      playerID = $el.data('player-id'),
      playerKey = $el.data('player-key'),
      objectHTML = '<object id="' + objID + '" class="BrightcoveExperience"><param name="bgcolor" value="#000000" /><param name="wmode" value="transparent" /><param name="width" value="100%" /><param name="height" value="100%" /><param name="playerID" value="' + playerID + '" /><param name="playerKey" value="' + playerKey + '" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="htmlFallback" value="true" /><param name="@videoPlayer" value="' + videoID + '" /><param name="includeAPI" value="true" /><param name="templateLoadHandler" value="bcCampaign.onTemplateLoaded" /><param name="templateReadyHandler" value="bcCampaign.onTemplateReady" />';

    // force HTML5 video if mobile device.
    if (jQuery.browser.mobile) {
      objectHTML += '<param name="forceHTML" value="true" />';
    }

    $el.append(objectHTML);

    brightcove.createExperiences();
  }

  var initExperiencePlayers = function() {
    // create the Brightcove video player for the Campaign Zone
    $('.experienceZone .video-container').each(function() {
      var $el = $(this).find('.BCLvideoWrapper'),
        objID = $el.data('obj-id'),
        videoID = $el.data('video-id'),
        playerID = $el.data('player-id'),
        playerKey = $el.data('player-key'),
        objectHTML = '<object id="' + objID + '" class="BrightcoveExperience"><param name="bgcolor" value="#000000" /><param name="wmode" value="transparent" /><param name="width" value="100%" /><param name="height" value="100%" /><param name="playerID" value="' + playerID + '" /><param name="playerKey" value="' + playerKey + '" /><param name="isVid" value="true" /><param name="isUI" value="true" /><param name="dynamicStreaming" value="true" /><param name="htmlFallback" value="true" /><param name="@videoPlayer" value="' + videoID + '" /><param name="includeAPI" value="true" /><param name="templateLoadHandler" value="onBCTemplateLoaded" /><param name="templateReadyHandler" value="onBCTemplateReady" />';
        //
      // force HTML5 video if mobile device.
      if (jQuery.browser.mobile) {
        objectHTML += '<param name="forceHTML" value="true" />';
      }


      $el.append(objectHTML);
    });

    brightcove.createExperiences();
  }

  return {
    initialize : function () {
      initFeatureDevice();
      initOEM();
      initNav();
      stickyNavReveal();
      browserAlertReveal();
      initExperiencePlayers();
      initCampaignPlayer();
      initResize();
    }
  }
})(jQuery);

jQuery(window).load(function() {
  /**
   * jQuery.browser.mobile (http://detectmobilebrowser.com/)
   *
   * jQuery.browser.mobile will be true if the browser is a mobile device. Includes iPad, Playbook and Silk.
   *
   **/
  (function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);

  com.qualcomm.snapdragon.initialize();
  com.qualcomm.brightcoveHandler.initialize();

  jQuery( window ).trigger( 'resize' );

  // BrightCove Video init
  //brightcove.createExperiences();
});

function onBCTemplateLoaded(id) {
  if (typeof com.qualcomm.brightcoveHandler !== 'undefined') {
    var player = brightcove.api.getExperience(id);
    com.qualcomm.brightcoveHandler.setExperienceID(id);
    com.qualcomm.brightcoveHandler.setPlayerReference(player);
    com.qualcomm.brightcoveHandler.setMediaEvents(brightcove.api.events.MediaEvent);
    com.qualcomm.brightcoveHandler.setExperienceModule(player.getModule(brightcove.api.modules.APIModules.EXPERIENCE));
    com.qualcomm.brightcoveHandler.setVideoPlayer(player.getModule(brightcove.api.modules.APIModules.VIDEO_PLAYER));
    //com.qualcomm.brightcoveAnalytics.setAdvertising(player.getModule(brightcove.api.modules.APIModules.ADVERTISING));
    //com.qualcomm.brightcoveAnalytics.setAdEvents(brightcove.api.events.AdEvent);
  }
}

function onBCTemplateReady(obj) {
  if (typeof com.qualcomm.brightcoveHandler !== 'undefined') {
    com.qualcomm.brightcoveHandler.initialize();
    //console.log('brightcove is ready');
  }
}

/**
 * @class com.qualcomm.brightcoveHandler
 * Static object for controlling and resizing Brightcove video.
 *
 * @author Dennis Lahay
 *
 * Pieces of code taken from @class com.qualcomm.brightcoveAnalytics by:
 * @author David Pett
 * @author Andrew Waer
 *
 */

com.qualcomm.brightcoveHandler = (function($){
  'use strict';

  var $players = {},
    _debug = true,
    _expID,
    _player,
    _experience,
    _videoPlayer,
    _mediaEvents,
    currentPlayerWidth = 1,
    $videoWrapper = $('.video-container .video-inner .BCLvideoWrapper'),
    $containingBlock = $('.video-container .video-inner .BCLcontainingBlock');

  var logMessage = function(pMessage, pObject) {
    if (_debug) {
      var message = 'BRIGHTCOVE: ' + pMessage;
      (!pObject) ? console.log(message) : console.log(message, pObject);
    }
  }

  var videoResize = function() {
    $( window ).resize( function() {
      resizePlayer(currentPlayerWidth);
    });
  }

  var resizePlayer = function(newWidth) {
    for (var prop in $players) {
      if($players.hasOwnProperty(prop)){
        if ($players[prop]) {
          $containingBlock.width($('.video-inner').width() * newWidth);
          $players[prop].setSize($containingBlock.width(),$containingBlock.height());
          currentPlayerWidth = newWidth;
        }
      }
    }
  }

  var onMediaPlay = function(pEvent) {
    //console.log(_videoPlayer);
    // if (_mediaComplete) {
    //   onMediaBegin(pEvent);
    // } else {
    //   if (_mediaPaused && !_isSeeking) {
    //     _mediaPaused = false;
    //   }
    // }
  }

  var onMediaStop = function(pEvent) {
    // setTimeout(function() {
    //   if (!_mediaComplete && !_mediaPaused && !_isSeeking) {
    //     _mediaPaused = true;
    //   }
    // }, 250);
  }

  return {
    initialize : function() {
      videoResize();
    },
    capturePlayer : function() {

    },
    setExperienceID : function(id) {
      _expID = id;
    },
    setPlayerReference : function(player) {
      _player = player;
    },
    setExperienceModule: function(experience) {
      _experience = experience;
      $players[_expID] = _experience;
    },
    setVideoPlayer: function(player) {
      _videoPlayer = player;
      //console.log(_videoPlayer)
      _videoPlayer.addEventListener(_mediaEvents.PLAY, onMediaPlay);
      _videoPlayer.addEventListener(_mediaEvents.STOP, onMediaStop);
    },
    setMediaEvents: function(events) {
      _mediaEvents = events;
    }
  }
})(jQuery);

/*! A fix for the iOS orientationchange zoom bug. Script by @scottjehl, rebound by @wilto.MIT / GPLv2 License.*/(function(a){function m(){d.setAttribute("content",g),h=!0}function n(){d.setAttribute("content",f),h=!1}function o(b){l=b.accelerationIncludingGravity,i=Math.abs(l.x),j=Math.abs(l.y),k=Math.abs(l.z),(!a.orientation||a.orientation===180)&&(i>7||(k>6&&j<8||k<8&&j>6)&&i>5)?h&&n():h||m()}var b=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(b)&&b.indexOf("AppleWebKit")>-1))return;var c=a.document;if(!c.querySelector)return;var d=c.querySelector("meta[name=viewport]"),e=d&&d.getAttribute("content"),f=e+",maximum-scale=1",g=e+",maximum-scale=10",h=!0,i,j,k,l;if(!d)return;a.addEventListener("orientationchange",m,!1),a.addEventListener("devicemotion",o,!1)})(this);


/**
 * Video code taken from Qualcomm.
 * Save just in case.
 */

/*
$('a.video-player-link').each(function (index) {
  // Attach click handler to all video links.
  var $el = $(this);
  if ($el.data('action') == 'modal') {
    qc_video_attach_modal($el);
  }
  else {
    qc_video_attach_inline($el);
  }
  // Add icons for bad browsers
  if ($('html').is('.lt-ie9')) {
    $el.append('<span class="icon"></span>');
  }
  $el.addClass('video-player-processed');
});

$(window).bind("resize", function (e) {
  $('.video_inline_player_wrapper #player, .video_inline_player_wrapper video, .video_inline_player_wrapper object').each(function () {
    var $item = $(this);
    var $target = $item.parents('a.video-player-processed');
    var $placeholder = $('#' + $target.data("target"));
    var curWidth = $item.width();
    var curHeight = $item.height();
    var newWidth = $placeholder.width()
    var newHeight = $placeholder.height();

    if (window.innerWidth >= 960) {

    }
    else if (window.innerWidth >= 720) {

    }
    else if (window.innerWidth >= 480) {

    }
    else if (window.innerWidth < 480) {

    }

    $item.width(newWidth);
    $item.height(newHeight);
  });
});

var VideoPlayerManager = {};
VideoPlayerManager.getID = function () {
  if (typeof (this.id) == 'undefined') {
    this.id = 1;
  }
  else {
    this.id++;
  }
  return this.id;
}

function qc_video_attach_inline($el) {
  $el.live("click", function (e) {
    e.preventDefault();

    var $target = $(this);
    if ($target.hasClass("playing")) {
      return false;
    }

    if (!$target.data('active')) {
      var $placeholder = $('#' + $target.data("target"));
      var player_callback = 'qc_video_get_' + $target.data("type") + '_player';
      var html = '';

      if (typeof(window[player_callback]) == 'function') {
        var player = '';
        if ($target.data("type") == 'brightcove') {
          var wrap = 'video_modal_player_wrapper';
          if ($target.data('action') == 'inline') {
            wrap = 'video_inline_player_wrapper';
          }
          player = window[player_callback]($target.data('id'), $target.data('bc-video-id'), $target.data('bc-player-id'), $target.data('bc-player-key'), $placeholder.width(), $placeholder.height(), wrap, $target);
        }
        else {
          player = window[player_callback]($target.data('id'), $placeholder.width(), $placeholder.height(), 'video_inline_player_wrapper');
        }
        html = player.html;
        $placeholder.css("visibility","hidden").parent().addClass('placeholder-hidden');
        $target.parent().css("position","relative").append(html);
        if (typeof (player.callback) == 'function') {
          player.callback();
        }
        if ($target.data("type") == 'brightcove') {
          brightcove.createExperiences();
        }
        $target.addClass("playing");
      }
    }
  });
}

function qc_video_get_brightcove_player(id, bc_video_id, bc_player_id, bc_player_key, width, height, wrapper_class, $_target) {
  //var data = Drupal.settings.videos["id-" + id];
  var html = "";
  var customParams = "";

  var $_custom = $_target.data('custom-params');
  for (var customKey in $_custom) {
    customParams += '<param name="' + customKey + '" value="' + $_custom[customKey] + '" />';
  }

  var markup = '<div class="' + wrapper_class + '"><object id="' + id + '" class="BrightcoveExperience"> <param name="bgcolor" value="#000000" /> <param name="width" value="' + width + '" /> <param name="height" value="' + height + '" /> <param name="playerID" value="' + bc_player_id + '" /> <param name="playerKey" value="' + bc_player_key + '" /> <param name="isVid" value="true" /> <param name="isUI" value="true" /> <param name="dynamicStreaming" value="true" /> <param name="@videoPlayer" value="' + bc_video_id + '" /> ' + customParams + '</object></div>';

  return {html: markup};

}

function onBCTemplateLoaded(id) {
    //var player = brightcove.getExperience(id);
    // com.qualcomm.brightcoveAnalytics.setExperienceID(id);
    // com.qualcomm.brightcoveAnalytics.setPlayerReference(player);
    // com.qualcomm.brightcoveAnalytics.setCategoryName('Brightcove (' + id + ')');
    // com.qualcomm.brightcoveAnalytics.setExperienceModule(player.getModule(brightcove.api.modules.APIModules.EXPERIENCE));
    // com.qualcomm.brightcoveAnalytics.setVideoPlayer(player.getModule(brightcove.api.modules.APIModules.VIDEO_PLAYER));
    // com.qualcomm.brightcoveAnalytics.setAdvertising(player.getModule(brightcove.api.modules.APIModules.ADVERTISING));
    // com.qualcomm.brightcoveAnalytics.setMediaEvents(brightcove.api.events.MediaEvent);
    // com.qualcomm.brightcoveAnalytics.setAdEvents(brightcove.api.events.AdEvent);
    //player.getModule(brightcove.api.modules.APIModules.EXPERIENCE);
    //player.getModule(brightcove.api.modules.APIModules.VIDEO_PLAYER);
}

function onBCTemplateReady(obj) {

    //console.log('brightcove is ready');

}

*/