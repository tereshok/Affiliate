<?php

if( function_exists('acf_options_page') ) {
  
  $option_page = acf_add_options_page([
    'page_title'    => __('Extra content'),
    'menu_title'    => __('Extra content'),
    'menu_slug'     => 'extra-content',
    'capability'    => 'edit_posts',
    'icon_url'      => 'dashicons-schedule',
    'redirect'      => false
  ]);

  add_action('acf/init', 'acf_options_page');
}