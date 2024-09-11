<?php
$faq_args = array(
    'post_type' => 'faq',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'meta_query' => array(
        array(
            'key' => 'display_in_top_page',
            'value' => '1',
        ),
    ),
);
$faq_query = new WP_Query($faq_args);
if ($faq_query->have_posts()):
?>
    <section class="section section-faq bg-gradient--right" id="faq">
        <div class="container">
            <h2 class="heading-primary">faq</h2>
            <div class="section-faq__wrapper">
                <div class="faq__wpr">
                    <div class="faq__inner">
                        <div class="faq-list">
                            <?php $f_counter = 0;
                            while ($faq_query->have_posts()): $faq_query->the_post(); ?>
                                <div class="faq__accordion js-accordion">
                                    <div class="faq__qns js-accordion-qns <?php if ($f_counter == 0) echo 'active'; ?>">
                                        <p class="faq__qns-text"><?php the_title(); ?></p>
                                    </div>
                                    <div class="faq__ans js-accordion-ans <?php if ($f_counter == 0) echo 'show'; ?>">
                                        <div class="faq__ans-text"><?php the_content(); ?></div>
                                    </div>
                                </div>
                            <?php $f_counter++;
                            endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo home_url(); ?>/faq" class="btn-primary">もっと見る</a>
        </div>
    </section>
<?php endif; ?>