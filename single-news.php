<?php

/**
 * 
 * Single page for post type news
 * 
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <main class="main" id="main">
        <section class="page page--single news-detail bg-gradient--page">
            <div class="container">
                <h2 class="heading-primary">news</h2>
                <div class="page-wrapper -sm">
                    <div class="page-inner">
                        <div class="news-detail-inner">
                            <div class="news-tagwpr">
                                <?php $news_terms = get_the_terms(get_the_ID(), 'news_category2'); ?>
                                <span class="news-tag"><?php if($news_terms){ echo $news_terms[0]->name; } ?></span>
                                <span class="news-date"><?php echo get_the_date('Y.m.d'); ?></span>
                            </div>
                            <h2 class="news-title"><?php the_title(); ?></h2>
                            <div class="wp-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="navigation">
                            <div class="alignleft navigation__lft">
                                <?php if (get_previous_post_link()) {
                                    previous_post_link('%link', '前へ');
                                } ?>
                            </div>
                            <a href="<?php echo home_url(); ?>/news" class="mid" aria-label="Back to News List">一覧へ</a>
                            <div class="alignright navigation__rgt">
                                <?php if (get_next_post_link()) {
                                    next_post_link('%link', '次へ');
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php endwhile; // End of the loop. 
?>
<?php get_footer();
