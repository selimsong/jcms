<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="<?php print $language->language; ?>" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="<?php print $language->language; ?>" class="no-js lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>         <html lang="<?php print $language->language; ?>" class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php print $language->language; ?>" class="no-js"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script src="/sites/all/themes/digi/js/vendor/modernizr-2.6.2.min.js"></script>
  <script>
      Modernizr.addTest("boxsizing", function() {
          return Modernizr.testAllProps("boxSizing") && (document.documentMode === undefined || document.documentMode > 7);
      });

  </script>
  <script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
  <script type="text/javascript" src="http://admin.brightcove.com/js/api/SmartPlayerAPI.js"></script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="browserAlert" class="browserAlert" style="display: none;">
      <div class="browser-alert-inner">
          <div class="alert-content">
              <h2>获取完整的骁龙体验。</h2>
              <p>警告。此网站可能在过时的网页浏览器上无法正常显示。请从以下链接选择浏览器进行更新。</p>
          </div>
          <div class="alert-browsers">
              <ul>
                  <li><a class="ie-link" href="http://windows.microsoft.com/zh-cn/internet-explorer/download-ie" target="_blank">Internet Explorer</a></li>
                  <!--<li><a class="chrome-link" href="https://www.google.com/intl/zh-CN/chrome/browser/" target="_blank">Chrome</a></li>
                  <li><a class="ff-link" href="http://firefox.com.cn/" target="_blank">Firefox</a></li>-->
              </ul>
          </div>
          <div class="ie6-close-btn">
              <a href="#"></a>
          </div>
      </div>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

<script src="/sites/all/themes/digi/js/vendor/jquery-1.8.2.min.js"></script>
<script>
    jQuery( '.experienceZone' ).css( 'height', jQuery( window ).height() );
</script>

<script src="/sites/all/themes/digi/js/vendor/scrollTo.js"></script>
<!-- <script src="/sites/all/themes/digi/js/vendor/jquery-scrollto.js"></script> -->
<script src="/sites/all/themes/digi/js/vendor/respond.min.js"></script>
<script src="/sites/all/themes/digi/js/vendor/enquire.min.js"></script>
<script src="/sites/all/themes/digi/js/vendor/responsive-carousel.js"></script>
<script src="/sites/all/themes/digi/js/app.js"></script>

 <script type="text/javascript">
  var ieversion = 7;
  if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
    ieversion = new Number(RegExp.$1);
  }
  if (ieversion >= 7) {
    <!--//--><![CDATA[//><!--
    var utag_data = {
     //hash goes here
    }
    var env = Drupal.settings.serverEnvironment;
    if (env == 'stg') {
     env = 'qa';
    }
    var body= document.getElementsByTagName('body')[0];
    var script= document.createElement('script');
    script.type= 'text/javascript';
    script.src= '//tealium.hs.llnwd.net/o43/utag/qualcomm/main/' + env + '/utag.js';
    body.appendChild(script);

    //--><!]]>
  }
 </script>

</body>
</html>
