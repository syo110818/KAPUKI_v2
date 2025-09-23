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
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ---------------------------
// ログアウト処理（押したら login.php に遷移）
// ---------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    // session_destroy(); // 後で必要なら有効化
    header("Location: /login");
    exit;
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <!-- Font Awesome CDN for logout icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        <!-- 右上ログアウトボタン -->
        <div class="header-right">
            <form method="post" class="logout-form" style="display:inline;">
                <button type="submit" name="logout" class="logout-btn-header" title="ログアウト">
                    <i class="fas fa-sign-out-alt"></i> ログアウト
                </button>
            </form>
        </div>
    </div>
</header>

<!-- 共通JSを読み込む -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/common-check.js"></script>

<div id="site-container" class="site-container">
    <?php get_sidebar(); ?>
    <main id="primary" class="site-main">

<!-- ハンバーガメニュー用スクリプト -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('site-sidebar');
    const container = document.getElementById('site-container');

    toggleButton.addEventListener('click', function () {
        sidebar.classList.toggle('active');
        container.classList.toggle('sidebar-open');
    });
});
</script>
