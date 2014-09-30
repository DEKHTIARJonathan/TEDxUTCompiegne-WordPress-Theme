<?php
/*
 * Template Name: Contact
 * @package WordPress
 * @subpackage Reflex
 * @since Reflex 1.0.0
 */
?>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main>
  <header id="about-header" class="page-header">
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </header>
  <section id="content" class="wrapper container">
    <div class="grid">
      <div class="primary">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article class="blog-post">
          <div class="content">
            <?php the_content(); ?>
          </div>
        	<?php if ( get_the_author_meta( 'description' ) ) : ?>
        	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
        	<h3>About <?php echo get_the_author() ; ?></h3>
        	<?php the_author_meta( 'description' ); ?>
        	<?php endif; ?>
          </article>
          <?php endwhile; ?>
      </div>
      <div class="sidebar">
        <h4>Other ways to find us</h4>
        <div class="flexible-container">
          <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9717.317081218653!2d-1.912774!3d52.491279!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbfcbb18a54a074eb!2sGet+You+Seen!5e0!3m2!1sen!2suk!4v1393696431414"></iframe>
        </div>         
      </div>
    </div>
  </section>
  <? if (comments_open()){
    comments_template( '', true );
  } ?>
</main>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>