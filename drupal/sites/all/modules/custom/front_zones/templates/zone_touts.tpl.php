<?php
/**
* dpm($tout);
*/

?>
<section id="more" class="toutZone boxSized">
  <div class="toutZone-box columns-container clearfix">
    <div class="tout-list-box columns-container-inner">

      <?php for($i=1;$i<4;$i++): ?>
      <div class="columns-column columns-column-<?php print $i; ?> clearfix">
        <div class="tout">
          <div class="tout-image">
            <div class="tout-image-inner">
              <?php print $tout[$i]['img']; ?>
            </div>
          </div>
          <div class="tout-content">
            <div class="tout-content-inner">
              <div class="tout-content-text-container">
                <div class="tout-content-text-container-inner">
                  <h2 class="tout-title"><?php print $tout[$i]['title']; ?></h2>
                  <div class="tout-description"><?php print $tout[$i]['body']; ?></div>
                </div>
              </div>
              <div class="tout-links-container">
                <div class="tout-links-container-inner">
                  <ul class="links tout-list">

                    <?php for($j=1;$j<4; $j++) {
                      switch($j){
                        case 1:
                          $cls = 'first';
                          break;

                        case 3:
                          $cls = 'last';
                          break;

                        default:
                          $cls ='';
                          break;
                      }
                      ?>
                    <?php
                    if(!empty($tout[$i]['links'][$j])): ?>
                    <li class="<?php print $cls; ?>">
                      <div class="cta-link-container">
                        <div class="cta-link">
                          <div class="cta-link-content">
                            <?php print $tout[$i]['links'][$j];?>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php endif; ?>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endfor; ?>

        </div>
    </div>
</section>
