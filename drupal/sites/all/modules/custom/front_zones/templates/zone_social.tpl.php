<?php
/**
* Available vars ($social_data);
**/
 // dpm($social_data);
?>
<section id="connect" class="socialZone">
      <div class="socialZone-box clearfix">
          <div class="social-inner clearfix">
              <div class="social-content-container">
                  <div class="social-content">
                      <h2><?php print $social_data['zone_social']['zone_social_title']; ?></h2>
                      <p><?php print  $social_data['zone_social']['zone_social_info']; ?></p>
                  </div>
              </div>
              <div class="social-balloons-container">
                  <div class="balloons-bg"><img src="/sites/all/themes/digi/images/socialballoons-desktop.png" /></div>


                  <div class="balloon youku-balloon">
                      <div class="youku-logo">
                          <img src="/sites/all/themes/digi/images/youku-logo.png" alt="<?php print  $social_data['zone_social_1']['zone_social_link_text']; ?>"/>
                      </div>
                      <div class="cta-link-container">
                          <div class="cta-link cta-link-centered">
                              <div class="cta-link-content">
                                  <a href="<?php print $social_data['zone_social_1']['zone_social_link']; ?>" target="_blank"><?php print $social_data['zone_social_1']['zone_social_link_text'];?></a>
                              </div>
                          </div>
                      </div>
                  </div>



                  <div class="balloon weibo-balloon">
                      <div class="weibo-logo">
                          <img src="/sites/all/themes/digi/images/weibo-logo.png" alt="<?php print $social_data['zone_social_2']['zone_social_link_text']; ?>" />
                      </div>
                      <div class="cta-link-container">
                          <div class="cta-link cta-link-centered">
                              <div class="cta-link-content">
                                  <a href="<?php print $social_data['zone_social_2']['zone_social_link']; ?>" target="_blank"><?php print $social_data['zone_social_2']['zone_social_link_text']; ?></a>
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="balloon qq-balloon">
                      <div class="qq-logo">
                          <img src="/sites/all/themes/digi/images/qq-logo.png" alt="<?php $social_data['zone_social_3']['zone_social_link_text']; ?>"/>
                      </div>
                      <div class="cta-link-container">
                          <div class="cta-link cta-link-centered">
                              <div class="cta-link-content">
                                  <a href="<?php print $social_data['zone_social_3']['zone_social_link']; ?>" target="_blank"><?php print $social_data['zone_social_3']['zone_social_link_text']; ?></a>
                              </div>
                          </div>
                      </div>
                  </div>



              </div>
          </div>
      </div>
  </section>