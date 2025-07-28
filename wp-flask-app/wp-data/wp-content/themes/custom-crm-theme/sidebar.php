<?php
/**
 * The sidebar template for our custom CRM theme.
 *
 * Displays a sidebar with a heading and a navigation menu, followed by a
 * widget area. The design mirrors the provided mockups with icons and
 * Japanese labels.
 *
 * @package Custom_CRM_Theme
 */
?>
<aside id="site-sidebar" class="site-sidebar">
    <div class="sidebar-header">
        <span class="sidebar-title">顧客一覧</span>
    </div>
    <nav class="sidebar-nav">
        <ul class="sidebar-menu">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <span class="dashicons dashicons-calendar-alt"></span>
                    <span class="sidebar-text">スケジュール</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <span class="dashicons dashicons-list-view"></span>
                    <span class="sidebar-text">Todo</span>
                </a>
            </li>
        </ul>
    </nav>
    <?php /*if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div class="widget-area">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
    <?php endif;*/ ?>
</aside>