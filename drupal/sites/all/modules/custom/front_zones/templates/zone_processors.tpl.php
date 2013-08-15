<div class="snapdragon-specs-table-container">
  <table class="<?php print $classes; ?>">
    <thead>
      <tr>
        <th class="blank"></th>
        <?php foreach ($processors as $processor): ?>
          <th>
            <?php if(!empty($processor['image_url'])): ?>
              <img src="<?php print $processor['image_url']; ?>"/>
            <?php endif; ?>
            <div class="processor-subtitle"><?php print $processor['subtitle']; ?></div>
          </th>
        <?php endforeach; ?>
      </tr>
      <tr>
        <td class="progress-bar" colspan="5"></td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($spec_categories as $s => $spec_category): 
        $spec_index = preg_replace('/[^A-Za-z0-9]/', '', $spec_category);
      ?>
        <tr>
          <td><?php print $spec_category; ?></td>
          <?php foreach ($processors as $p => $processor): ?>
            <td>
              <?php if ($processor_info[$p][$spec_index]['rating']): ?>
                <div class="rating-<?php print !empty($processor_info[$p][$spec_index]['rating']) ? $processor_info[$p][$spec_index]['rating'] : ''; ?>"></div>
              <?php endif; ?>
              <?php print !empty($processor_info[$p][$spec_index]['text']) ? $processor_info[$p][$spec_index]['text'] : ''; ?>
            </td>
          <?php endforeach; ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>



