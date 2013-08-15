<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Static - Snapdragon.cn v1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="/sites/all/themes/digi/css/normalize.css">
    <!-- link rel="stylesheet" type="text/css" href="/sites/all/themes/digi/css/pfold.css" /> -->
    <link media="screen" href="/sites/all/themes/digi/css/responsive-carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/sites/all/themes/digi/css/main.css">

    <script src="/sites/all/themes/digi/js/vendor/modernizr-2.6.2.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
    <script type="text/javascript" src="http://admin.brightcove.com/js/api/SmartPlayerAPI.js"></script>

    <script>
        // check for box-sizing capability
        Modernizr.addTest("boxsizing", function() {
            return Modernizr.testAllProps("boxSizing") && (document.documentMode === undefined || document.documentMode > 7);
        });
    </script>

</head>
<body>
    <div id="page">
        <div id="content">
            <div id="browserAlert" class="browserAlert">
                <div class="browser-alert-inner">
                    <div class="alert-content">
                        <h2>Get the full Snapdragon.cn experience.</h2>
                        <p>This site has been optimized for newer browsers. Parts of this site may not display properly on outdated browser versions. To update, simply choose a browser from the links below.</p>
                    </div>
                    <div class="alert-browsers clearfix">
                        <ul>
                            <li><a class="ie-link" href="http://windows.microsoft.com/zh-cn/internet-explorer/download-ie" target="_blank">Internet Explorer</a></li>
                            <li><a class="chrome-link" href="https://www.google.com/intl/zh-CN/chrome/browser/" target="_blank">Chrome</a></li>
                            <li><a class="ff-link" href="http://firefox.com.cn/" target="_blank">Firefox</a></li>
                        </ul>
                    </div>
                    <div class="ie6-close-btn">
                        <a href="#close"></a>
                    </div>
                </div>
            </div>
        </div> <!-- /content -->
    </div> <!-- /page -->

<script src="/sites/all/themes/digi/js/vendor/jquery-1.8.2.min.js"></script>
<script>
    $( '.experienceZone' ).css( 'height', $( window ).height() );
</script>


<script src="/sites/all/themes/digi/js/vendor/scrollTo.min.js"></script>
<script src="/sites/all/themes/digi/js/vendor/respond.min.js"></script>
<!-- <script src="/sites/all/themes/digi/js/vendor/matchMedia.js"></script>-->
<script src="/sites/all/themes/digi/js/vendor/enquire.min.js"></script>
<!-- <script type="text/javascript" src="/sites/all/themes/digi/js/vendor/jquery.pfold.js"></script> -->
<script src="/sites/all/themes/digi/js/vendor/responsive-carousel.js"></script>


<!--<script src="/sites/all/themes/digi/js/app.js"></script>-->
<script>
$(function(){
    // if( !($('html').hasClass('boxsizing')) ){
    //     $('.boxSized, .boxSized *').each(function(){
    //         var fullW = $(this).outerWidth(),
    //             actualW = $(this).width(),
    //             wDiff = fullW - actualW,
    //             newW = actualW - wDiff;

    //         $(this).css('width',newW);
    //     });
    // }
    /*$('.zone-1 a').scrollTo({
        offset: -116
    });
    $('.zone-2 a, .zone-3 a, .zone-4 a, .zone-5 a, .nav-tab a').scrollTo({
        offset: -61
    });*/

});

</script>
<script>/*! A fix for the iOS orientationchange zoom bug. Script by @scottjehl, rebound by @wilto.MIT / GPLv2 License.*/(function(a){function m(){d.setAttribute("content",g),h=!0}function n(){d.setAttribute("content",f),h=!1}function o(b){l=b.accelerationIncludingGravity,i=Math.abs(l.x),j=Math.abs(l.y),k=Math.abs(l.z),(!a.orientation||a.orientation===180)&&(i>7||(k>6&&j<8||k<8&&j>6)&&i>5)?h&&n():h||m()}var b=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(b)&&b.indexOf("AppleWebKit")>-1))return;var c=a.document;if(!c.querySelector)return;var d=c.querySelector("meta[name=viewport]"),e=d&&d.getAttribute("content"),f=e+",maximum-scale=1",g=e+",maximum-scale=10",h=!0,i,j,k,l;if(!d)return;a.addEventListener("orientationchange",m,!1),a.addEventListener("devicemotion",o,!1)})(this); </script>

</body>
</html>
