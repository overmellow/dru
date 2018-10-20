<?php

function complit_preprocess_node(&$variables) {
    // Get a list of all the regions for this theme
    foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

      // Get the content for each region and add it to the $region variable
      if ($blocks = block_get_blocks_by_region($region_key)) {
        $variables['region'][$region_key] = $blocks;
      }
      else {
        $variables['region'][$region_key] = array();
      }
    }
    
    $breadcrumb = drupal_get_breadcrumb();
    array_shift($breadcrumb);
    $output = '<nav aria-label="breadcrumb"><ol class="breadcrumb">';
    foreach ($breadcrumb as $value) {
        $output .= '<li class="breadcrumb-item">' . $value . '</li>';
    }
    $output .= '</ol></nav>';
    $variables['breadcrumb'] = $output;
    
    $variables['tabs'] = menu_local_tabs();
}

function complit_preprocess_user_profile(&$variables){
    // Get a list of all the regions for this theme
    foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

      // Get the content for each region and add it to the $region variable
      if ($blocks = block_get_blocks_by_region($region_key)) {
        $variables['region'][$region_key] = $blocks;
      }
      else {
        $variables['region'][$region_key] = array();
      }
    }
    
    $variables['tabs'] = menu_local_tabs();
}

function complit_menu_tree__main_menu($variables) {
  return '<ul class="navbar-nav mr-auto" id="main-menu">' . $variables['tree'] . '</ul>';
}

function complit_menu_link__main_menu(array $variables) {
  $element = $variables['element'];
  //array_push($element['#attributes']['class'], 'collection-item');
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  
//  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  $output = l($element['#title'], $element['#href'], array('attributes' => array('class' => array('nav-link'))));  
//  var_dump($element['#localized_options']);
  return '<li class="nav-item" ' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function complit_nice_menus($variables) {
  $output = array(
    'content' => '',
    'subject' => '',
  );

  // The Nice menu ID.
  $id = $variables['id'];
  // The top parent menu name from which to build the full menu.
  $menu_name = $variables['menu_name'];
  // The menu ID from which to build the displayed menu.
  $mlid = $variables['mlid'];
  // Optional. The direction the menu expands. Default is 'right'.
  $direction = $variables['direction'];
  // The number of children levels to display. Use -1 to display all children
  // and use 0 to display no children.
  $depth = $variables['depth'];
  /*
   * Optional. A custom menu array to use for theming --
   * it should have the same structure as that returned
   * by menu_tree_all_data(). Default is the standard menu tree.
   */
  $menu = $variables['menu'];
  // "Show as expanded" option.
  $respect_expanded = $variables['respect_expanded'];
  if ($menu_tree = theme('nice_menus_tree', array(
    'menu_name' => $menu_name,
    'mlid' => $mlid,
    'depth' => $depth,
    'menu' => $menu,
    'respect_expanded' => $respect_expanded))) {
    if ($menu_tree['content']) {
//        if($menu_name == 'main-menu')
//        {
//            $output['content'] = '<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>';
//        }
      $output['content'] .= '<ul class="clearfix hide-on-med-and-down nice-menu nice-menu-' . $direction . ' nice-menu-' . $menu_name . '" id="nice-menu-' . $id . '">' . $menu_tree['content'] . '</ul>' . "\n";
      //$output['content'] .= '<ul class="side-nav" id="mobile-demo">' . $menu_tree['content'] . '</ul>' . "\n";
      $output['subject'] = $menu_tree['subject'];
    }
  }
  return $output;
}
//
//function complit_image($variables){
//    $attributes = $variables['attributes'];
//    $attributes['src'] = file_create_url($variables['path']);
//    foreach (array(
//      'width',
//      'height',
//      'alt',
//      'title',
//    ) as $key) {
//      if (isset($variables[$key])) {
//        $attributes[$key] = $variables[$key];
//      }
//    }
//    return '<img class="card-img" ' . drupal_attributes($attributes) . ' />';
//}

//function complit_image_style($variables) {
//
//  // Determine the dimensions of the styled image.
//  $dimensions = array(
//    'width' => $variables['width'],
//    'height' => $variables['height'],
//  );
//  image_style_transform_dimensions($variables['style_name'], $dimensions);
//  $variables['width'] = $dimensions['width'];
//  $variables['height'] = $dimensions['height'];
//
//  // Determine the URL for the styled image.
//  $variables['path'] = image_style_url($variables['style_name'], $variables['path']);
//  $variables['attributes']['class'][] = 'myclass';
//
//  return theme('image', $variables);
//}

function complit_preprocess_views_view_fields(&$vars) {
    $view = $vars['view'];
    if ($view->name == 'books' || $view->name == 'news' ) {
        foreach ($vars['fields'] as $id => $field) {
            if ($id == 'field_image') {
                $field_output = $view->style_plugin->get_field($view->row_index, $id);
                $field_output = str_replace("<img", "<img class='card-img-top' ", $field_output);
                $field_output = preg_replace('/(width|height)="[^"]*"/', '', $field_output);
                $vars['fields'][$id]->content = $field_output;
            }
            if ($id == 'title') {
                $field_output = $view->style_plugin->get_field($view->row_index, $id);
                $field_output = str_replace("<a", "<a class='text-white' ", $field_output);
                $vars['fields'][$id]->content = $field_output;
            }
            if ($id == 'body') {
                $field_output = $view->style_plugin->get_field($view->row_index, $id);
                $field_output = str_replace("<p", "<p class='card-text bottom' ", $field_output);
                $vars['fields'][$id]->content = $field_output;
            }
        }
    }
}
//
//function complit_breadcrumb($variables) {
//  $breadcrumb = $variables['breadcrumb'];
//  if (!empty($breadcrumb)) {
//    // Provide a navigational heading to give context for breadcrumb links to
//    // screen-reader users. Make the heading invisible with .element-invisible.
//    $output = '<nav aria-label="breadcrumb"><ol class="breadcrumb">' . implode(' / ', $breadcrumb) . '</ol></nav>';
//    return $output;
//  }
//}