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
    <link media="screen" href="/sites/all/themes/digi/css/responsive-carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/sites/all/themes/digi/css/main.css">

    <script src="/sites/all/themes/digi/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="/sites/all/themes/digi/js/vendor/jquery-1.8.2.min.js"></script>
<!-- 
    <script src="/sites/all/themes/digi/js/vendor/scrollTo.min.js"></script>
<script src="/sites/all/themes/digi/js/vendor/respond.min.js"></script>
<script src="/sites/all/themes/digi/js/vendor/matchMedia.js"></script>
<script src="/sites/all/themes/digi/js/vendor/enquire.min.js"></script>
<script type="text/javascript" src="/sites/all/themes/digi/js/vendor/jquery.pfold.js"></script>
<script src="/sites/all/themes/digi/js/vendor/responsive-carousel.js"></script>
 -->


<!-- <script src="/sites/all/themes/digi/js/app.js"></script> -->
</head>
<body>
<style>

.BCLcontainingBlock {
  width: 100%;
  /*margin-left: 10px;
  margin-bottom: 10px;
  float: right;*/
}

.BCLvideoWrapper {
  position: relative;
  padding-top: 1px;
  padding-bottom: 56.25%;
  height: 0;
}

* html .BCLvideoWrapper {
  margin-bottom: 45px;
  margin-top: 0;
  width: 100%;
  height: 100%;
}

.BCLvideoWrapper div,
.BCLvideoWrapper embed,
.BCLvideoWrapper object,
.BrightcoveExperience {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
}
pre {
  font-size: 14px;
}
.BCLbutton {
  background-color: #ffffff;
  background-image: -webkit-gradient(radial, 50% 50%,0,50% 50%,200, from(#dddddd), to(#ffffff));
  background-image: -webkit-radial-gradient(50% 50%, #ffffff, #dddddd);
  background-image: -moz-radial-gradient(50% 50%, #ffffff, #dddddd);
  background-image: -o-radial-gradient(50% 50%, #ffffff, #dddddd);
  background-image: -ms-radial-gradient(50% 50%, #ffffff, #dddddd);
  background-image: radial-gradient(50% 50%, #ffffff, #dddddd);
  border: #999999 1px solid;
  border-radius: 10px;
  font-size: .7em;
  padding: 5px;
  cursor: pointer;
}

</style>

<header class="BCLcontainingBlock">
   <div class="BCLvideoWrapper">
     <!-- Start of Brightcove Player -->
     <div style="display:none"></div>
     <script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>

     <object id="myExperience1195045806001" class="BrightcoveExperience">
       <param name="bgcolor" value="#FFFFFF" />
       <param name="width" value="100%" />
       <param name="height" value="100%" />
       <param name="playerID" value="1655292658001" />
       <param name="playerKey" value="AQ~~,AAAADXdqFgE~,aEKmio9UXai4AfuyXjS4fpJNnDLOcLqh" />
       <param name="isVid" value="true" />
       <param name="isUI" value="true" />
       <param name="dynamicStreaming" value="true" />
       <param name="htmlFallback" value="true" />
       <param name="@videoPlayer" value="1807962446001" />
       <!-- <param name="forceHTML" value="true" /> -->
       <param name="autoStart" value="true" />
         <!-- params for Universal Player API -->
       <param name="includeAPI" value="true" />
       <param name="templateLoadHandler" value="onTemplateLoaded" />
       <param name="templateReadyHandler" value="onTemplateReady" />

     </object>
     <script type="text/javascript">brightcove.createExperiences();</script>
     <!-- End of Brightcove Player -->
   </div>
</header>

<script>

var BCL = {};
BCL.currentPlayerWidth = 1;
var $BCLbodyContent = $('#BCLbodyContent');
var $BCLvideoWrapper = $('.BCLvideoWrapper');
var $BCLcontainingBlock = $('.BCLcontainingBlock');
var $html5 = $('#HTML5');
var $flash = $('#FLASH');
var $resizeButtons = $('.BCLbutton');
var onTemplateLoaded = function (experienceID) {
  BCL.log("template loaded")
  BCL.player = brightcove.api.getExperience(experienceID);
  BCMediaEvent = brightcove.api.events.MediaEvent;
}
var onTemplateReady = function(evtObj) {
  BCL.log("template ready")

  BCL.experienceModule = BCL.player.getModule(brightcove.api.modules.APIModules.EXPERIENCE);
  BCL.videoplayer = BCL.player.getModule(brightcove.api.modules.APIModules.VIDEO_PLAYER);
  BCL.videoplayer.play();

  BCL.videoplayer.addEventListener(BCMediaEvent.PROGRESS, BCL.onMediaProgress);
  BCL.videoplayer.addEventListener(BCMediaEvent.COMPLETE, BCL.onMediaComplete);
}

BCL.onMediaProgress = function(event) {
  //BCL.log([event.position, event.duration - .1])
  if (event.position > event.duration - .5) {
    BCL.videoplayer.seek(0);
  }
}
// just in case you don't get the progress event you need
BCL.onMediaComplete = function(event) {
  BCL.videoplayer.play();
}
// dynamic resizer
$(window).on('resize',function() {
  //BCL.log("window resize");
  BCL.resizePlayer(BCL.currentPlayerWidth);
});
// resizing handlers
$resizeButtons.on('click',function() {
  BCL.resizePlayer(parseInt($(this).attr("id")) / 100);
});
// resizing function
BCL.resizePlayer = function(newWidth) {
  //BCL.log(newWidth);
  if (BCL.experienceModule) {
    $BCLcontainingBlock.width($(window).width() * newWidth);
    BCL.experienceModule.setSize($BCLcontainingBlock.width(),$BCLcontainingBlock.height());
    BCL.currentPlayerWidth = newWidth;
  }
}
// debugging tool - wraps console.log to avoid errors in IE 7 & 8
BCL.log = function(message) {
  if (window["console"] && console["log"]) {
    var d = new Date();
    //console.log(d + ": ");
    console.log(message);
  }
}
</script>



<script>/*! A fix for the iOS orientationchange zoom bug. Script by @scottjehl, rebound by @wilto.MIT / GPLv2 License.*/(function(a){function m(){d.setAttribute("content",g),h=!0}function n(){d.setAttribute("content",f),h=!1}function o(b){l=b.accelerationIncludingGravity,i=Math.abs(l.x),j=Math.abs(l.y),k=Math.abs(l.z),(!a.orientation||a.orientation===180)&&(i>7||(k>6&&j<8||k<8&&j>6)&&i>5)?h&&n():h||m()}var b=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(b)&&b.indexOf("AppleWebKit")>-1))return;var c=a.document;if(!c.querySelector)return;var d=c.querySelector("meta[name=viewport]"),e=d&&d.getAttribute("content"),f=e+",maximum-scale=1",g=e+",maximum-scale=10",h=!0,i,j,k,l;if(!d)return;a.addEventListener("orientationchange",m,!1),a.addEventListener("devicemotion",o,!1)})(this); </script>

</body>
</html>
