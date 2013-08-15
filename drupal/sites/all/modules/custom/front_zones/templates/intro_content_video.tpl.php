<?php
//dpm($variables);
//dpm($variables['content_pos']);
$vid_pos = 'left';
if($variables['content_pos'] == 'left') {
  $vid_pos = 'right';
}

$video_str = $variables['video_id'];


$playerid_str = variable_get('video_playerid','');
$playerkey_str = variable_get('video_playerkey','');

/* Testing using Qualcomm video. Delete or comment out when done. */
//$video_str = '2542462688001';
//$playerid_str = '2291732881001';
//$playerkey_str = 'AQ~~,AAABSUycFdE~,CCE4gg49qaugDnCT8CyAp6Xy_ITuyL_O';

?>

<div class="item-container-inner">
  <div class="item-columns video-<?php print $vid_pos; ?>">
    <div class="item-columns-inner">
      <div class="item-column-media">

        <div class="video-col video-container">
          <div class="vc-full">
            <div class="video-inner">
              <div class="BCLcontainingBlock">
                <div class="BCLvideoWrapper" data-obj-id="bcExperience<?php print $video_str; ?>_<?php print rand(); ?>" data-video-id="<?php print $video_str; ?>" data-player-id="<?php print $playerid_str; ?>" data-player-key="<?php print $playerkey_str; ?>">
                  <div style="display:none"></div>

                </div>
              </div>

            </div>
            <div class="vc-shadow">
              <img src="/sites/all/themes/digi/images/carousel-video-shadow.png" />
            </div>
          </div>
        </div>
      </div>
      <div class="item-column-content">
        <div class="item-column-content-inner" style="color: <?php print $text_color;?>">
          <div class="block">
            <div class="centered">

              <div class="slide-main-header">
                <h2><?php print $variables['slide_title']; ?></h2>
              </div>
              <div class="slide-main-copy">
                <p><?php print $variables['content']; ?></p>
              </div>

              <?php foreach($links as $link): ?>
              <div class="cta-link-container">
                <div class="cta-link">
                  <div class="cta-link-content">
                  <?php print l($link['raw']['title'], $link['raw']['url'], $link['raw']['attributes']); ?>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>