<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any.
 *
 * @ingroup views_templates
 */
?>
<div>
    <div class="jumbotron shadow-sm" style="position:relative; background-image: url(<?php echo file_create_url($node->field_image[$node->language][0]['uri']); ?>); background-size:100% auto;">
        <div class="overlay-shade">
            <h1 class="display-5 jumbotron-text text-white">
                <?php print $view->human_name ?>                
            </h1>
        </div>
    </div>     
    
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="<?php print $classes; ?>">
                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                  <?php print $title; ?>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($header): ?>
                  <div class="view-header">
                    <?php print $header; ?>
                  </div>
                <?php endif; ?>

                <?php if ($exposed): ?>
                  <div class="view-filters">
                    <?php print $exposed; ?>
                  </div>
                <?php endif; ?>

                <?php if ($attachment_before): ?>
                  <div class="attachment attachment-before">
                    <?php print $attachment_before; ?>
                  </div>
                <?php endif; ?>

                <?php if ($rows): ?>
                  <div class="view-content">
                    <?php print $rows; ?>
                  </div>
                <?php elseif ($empty): ?>
                  <div class="view-empty">
                    <?php print $empty; ?>
                  </div>
                <?php endif; ?>

                <?php if ($pager): ?>
                  <?php print $pager; ?>
                <?php endif; ?>

                <?php if ($attachment_after): ?>
                  <div class="attachment attachment-after">
                    <?php print $attachment_after; ?>
                  </div>
                <?php endif; ?>

                <?php if ($more): ?>
                  <?php print $more; ?>
                <?php endif; ?>

                <?php if ($footer): ?>
                  <div class="view-footer">
                    <?php print $footer; ?>
                  </div>
                <?php endif; ?>

                <?php if ($feed_icon): ?>
                  <div class="feed-icon">
                    <?php print $feed_icon; ?>
                  </div>
                <?php endif; ?>

                </div><?php /* class view */ ?>
            </div>
            <div class="col-3">
                <?php print render(block_get_blocks_by_region('sidebar_right'));?>
            </div>
        </div>
    </div>
</div>