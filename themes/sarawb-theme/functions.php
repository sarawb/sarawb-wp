<?php

// jQuery Insert From Google
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

//Stuff
wp_register_script( 'global-stuff', get_template_directory_uri() . '/assets/js/stuff-ck.js');
wp_enqueue_script( 'global-stuff', 'true', 'true', 'true', 'true' );

// Modifying Excerpt
function new_excerpt_more( $more ) {
  return '…';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function custom_excerpt_length( $length ) {
  return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Dynamic Sidebars
register_sidebar( array(
    'name' => 'Email Subscription',
    'id' => 'email-subscription',
    'before_widget' => '<div class="jetpack-email">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
) );

register_sidebar( array(
    'name' => 'Footer About Me',
    'id' => 'footer-about-me',
    'before_widget' => '<div class="footer__about-me">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
) );

// Advanced Custom Fields

// Options Page
include_once( 'add-ons/acf-options-page/acf-options-page.php' );

// Registering Homepage Options Page
register_options_page('Homepage Options');

// Fields for the Homepage Options Page

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_homepage',
    'title' => 'Homepage',
    'fields' => array (
      array (
        'key' => 'field_52fe4e4e18d89',
        'label' => 'Main Headline',
        'name' => 'home_headline',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_52fe4ec218d8a',
        'label' => 'Homepage Content',
        'name' => 'home_content',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_52fe4eeb18d8b',
        'label' => 'Homepage Image',
        'name' => 'home_image',
        'type' => 'image',
        'save_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
      ),
      array (
        'key' => 'field_52fe5a6e4da22',
        'label' => 'Workshops Content',
        'name' => 'home_workshops_content',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_52fe5add4da23',
        'label' => 'Consulting Content',
        'name' => 'home_consulting_content',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_52fe5b074da24',
        'label' => 'Project Partnerships Content',
        'name' => 'home_project_partnerships_content',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'no',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-homepage-options',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
