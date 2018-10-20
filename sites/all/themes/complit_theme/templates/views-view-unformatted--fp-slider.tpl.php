<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
          </ol>
        <?php foreach ($rows as $id => $row): ?>
        <div class="<?php if ($classes_array[$id]): print $classes_array[$id]; ?> <?php if($id == 0): print 'active'; endif;?>"<?php endif; ?>>               
            <?php print $row; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>