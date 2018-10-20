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
<div class="border-top my-3"></div>
<?php foreach ($rows as $id => $row): ?>
    <div class="<?php if ($classes_array[$id]): print $classes_array[$id]; ?><?php endif; ?>">               
        <?php print $row; ?>
    </div>
<?php endforeach; ?>