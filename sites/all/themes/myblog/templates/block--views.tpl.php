<?php
/**
 * @file
 * Default theme implementation to display a block.
 */
?>
<div class="block-<?php print $block->module .'-'. $block->delta; ?>">
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <?php if ($block->subject): ?>
  <?php endif;?>
  <?php print $content ?>
</div>