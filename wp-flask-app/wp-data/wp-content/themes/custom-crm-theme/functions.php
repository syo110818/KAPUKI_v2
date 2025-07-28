<?php
/**
 * Functions and definitions for the Custom CRM Theme.
 *
 * This file registers theme supports, widget areas and any hooks
 * necessary for the theme to function. It is automatically loaded
 * by WordPress when the theme is activated.
 *
 * @package Custom_CRM_Theme
 */

if ( ! function_exists( 'custom_crm_theme_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function custom_crm_theme_setup() {
        // Enable support for the document title tag.
        add_theme_support( 'title-tag' );

        // Enable support for post thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register a primary navigation menu (unused here but available to users).
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'custom-crm-theme' ),
        ) );
    }
    add_action( 'after_setup_theme', 'custom_crm_theme_setup' );
}

/**
 * Register widget area for the sidebar.
 */
function custom_crm_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'custom-crm-theme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'custom-crm-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'custom_crm_theme_widgets_init' );

/**
 * Enqueue theme styles and scripts.
 */
function custom_crm_theme_enqueue_scripts() {
    // Theme stylesheet.
    wp_enqueue_style( 'custom-crm-theme-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

    // Dashicons for icons used in header and sidebar.
    wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'custom_crm_theme_enqueue_scripts' );
