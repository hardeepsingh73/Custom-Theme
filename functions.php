<?php

/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * 
 */


if (!defined('_T_VERSION')) {
    define('_T_VERSION', '1.0.0');
}

/* ------ Enqueue Styles And Scripts ------ */
if (!function_exists('style_script')) :
    function style_script()
    {
           /* CSS */
           wp_enqueue_style('main_css', get_stylesheet_uri(), array(), _T_VERSION, false);
           wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.css', _T_VERSION, false);
           wp_enqueue_style('theme_css', get_template_directory_uri() . '/assets/css/custom-style.css', _T_VERSION, false);
              /* JS */
        wp_enqueue_script('jquery_js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _T_VERSION, true);
        wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), _T_VERSION, true);
   
    }
    add_action('wp_enqueue_scripts', 'style_script');
endif;

/* ------ Title Support & Post-thumbnails Support & Post-Formats Support ------ */
if (!function_exists('custom__theme__setup')) :
    function custom__theme__setup()
    {
        add_theme_support('title_tag');
        add_theme_support('post-thumbnails');

        // Register Theme Custom Logo
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array('site-title', 'site-description'),
            'unlink-homepage-logo' => true,
        );
        add_theme_support('custom-logo', $defaults);
    }
    add_action('after_setup_theme', 'custom__theme__setup');
endif;
