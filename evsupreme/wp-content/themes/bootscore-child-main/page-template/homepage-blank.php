<?php

/**
 * Template Name: Homepage Blank
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */
include 'bootscore-child-main/header.php';
get_header();
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <main id="main" class="site-main">
      <div class="vid-banner">
        <?php $video = get_field('video'); ?>
        <video id="banner-vid" autoplay muted>
          <source src="<?= $video['url']; ?>" type="video/mp4">
        </video>
      </div>
    </main>

    <section class="part-2">
      <div class="whole-sec">
        <img src="<?= get_field('image_bg')['url']; ?>">
        <div class="title">
          <div class="container">
            <h2><?= the_field('section_title') ?></h2>
            <span><?= the_field('subtitle') ?></span>
          </div>
        </div>
        <div class="info-prod">
          <h2><?= the_field('info_title') ?></h2>
          <div class="numb-prod">
            <?php
            // Get the group field values
            $group_field = get_field('highlight_product_group');

            // Check if the group field exists
            if ($group_field) :
              // Get the repeater field values within the group
              $repeater_rows = $group_field['information_product'];

              // Check if there are rows in the repeater
              if ($repeater_rows) :
                // Loop through each row of the repeater
                foreach ($repeater_rows as $row) :
                  // Access and display sub-fields within the repeater
                  $text_field = $row['title'];
                  $weight_field = $row['weight'];
                  $sub_field = $row['subhead'];
                  // Output your content
                  echo '<div class="weight">';
                  echo '<p>' . esc_html($text_field) . '</p>';
                  echo '<div class="weight-2">';
                  echo '<p>' . esc_html($weight_field) . '</p>';
                  echo '<span>' . esc_html($sub_field) . '</span>';
                  echo '</div>';
                  echo '</div>';
                endforeach;
              endif;
            endif;
            ?>
          </div>
        </div>
        <div class="right">
          <h2><?= the_field('title_desc'); ?></h2>
          <span><?= the_field('sub_desc'); ?></span>
        </div>
        <div class="middle">
          <img src="<?= get_field('product_image')['url'] ?>">
        </div>
        <div class="mes-sage">
          <span><?= get_field('apostrophe'); ?></span>
          <h1><?= the_field('message'); ?></h1>
          <h1 class="green"><?= the_field('other_color'); ?></h1>
        </div>
      </div>
    </section>

    <section class="section-4">
      <div class="content">
        <h1><?= get_field('section4')['section4_title']; ?></h1>
        <?= get_field('section4')['section4_subtitle']; ?>
        <a class="btn-1"><?= get_field('section4')['section4_btn']['title'] ?></a>
      </div>
    </section>

  </div>
</div>
<?php
get_footer();
include 'bootscore-child-main/footer.php'; ?>