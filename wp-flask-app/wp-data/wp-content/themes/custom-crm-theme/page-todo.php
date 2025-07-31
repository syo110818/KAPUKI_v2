<?php
/**
 * Template Name: Todo Page
 *
 * Displays a list of Todo items grouped by category. This template uses the
 * custom header and sidebar defined in this theme and mirrors the provided
 * design mockup with pastel avatars and rounded buttons.
 *
 * @package Custom_CRM_Theme
 */

// Load the site header, which also outputs the sidebar and opens the main tag.
get_header();
?>

<div class="todo-container">
    <h1 class="todo-heading">Todo</h1>
    <div class="todo-divider"></div>

    <section class="todo-category">
        <h2 class="todo-category-title">撮影１ヶ月前のお客様</h2>
        <div class="todo-item">
            <div class="todo-item-left">
                <div class="todo-item-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/user-placeholder1.png" alt="山田太郎">
                </div>
                <div class="todo-item-info">
                    <span class="todo-item-name">山田太郎</span>
                    <span class="todo-item-label">ヘアイメージ未添付</span>
                </div>
            </div>
            <button class="todo-item-button">詳細</button>
        </div>
        <div class="todo-item">
            <div class="todo-item-left">
                <div class="todo-item-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/user-placeholder2.png" alt="山田花子">
                </div>
                <div class="todo-item-info">
                    <span class="todo-item-name">山田花子</span>
                    <span class="todo-item-label">ヘアイメージ未添付</span>
                </div>
            </div>
            <button class="todo-item-button">詳細</button>
        </div>
    </section>

    <section class="todo-category">
        <h2 class="todo-category-title">発送１ヶ月前のお客様</h2>
        <div class="todo-item">
            <div class="todo-item-left">
                <div class="todo-item-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/user-placeholder3.png" alt="斎藤京子">
                </div>
                <div class="todo-item-info">
                    <span class="todo-item-name">斎藤京子</span>
                    <span class="todo-item-label">発送準備中</span>
                </div>
            </div>
            <button class="todo-item-button">詳細</button>
        </div>
        <div class="todo-item">
            <div class="todo-item-left">
                <div class="todo-item-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/user-placeholder4.png" alt="田中一郎">
                </div>
                <div class="todo-item-info">
                    <span class="todo-item-name">田中一郎</span>
                    <span class="todo-item-label">発送準備中</span>
                </div>
            </div>
            <button class="todo-item-button">詳細</button>
        </div>
    </section>

    <section class="todo-category">
        <h2 class="todo-category-title">メール送信が失敗したお客様</h2>
        <div class="todo-item">
            <div class="todo-item-left">
                <div class="todo-item-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/user-placeholder5.png" alt="田中優子">
                </div>
                <div class="todo-item-info">
                    <span class="todo-item-name">田中優子</span>
                    <span class="todo-item-label">発送準備中</span>
                </div>
            </div>
            <button class="todo-item-button">詳細</button>
        </div>
    </section>
</div>

<?php
// Close the main tag opened in header.php.
echo '</main></div>';

// Load the site footer if it exists.
if ( function_exists( 'get_footer' ) ) {
    get_footer();
}
?>
