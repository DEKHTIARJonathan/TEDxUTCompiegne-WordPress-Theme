<?php
/*
 * Template Name: About
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
<blockquote id="about-quote">
  <p>&ldquo;TEDxGlasgow is a catalyst and convenor of ideas worth doing that will have both a local and global impact.</p>
  <p>Our aspirations are for the people of Scotland, to showcase and support their innovative work and to bring fresh perspectives from around the world which will make our country a better place now and for generations to come.</p>
  <p>We can only achieve this with the collaboration, guidance and support of key partners, volunteers and the leaders of our society and we welcome you to join this call for action. If we do not do this who will?&rdquo;</p>
  <footer>
  <cite>Gurjit Singh Lalli, TEDxGlasgow Curator</cite>
  </footer>
</blockquote>          
      </div>
    </div>
  </section>
  <? if (comments_open()){
    comments_template( '', true );
  } ?>
</main>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>