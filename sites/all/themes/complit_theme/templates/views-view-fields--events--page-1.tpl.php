<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<div class="row mb-3">
    <div class="col-2 border-right">
        <div class="border-bottom">
            <div class="text-center month"><?php print $fields['field_date_1']->content; ?></div>
            <div class="text-center day"><?php print $fields['field_date']->content; ?></div>            
            <div class="text-center year"><?php print $fields['field_date_2']->content; ?></div>
        </div>
        <div class="mt-2">
            <div class="text-center time"><?php print $fields['field_time_from']->content; ?> - <?php print $fields['field_time_to']->content; ?></div>
        </div>
    </div>
    <div class="col-10">
        <h4><?php print $fields['title']->content; ?></h4>
        <p><?php print $fields['body']->content; ?></p>
    </div>
</div>