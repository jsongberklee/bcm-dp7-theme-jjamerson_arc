<?php

/**
 * @file
 * islandora-basic-collection-wrapper.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */

// replace text (Grid/List view) to icons)
$view_links[0]['title'] = '<img src="/sites/default/files/theme-images/grid-view.png" />';
$view_links[1]['title'] = '<img src="/sites/default/files/theme-images/list-view.png" />';
?>

<div class="islandora-basic-collection-wrapper">
  <?php if (!empty($dc_array['dc:description']['value'])): ?>
    <p><?php print $dc_array['dc:description']['value']; ?></p>
    <hr />
  <?php endif; ?>
  <div class="islandora-basic-collection clearfix">
    <span class="islandora-basic-collection-display-switch">
      <ul class="links inline">
        <?php foreach ($view_links as $link): ?>
          <li>
            <a <?php print drupal_attributes($link['attributes']) ?>><?php print filter_xss($link['title'], array('img')) ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </span>
    <?php print $collection_pager; ?>
    <?php print $collection_content; ?>
    <?php print $collection_pager; ?>
  </div>
</div>
