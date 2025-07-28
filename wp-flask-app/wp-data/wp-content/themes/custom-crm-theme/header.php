<?php
/**
 * The header template for our custom CRM theme.
 *
 * Outputs the top navigation bar, including a logo, site title, search form
 * and user icon. A hamburger button on the left toggles the sidebar. See
 * style.css for layout and styling.
 *
 * @package Custom_CRM_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="site-header" class="site-header">
    <div class="header-inner">
        <div class="header-left">
            <button id="sidebarToggle" class="menu-toggle" aria-label="Toggle sidebar">
                &#9776;
            </button>
            <div class="logo-wrapper">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/KAPUKI_logo.png" alt="<?php bloginfo( 'name' ); ?>" class="site-logo" />
                </a>
            </div>
            <div class="site-title-wrapper">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </div>
        </div>
        <div class="header-right">
            <div class="search-form-wrapper">
                <?php get_search_form(); ?>
            </div>
            <div class="user-icon-wrapper">
                <a href="<?php echo esc_url( wp_login_url() ); ?>" class="user-icon" aria-label="User profile">
                    <span class="dashicons dashicons-admin-users"></span>
                </a>
            </div>
        </div>
    </div>
</header>
<div id="site-container" class="site-container">
    <?php get_sidebar(); ?>
    <main id="primary" class="site-main">