<?php

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 *
 * If a preview is enabled, these keys will be available on the preview page:
 * - $form['preview_message']: The preview message renderable.
 * - $form['preview']: A renderable representing the entire submission preview.
 */
?>
<?php
//   foreach($form['submitted'] as $key=>$value){
//    if(substr($key, 0, 1)<>'#'){
//    $prefix = '<div class="input-group mb-3">';
//    $prefix .= '<label for="edit-submitted-'.$key.'" class="col-sm-3 control-label text-right">'.$value['#title'].'</label>';
//    $prefix .= '<div class="col-sm-9 control-label">';
//
//    $suffix = '</div></div>';
//
//    $form['submitted'][$key]['#prefix'] = $prefix;
//    $form['submitted'][$key]['#suffix'] = $suffix;
//    unset($form['submitted'][$key]['#title']);
//    }
//   }
  
  // Print out the progress bar at the top of the page.
  print drupal_render($form['progressbar']);

  // Print out the preview message if on the preview page.
  if (isset($form['preview_message'])) {
    print '<div class="messages warning">';
    print drupal_render($form['preview_message']);
    print '</div>';
  }

  // Print out the main part of the form.
  // Feel free to break this up and move the pieces within the array.
//  print drupal_render($form['submitted']);

//  print drupal_render($form['submitted']);
  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above (buttons, hidden elements, etc).
//  print drupal_render_children($form);

?>
<?php // echo $form['submitted']['email']['#title']; ?>
<div class="input-group mb-3">
  <input id="email-subscribe" type="text" class="form-control" placeholder="Your email address" aria-label="Email" aria-describedby="button-addon2">
  <div class="input-group-append">
    <input id="subscribe" class="btn btn-outline-secondary webform-submit button-primary form-submit" type="submit" name="op" value="SUBSCRIBE" data-thmr="thmr_245" thmr_curr="0" style="outline: none;">
  </div>
</div> 