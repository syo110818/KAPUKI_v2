<?php
// ヘッダーを読み込む
get_header();
?>

<div class="site-container">
    <?php
    // サイドバーを読み込む
    get_sidebar();
    ?>

    <main class="site-main">
        <!-- 投稿ループなど、メインコンテンツ -->
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'custom-crm-theme' ); ?></p>
        <?php endif; ?>
    </main>
</div><!-- .site-container -->

<?php
// フッターを読み込む
get_footer();
