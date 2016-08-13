<?php

namespace WPTheme\Helpers;

/**
 * Create Main Nav
 */
function getNavItems($location = 'header-menu', $classes = '')
{
    wp_nav_menu([
        'theme_location'  => $location,
        'menu'            => '',
        'container'       => false,
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menus',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '%3$s',
        'depth'           => 0,
        'walker'          => ''
    ]);
}

/**
 * Slugify a string to make it friendly for href's
 * @param  String $str
 * @return String
 */
function slugify($str)
{
    return strtolower(preg_replace('/\s+/', '', $str));
}
