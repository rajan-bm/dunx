<?php

/**
 * 
 * Home Part: News
 * 
 */ ?>
<?php
$args = array(
    'post_type' => 'news',
    'posts_per_page' => 4,
    'post_status' => 'publish',
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()): ?>
    <section class="section section-news bg-gradient--left" id="news">
        <div class="container">
            <h2 class="heading-primary">news</h2>
            <div class="section-news__wrapper">
                <ul class="news-list">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="news-item">
                            <a href="<?php the_permalink(); ?>" class="news-link">
                                <?php $news_terms = get_the_terms(get_the_ID(), 'news_category2') ?>
                                <div class="news-tagwpr">
                                    <?php if ($news_terms) : ?>
                                        <span class="news-tag"><?php echo $news_terms[0]->name; ?></span>
                                    <?php endif; ?>
                                    <span class="news-date"><?php echo get_the_date('Y.m.d'); ?></span>
                                </div>
                                <p class="news-desc"><?php the_title(); ?></p>
                            </a>
                        </li>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
            <?php 
                $terms = get_terms(array(
                    'taxonomy'   => 'news_category',
                    'hide_empty' => true,
                ));
                if (!is_wp_error($terms) && !empty($terms)) {
                    $first_term = $terms[0];
                    $first_term_link = get_term_link($first_term);
                    echo '<a href="'.$first_term_link.'" class="btn-primary">もっと見る</a>';
                }
            ?>
        </div>
    </section>
<?php endif; ?>