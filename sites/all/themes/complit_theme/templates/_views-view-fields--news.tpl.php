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
<!--
<?php foreach ($fields as $id => $field): ?>
    <?php print $field->content; ?>
<?php endforeach; ?>
-->
<!--
<?php // print file_create_url($row->field_image[$node->language][0]['uri']); ?>
<img class="card-img" src="<?php // print file_create_url($row->field_image[$node->language][0]['uri']); ?>" alt="Card image">
<?php // print $fields['field_image']->content; ?>
<?php // print $showimage; ?>
<?php // var_export($view); ?>
<?php // echo $view['result'][0]['field_field_image'][0]['raw']['filename']; ?>
<?php // echo $view->result[1]->field_field_image[0]['raw']['filename']; ?>
<?php // print $fields['field_image']->und[0]['filename'] ?>
-->
<!--
<pre>
<?php
//    var_dump($row->field_field_image[0]['raw']['filename']); 
//$key_string1 = array_keys($row);
//print_r(get_object_vars($row));; ?>  
</pre>
-->
<?php // print $fields['field_image']->content; ?>
<div class="card bg-dark text-white mb-3">
<!--    <img class="card-img" src="<?php print file_create_url('sites/default/files/' . $row->field_field_image[0]['raw']['filename']); ?>" />-->
    <?php print $fields['field_image']->content; ?>
    <div class="card-img-overlay">
    <!--    <h5 class="card-title"><?php print $row->node_title; ?></h5>-->
        <h5 class="card-title"><?php print $fields['title']->content; ?></h5>
        <p class="card-text"></p>
    </div>
</div>