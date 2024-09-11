<?php /**
 * 
 * Taxonomy Page: News
 * 
 */ ?>
<?php get_header(); ?>
<?php
    $curr_term = get_queried_object(); // Get the current term object
    $curr_term_id = $curr_term->term_id;

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'news',
        'posts_per_page' => 10,
        'post_status' => 'publish',
        'paged' => $paged,
        'tax_query' => array(
            array(
                'taxonomy' => 'news_category',
                'field'    => 'term_id',  
                'terms'    => $curr_term_id,
            ),
        ),
    );
    $the_query = new WP_Query($args);
?>
<main class="main" id="main">
    <section class="news page bg-gradient--page">
        <div class="container">
            <h1 class="heading-primary">news</h1>
            <?php 
                $terms = get_terms(array(
                    'taxonomy'   => 'news_category',
                    'hide_empty' => true,
                ));

                if (!is_wp_error($terms) && !empty($terms)):?>
                    <div class="tabs-nav">
                        <ul class="tabs-nav__list">
                            <?php foreach($terms as $term): ?>
                                <li class="tabs-nav__item"><a href="<?php echo get_term_link($term); ?>" class="tabs-nav__link <?php echo ($curr_term_id==$term-> term_id) ? 'active' : ''?>"><?php echo $term-> name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            <?php if ($the_query->have_posts()) : ?>
                <div class="page-wrapper">
                    <ul class="news-list">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="news-item">
                                <a href="<?php the_permalink(); ?>" class="news-link">
                                    <?php $news_terms = get_the_terms( get_the_ID(), 'news_category2' ) ?>
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
                    <?php if (function_exists('mypagination')) mypagination($the_query->max_num_pages); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer();