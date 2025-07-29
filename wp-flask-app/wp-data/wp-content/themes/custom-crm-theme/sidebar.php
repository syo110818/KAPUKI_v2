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
    <nav class="sidebar-nav">
        <ul class="sidebar-menu">
            <li class="sidebar-item <?php if (is_page('customer-list')) echo 'active'; ?>">
                <a href="<?php echo home_url('/customer-list/'); ?>" class="sidebar-link">
                    <!-- 顧客一覧アイコン -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M80,108a44,44,0,1,0-44-44A44,44,0,0,0,80,108Zm96,0a36,36,0,1,0-36-36A36,36,0,0,0,176,108ZM24,192a8,8,0,0,0,8,8H128a8,8,0,0,0,8-8,56,56,0,0,0-112,0Zm160-48c-16.2,0-31.7,6.1-43.3,17.1a8,8,0,0,0,5.3,13.9H216a8,8,0,0,0,5.3-13.9A63.9,63.9,0,0,0,184,144Z"/>
                    </svg>
                    <span class="sidebar-text">顧客一覧</span>
                </a>
            </li>
            <li class="sidebar-item <?php if (is_page('todo')) echo 'active'; ?>">
                <a href="<?php echo home_url('/todo/'); ?>" class="sidebar-link">
                    <!-- ToDoアイコン -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M216,48V208a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V48A16,16,0,0,1,56,32H200A16,16,0,0,1,216,48ZM104,160,184,80l-11.3-11.3L104,137.4,83.3,116.7,72,128Z"/>
                    </svg>
                    <span class="sidebar-text">ToDo</span>
                </a>
            </li>
            <li class="sidebar-item <?php if (is_page('schedule')) echo 'active'; ?>">
                <a href="<?php echo home_url('/schedule/'); ?>" class="sidebar-link">
                    <!-- スケジュールアイコン -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M208,32H192V24a8,8,0,0,0-16,0v8H80V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM48,208V96H208V208Z"/>
                    </svg>
                    <span class="sidebar-text">スケジュール</span>
                </a>
            </li>
            <li class="sidebar-item <?php if (is_page('estimate')) echo 'active'; ?>">
                <a href="<?php echo home_url('/estimate/'); ?>" class="sidebar-link">
                    <!-- 見積書作成アイコン -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Z"/>
                    </svg>
                    <span class="sidebar-text">見積書作成</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

