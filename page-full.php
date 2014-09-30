<?php
/*
 * Template Name: Full Width
 * @package WordPress
 * @subpackage Reflex
 * @since Reflex 1.0.0
 */
?>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main>
  <header id="black-header" class="page-header">
    <div class="container">
      <h1><?php the_title(); ?></h1> 
    </div>
  </header>
  <section id="content" class="wrapper container">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
  </section>
  <? if (comments_open()){
    comments_template( '', true );
  } ?>
</main>

<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>