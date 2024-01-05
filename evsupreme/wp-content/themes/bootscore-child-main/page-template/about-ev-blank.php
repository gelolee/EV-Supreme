<?php

/**
 * Template Name: About Blank
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */
get_header();
?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php bs_after_primary(); ?>

        <main id="main" class="site-main">
            <section class="about">
                <div class="all-about">
                    <div class="about-content">
                        <div class="container">
                            <h1><?= the_field('about_title'); ?></h1>
                            <?= the_field('about_subtitle'); ?>
                        </div>
                        <img src="<?= get_field('about_image_bg')['url']; ?>">
                    </div>
                    <div class="how-started">
                        <div class="left">
                            <h1><?= the_field('how_started'); ?></h1>
                            <?= the_field('started_subtitle'); ?>
                        </div>
                        <div class="right">
                            <img src="<?= get_field('about_image2')['url']; ?>">
                        </div>
                    </div>
                    <div class="overview">
                        <h1><?= the_field('overview_title'); ?></h1>
                        <?= the_field('overview_subtitle'); ?>
                    </div>
                </div>
            </section>
        </main>

    </div>
</div>
<?php
get_footer();
// include 'bootscore-child-main/footer.php'; 
?>