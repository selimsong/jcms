<?php
/**
* @todo : add brightcove video string
**/

$video_str = variable_get('zone_video_vid','');
$playerid_str = variable_get('video_playerid','');
$playerkey_str = variable_get('video_playerkey','');

/* Testing using Qualcomm video. Delete or comment out when done. */
//$video_str = '2275251095001';
//$playerid_str = '2291732881001';
//$playerkey_str = 'AQ~~,AAABSUycFdE~,CCE4gg49qaugDnCT8CyAp6Xy_ITuyL_O';

?>
<section id="dragon" class="campaignZone clearfix">
    <div class="campaign-container-bg">
        <img src="/sites/all/themes/digi/images/video-bkgd-lrg.jpg" />
    </div>
    <div class="campaignZone-box clearfix">
        <div class="campaign-inner">
            <div class="campaign-media">
                <div class="burst-container">
                    <img src="/sites/all/themes/digi/images/campaign-video-shadow-burst.png" />
                </div>
                <div class="media-container">
                    <div class="media-container-inner">
                        <div class="media">


                            <div class="BCLcontainingBlock">
                              <div class="BCLvideoWrapper" data-obj-id="bcExperience<?php print $video_str; ?>_<?php print rand(); ?>" data-video-id="<?php print $video_str; ?>" data-player-id="<?php print $playerid_str; ?>" data-player-key="<?php print $playerkey_str; ?>">
                                <!-- Start of Brightcove Player foo -->
                                <div style="display:none"></div>
                              </div><!-- end BCLcontainingBlock -->
                            </div><!-- end BCLvideoWrapper -->

<script>
var bcCampaign = {};
bcCampaign.currentPlayerWidth = 1;
var $bcCampaignvideoWrapper = jQuery('.campaignZone .media .BCLvideoWrapper');
var $bcCampaigncontainingBlock = jQuery('.campaignZone .media .BCLcontainingBlock');
bcCampaign.onTemplateLoaded = function (experienceID) {
  //console.log('bcCampaign.onTemplateLoaded')
  bcCampaign.player = brightcove.api.getExperience(experienceID);
}
bcCampaign.onTemplateReady = function(evtObj) {
  //console.log('bcCampaign.onTemplateReady')
  bcCampaign.experienceModule = bcCampaign.player.getModule(brightcove.api.modules.APIModules.EXPERIENCE);
  bcCampaign.videoplayer = bcCampaign.player.getModule(brightcove.api.modules.APIModules.VIDEO_PLAYER);
}
// dynamic resizer
jQuery(window).on('resize',function() {
  bcCampaign.resizePlayer(bcCampaign.currentPlayerWidth);
});
// resizing function
bcCampaign.resizePlayer = function(newWidth) {
  if (bcCampaign.experienceModule) {
    $bcCampaigncontainingBlock.width($('.campaignZone .media').width() * newWidth);
    bcCampaign.experienceModule.setSize($bcCampaigncontainingBlock.width(),$bcCampaigncontainingBlock.height());
    bcCampaign.currentPlayerWidth = newWidth;
  }
}
</script>

                        </div>
                        <div class="media-shadow">
                            <div class="media-shadow-inner">
                                <img src="/sites/all/themes/digi/images/campaign-video-shadow.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="campaign-heading">
            <div class="heading">
                <h2><?php print variable_get('zone_video_title'); ?></h2>
            </div>
            <?php if (variable_get('zone_video_subhead') != ''): ?>
                <div class="sub-heading">
                    <h3><?php print variable_get('zone_video_subhead'); ?></h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>