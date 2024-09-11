<?php

/**
 * Template Name: Page Template
 */
?>

<?php get_header(); ?>
<main class="main" id="main">
    <section class="company page bg-gradient--page">
        <div class="container">
            <h2 class="heading-primary -jp"><?php the_title(); ?></h2>
            <div class="page-wrapper -lg">
                <div class="page-inner">
                    <div class="page-desc the-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>