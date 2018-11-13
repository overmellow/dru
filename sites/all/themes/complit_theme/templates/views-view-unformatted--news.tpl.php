<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<!--<div class="border-top my-3"></div>-->
<div class='row'>
    <?php foreach ($rows as $id => $row): ?>
        <div class="<?php if ($classes_array[$id]): ?><?php print $classes_array[$id]; ?><?php endif; ?> col-md-12 col-lg-6">
            <?php print $row; ?>
        </div>        
    <?php endforeach; ?>
</div>