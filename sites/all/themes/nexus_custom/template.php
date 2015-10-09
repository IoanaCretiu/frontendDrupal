<?php
/**
 * Implements hook_html_head_alter().
 * This will overwrite the default meta character type tag with HTML5 version.
 */
function nexus_custom_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
  );
}

/**
 * Insert themed breadcrumb page navigation at top of the node content.
 */
function nexus_custom_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Use CSS to hide titile .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    // comment below line to hide current page to breadcrumb
$breadcrumb[] = drupal_get_title();
    $output .= '<nav class="breadcrumb">' . implode(' » ', $breadcrumb) . '</nav>';
    return $output;
  }
}

/**
 * Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 */
function nexus_custom_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary clearfix">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary clearfix">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  return $output;
}

/**
 * Override or insert variables into the node template.
 */
function nexus_custom_preprocess_node(&$variables) {
  $node = $variables['node'];
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['content_attributes_array']['class'][] = 'content node-full';
  }

  if ($variables['type'] == 'slide') {
    $variables['content_attributes_array']['class'][] = 'news-details';
  }

  $variables['date'] = t('!datetime', array('!datetime' =>  date('j F Y', $variables['created'])));
  $variables['content']['links']['node']['#links']['node-readmore']['attributes']['class'] = array('btn', 'primary-bg');
}

function nexus_custom_page_alter($page) {
  // <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
    'name' =>  'viewport',
    'content' =>  'width=device-width, initial-scale=1, maximum-scale=1'
    )
  );
  drupal_add_html_head($viewport, 'viewport');
}

function nexus_custom_preprocess_field(&$variables) {
  if ($variables['element']['#field_name'] == 'field_images' && $variables['element']['#object']->type == "album") {
    $variables['classes_array'][] = 'popup-gallery';
  }
}

/**
 * Add javascript files for front-page jquery slideshow.
 */
if (drupal_is_front_page()) {
  drupal_add_js(drupal_get_path('theme', 'nexus_custom') . '/js/jquery.flexslider.js');
  drupal_add_js(drupal_get_path('theme', 'nexus_custom') . '/js/slide.js');
}
