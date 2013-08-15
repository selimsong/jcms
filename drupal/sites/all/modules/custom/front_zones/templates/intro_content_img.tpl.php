<?php 
//dpm($variables);
$img = '<img src ="' . image_style_url('slide_background', $variables['slide_img'][0]['raw']['uri']) .'" alt="'. $variables['slide_img'][0]['raw']['alt'].'" />';
?>
<div class="item-container-inner">
  <div class="item-columns content-<?php print $variables['content_pos']; ?>">
    <div class="item-columns-inner">
      <div class="item-column-media">
        <div class="column-image">
          <?php print $img; ?>
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
                    <?php print l($link['raw']['title'], $link['raw']['url'], $link['raw']['attributes']);?>
                  </div>
                </div>
              </div>
              <?php endforeach;?>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>