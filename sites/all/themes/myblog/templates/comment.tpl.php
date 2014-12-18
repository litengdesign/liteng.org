<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="media">
    <div class="pull-left media-object">
      <?php print $picture; ?>
    </div>
    <div class="media-body">
      <p class="media-author">
          <?php print $author;print "&nbsp;&nbsp;".$created;?>
      </p>
      <p class="media-heading">
        <h3> 
          <?php hide($content['links']);
           print render($content);
          ?>
        </h3>
      </p>
      <?php if ($signature): ?>
      <p class="signature text-right"><?php print $signature; ?></p>
      <?php endif?>
      <div class="comment-text">
        <?php print render($title_prefix); ?>
        <?php print render($title_suffix); ?>
        <?php print render($content['links']);?>
      </div>  
    </div>
  </div>
</div>  

