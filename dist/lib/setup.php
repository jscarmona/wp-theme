<?php

namespace WPTheme\Setup;

use WPTheme\Assets;

/**
 * Initialize everything this theme will need from WordPress
 * @return void
 */
function theme()
{
    // Enable menus
    add_theme_support('menus');

    // Enable post thumbnails
    add_theme_support('post-thumbnails');

    // Set image sizes
    add_image_size('squre', 500, 500, true);

    // Enable HTML5 markup support
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    // Enable style sheet inside wysiwyg editor
    add_editor_style(Assets\style('main.css'));

    // Register menu locations
    register_nav_menus([
        'header-menu' => __('Header Menu', 'ten13media'),
        'footer-menu' => __('Footer Menu', 'ten13media'),
    ]);
}

add_action('after_setup_theme', __NAMESPACE__ . '\\theme');

/**
 * Reigster the widget areas this theme needs
 * @return void
 */
function widgets()
{
  register_sidebar([
    'name'          => __('Footer', 'ten13media'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}

add_action('widgets_init', __NAMESPACE__ . '\\widgets');

/**
 * Load the correct assets needed for this theme
 * @return void
 */
function assets()
{
  wp_enqueue_style('main', Assets\style('main.css'), false, null);

  wp_enqueue_script('jquery', '//code.jquery.com/jquery-2.2.4.min.js');

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('main', Assets\script('main.js'), 'jquery', true);
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

/**
 * Filter the excerpt length to 25 words
 * @param  Integer $length
 * @return Integer
 */
function customExcerptLength($length) {
    return 25;
}

add_filter('excerpt_length', __NAMESPACE__ . '\\customExcerptLength', 999);

/**
 * Output an ellipsis for read more
 * @param  String $more
 * @return String
 */
function customReadMoreString($more) {
    return ' ...';
}

add_filter('excerpt_more', __NAMESPACE__ . '\\customReadMoreString');
