<?php
  /**
   * @file
   * Default template for dfp tags.
   */
?>

<div <?php print drupal_attributes($placeholder_attributes) ?>>
  <?php if (isset($slug)):
    print drupal_render($slug);
  endif; ?>
  <script type="text/javascript">
    googletag.cmd.push(function() {
      googletag.display("<?php print $tag->placeholder_id ?>");
      <?php // TODO: First, move this forked module into the repo. ?>
      <?php // TODO: Second, the second parameter here could be less tacky.... ?>
      <?php if (variable_get('dfp_disable_init_load', 0) && $tag->machinename != 'block_gallery'): ?>
googletag.pubads().refresh([dfp_entry.<?php print $tag->machinename; ?>]);
      <?php endif; ?>
    });
  </script>
</div>
