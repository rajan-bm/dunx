<?php /**
 * 
 * Home Part Name: Case Study
 * 
 */ ?>
<?php
    $study_args = array(
        'post_type' => 'case_study',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    );
    $study_query = new WP_Query($study_args);
    if($study_query->have_posts()) :
?>
    <section class="section section-case bg-gradient--left" id="case">
        <div class="container">
            <div class="section-case__wrapper">
                <h2 class="heading-primary">CASE STUDY</h2>
                <div class="section-case__content">
                    <div class="section-case-swiper__wrapper">
                        <div class="case-swiper__prev"></div>
                        <div class="section-case-swiper case-swiper swiper">
                            <div class="swiper-wrapper">
                                <?php while($study_query->have_posts()) : $study_query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <?php $link = get_field('case_study_url');?>
                                        <a href="<?php echo $link['url']; ?>" class="section-case-swiper__slide" <?php echo (($link['url']) && ($link['target'] == '_blank')) ? 'target="_blank"' : ''; ?>>
                                            <div class="section-case-swiper__image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case/case-swiper-img01.jpg" alt="CASE STUDY" class="img-fluid" width="120" height="120" loading="lazy">
                                            </div>
                                            <div class="section-case-swiper__desc">
                                                <p class="section-case-swiper__desc-text"><?php the_title(); ?><br><?php the_field('case_study_subtitle'); ?></p>
                                                <p class="section-case-swiper__gerne"><?php the_field('case_study_gerne'); ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </div>
                        </div>

                        <div class="case-swiper__next"></div>
                    </div>

                    <!-- <div class="section-case__btn">
                            <a href="#" class="btn-primary">もっと見る</a>
                        </div> -->
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>