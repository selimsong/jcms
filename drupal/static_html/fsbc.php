<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>FSBC - Snapdragon.cn v1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="/sites/all/themes/digi/css/style.css">
    <link rel="stylesheet" href="/sites/all/themes/digi/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/sites/all/themes/digi/css/pfold.css" />
    <link media="screen" href="/sites/all/themes/digi/css/responsive-carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/sites/all/themes/digi/css/main.css">

    <script src="/sites/all/themes/digi/js/vendor/modernizr-2.6.2.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
    <script type="text/javascript" src="http://admin.brightcove.com/js/api/SmartPlayerAPI.js">


    <script>
        // check for box-sizing capability
        Modernizr.addTest("boxsizing", function() {
            return Modernizr.testAllProps("boxSizing") && (document.documentMode === undefined || document.documentMode > 7);
        });
    </script>
    <script src="/sites/all/themes/digi/js/vendor/jquery-1.8.2.min.js"></script>
</head>
<body>
<style>

/*.video-player-link {
  display: inline-block;
  max-width: 100%;
  position: relative;
}

.video-player-link:after, .lt-ie9 .video-player-link .icon {
  background: url(/sites/all/themes/qualcomm/images/video_overlay_icon_32x33.png) no-repeat scroll 0 0 transparent;
  bottom: 12px;
  content: " ";
  display: block;
  height: 33px;
  opacity: 0.9;
  position: absolute;
  right: 12px;
  width: 32px;
  z-index: 2;
}

.video-player-link:after {
  background-image: url(/sites/all/themes/digi/images/video_overlay_icon_100x100.png);
  height: 100px;
  width: 100px;
  bottom: 50%;
  right: 50%;
  margin-bottom: -50px;
  margin-right: -50px;
}

.video-player-link.playing, .video-player-link.playing:after {
  display: none;
}
.video_inline_player_wrapper {
  left: 0;
  position: absolute;
  top: 0;
  z-index: 25;
}
.video-player-link.playing + .video_inline_player_wrapper {
  position: static;
}*/
#snap-hero {
  position: relative;
  height: 680px;
}
.media {
  overflow: hidden;
  position: absolute;
  width: 100%;
  bottom: 0;
  top: 0;
  left: 0;
}

.media-inner {
  position: absolute;
  width: 100%;
  bottom: 0;
  top: 0;
  left: 0;
}
.BrightcoveExperience, .html5-video {
  min-width: 100%;
  min-height: 100%;
}

</style>

<header id="snap-hero">
  <div class="media">
    <div class="media-inner">
      <object id="myExperience00" class="BrightcoveExperience">
        <param name="width" value="100%" />
        <param name="height" value="100%" />
        <param name="bgcolor" value="#000000" />
        <param name="playerID" value="2291732881001" />
        <param name="playerKey" value="AQ~~,AAABSUycFdE~,CCE4gg49qaugDnCT8CyAp6Xy_ITuyL_O" />
        <param name="isVid" value="true" />
        <param name="isUI" value="false" />
        <param name="dynamicStreaming" value="true" />
        <param name="autoStart" value="false" />
        <param name="forceHTML" value="true" />
        <param name="@videoPlayer" value="2275251095001" />
      </object>
      <!-- <video loop="1" autoplay="1" id="fbhome-cinemagraph" class="html5-video" style="display: block;">
        <source src="facebook.mp4"></source>
        <source src="facebook.ogv"></source>
        <img alt="" src="https://fbcdn-dragon-a.akamaihd.net/cfs-ak-ash3/676513/617/135351913305575_1421925707.jpg" class="_53ol _53ol img">
      </video> -->
    <div>
  </div>
</header>
<script>

/*jQuery('a.video-player-link:not(.video-player-processed)').each(function (index) {
  // Attach click handler to all video links.
  var $el = jQuery(this);
  if ($el.data('action') == 'modal') {
    qc_video_attach_modal($el);
  }
  else {
    qc_video_attach_inline($el);
  }
  // Add icons for bad browsers
  if (jQuery('html').is('.lt-ie9')) {
    $el.append('<span class="icon"></span>');
  }
  $el.addClass('video-player-processed');
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

    var $target = jQuery(this);
    if ($target.hasClass("playing")) {
      return false;
    }

    if (!$target.data('active')) {
      var $placeholder = jQuery('#' + $target.data("target"));
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

  var markup = '<div class="' + wrapper_class + '"><object id="' + id + '" class="BrightcoveExperience"> <param name="bgcolor" value="#FFFFFF" /> <param name="width" value="' + width + '" /> <param name="height" value="' + height + '" /> <param name="playerID" value="' + bc_player_id + '" /> <param name="playerKey" value="' + bc_player_key + '" /> <param name="isVid" value="true" /> <param name="isUI" value="true" /> <param name="dynamicStreaming" value="true" /> <param name="@videoPlayer" value="' + bc_video_id + '" /> ' + customParams + '</object></div>';

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

}*/

</script>




<!--<script src="/sites/all/themes/digi/js/vendor/jquery.smooth-scroll.min.js"></script>-->
<script src="/sites/all/themes/digi/js/vendor/scrollTo.min.js"></script>
<script src="/sites/all/themes/digi/js/vendor/respond.min.js"></script>
<script src="/sites/all/themes/digi/js/vendor/matchMedia.js"></script>
<script src="/sites/all/themes/digi/js/vendor/enquire.min.js"></script>
<script type="text/javascript" src="/sites/all/themes/digi/js/vendor/jquery.pfold.js"></script>
<!--<script src="js/vendor/waypoints.min.js"></script>
<script src="js/vendor/bootstrap.js"></script>-->
<script src="/sites/all/themes/digi/js/vendor/responsive-carousel.js"></script>
<!--<script src="/sites/all/themes/digi/js/vendor/responsive-carousel.touch.js"></script>
<script src="/sites/all/themes/digi/js/vendor/responsive-carousel.drag.js"></script>
<script src="/sites/all/themes/digi/js/vendor/responsive-carousel.autoinit.js"></script>-->
<script src="js/vendor/jquery.fitvids.js"></script>
<script src="/sites/all/themes/digi/js/app.js"></script>


<script>
$(function(){
$( window ).on( 'resize', function() {
  $( '#snap-hero' ).css( 'height', $( window ).height() - 50 );
});

$( window ).trigger( 'resize' );


brightcove.createExperiences();

});

$(".container").fitVids({ customSelector: "iframe[src^='http://c.brightcove.com'], iframe[src^='http://admin.brightcove.com']"});
</script>

<script>/*! A fix for the iOS orientationchange zoom bug. Script by @scottjehl, rebound by @wilto.MIT / GPLv2 License.*/(function(a){function m(){d.setAttribute("content",g),h=!0}function n(){d.setAttribute("content",f),h=!1}function o(b){l=b.accelerationIncludingGravity,i=Math.abs(l.x),j=Math.abs(l.y),k=Math.abs(l.z),(!a.orientation||a.orientation===180)&&(i>7||(k>6&&j<8||k<8&&j>6)&&i>5)?h&&n():h||m()}var b=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(b)&&b.indexOf("AppleWebKit")>-1))return;var c=a.document;if(!c.querySelector)return;var d=c.querySelector("meta[name=viewport]"),e=d&&d.getAttribute("content"),f=e+",maximum-scale=1",g=e+",maximum-scale=10",h=!0,i,j,k,l;if(!d)return;a.addEventListener("orientationchange",m,!1),a.addEventListener("devicemotion",o,!1)})(this); </script>

</body>
</html>
