<?php /**
 * 
 * Archive Page: FAQ
 * 
 */ ?>
<?php get_header(); ?>
<main class="main" id="main">
    <section class="faq page bg-gradient--page">
        <div class="container">
            <h2 class="heading-primary">faq</h2>
            <?php $faq_terms = get_terms( array( 'taxonomy' => 'faq_category', 'parent' => 0, ) ); // gets parent faq categories
            if( $faq_terms ): ?>
                <div class="tabs faq-tab">
                    <div class="tabs-nav -mb">
                        <ul class="tabs-nav__list">
                            <?php foreach( $faq_terms as $faq_term ): ?>
                                <li class="tabs-nav__item"><a href="#" class="tabs-nav__link <?php echo $faq_terms[0] -> term_id == $faq_term -> term_id ? 'active' : ''; ?>" data-toggle-target=".tab-content-<?php echo $faq_term -> term_id; ?>"><?php echo $faq_term -> name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php foreach( $faq_terms as $faq_term ): ?>            
                        <div class="tabs-wpr">
                            <div class="tabs-content tab-content-<?php echo $faq_term -> term_id; ?> <?php echo $faq_terms[0] -> term_id == $faq_term -> term_id ? 'active' : ''; ?>">
                                <?php $faq_subterms = get_terms( array( 'taxonomy' => 'faq_category', 'hide_empty' => false, 'parent' => $faq_term -> term_id, ) ); // all subterms according to the parent term
                                if( $faq_subterms ): ?>
                                    <ul class="faq-tags">
                                        <?php foreach( $faq_subterms as $faq_subterm ): ?>
                                            <li class="faq-tags__item"><a href="#<?php echo $faq_subterm -> name . '_' . $faq_subterm -> term_id; ?>" class="faq-tags__link"><?php echo $faq_subterm -> name; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php foreach( $faq_subterms as $faq_subterm ): ?>
                                        <div class="faq__wpr" id="<?php echo $faq_subterm -> name . '_' . $faq_subterm -> term_id; ?>">
                                            <?php
                                                $args = array(
                                                    'post_type' => 'faq',
                                                    'posts_per_page' => -1,
                                                    'post_status' => 'publish',
                                                    'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'faq_category',
                                                            'field' => 'term_id',
                                                            'terms' => $faq_subterm -> term_id
                                                        )
                                                    )
                                                );
                                                $the_query = new WP_Query( $args );
                                                if ( $the_query->have_posts() ) : ?>
                                                    <h3 class="faq__ttl"><?php echo $faq_subterm -> name; ?></h3>
                                                    <div class="faq__inner">
                                                        <div class="faq-list">
                                                            <?php $counter = 0;
                                                                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                                                    <div class="faq__accordion js-accordion">
                                                                        <div class="faq__qns js-accordion-qns <?php echo $counter == 0 ? 'active' : ''; ?>">
                                                                            <h4 class="faq__qns-text"><?php echo get_the_title(); ?></h4>
                                                                        </div>
                                                                        <div class="faq__ans js-accordion-ans <?php echo $counter == 0 ? 'show' : ''; ?>">
                                                                            <p class="faq__ans-text"><?php echo get_the_content(); ?></p>
                                                                        </div>
                                                                    </div>
                                                                    <?php $counter++;
                                                                endwhile;
                                                                wp_reset_postdata();
                                                            ?>
                                                        </div>
                                                    </div>
                                                <?php endif;
                                            ?>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer() ?>