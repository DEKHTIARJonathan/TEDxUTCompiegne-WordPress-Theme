<?php
/*
 * Template Name: Videos
 * @package WordPress
 * @subpackage Reflex
 * @since Reflex 1.0.0
 */
?>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main>
  <header id="talks-header" class="page-header">
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </header>
  <section id="content" class="wrapper container">
    <?php

    // args
    $args = array(
      'numberposts' => -1,
      'post_type' => 'tedxtalks'
    );

    // get results
    $the_query = new WP_Query( $args );

    // The Loop
    ?>
    <?php if( $the_query->have_posts() ): ?>
      <?php $i=0; ?>
      <div class="tedtalks">
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php $i++; ?>
        <div class="tedtalk">
          <?php the_content(); ?>
          <h3>
            <?php the_title(); ?>
          </h3>
          <p class="speaker"><?php echo get_field('speaker'); ?></p>
          <?php the_excerpt(); ?>
        </div>
      <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
  </section>
  <? if (comments_open()){
    comments_template( '', true );
  } ?>
</main>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>