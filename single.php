<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/reflex-utilities.php for info on Reflex_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Reflex
 * @since 		Reflex 1.0.0
 */
?>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main>
  <header>
      <?php if ( has_post_thumbnail() ) { ?>
          <div id="blog-post-header" class="page-header">
          <?php the_post_thumbnail('full', array('class' => 'featured-image')); ?>
          </div>
          <div class="split">
            <div class="container">
              <h1 class="article-title"><?php the_title(); ?></h1>
            </div>
          </div>
        <?php } else { ?>
          <div class="black-row">
            <div class="container">
              <h1 class="article-title"><?php the_title(); ?></h1>
            </div>
          </div>
        <?php } ?>
    </div>
  </header>
  <div class="post-metadata">
    <div class="">
    </div>
  </div>
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
          <p class="article-byline">Written by <?php the_author(); ?><br> Posted on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time></p>
          <?php if ( dynamic_sidebar('Blog Sidebar') ) : else : endif; ?>
      </div>
    </div>
  </section>
  <? if (comments_open()){
    comments_template( '', true );
  } ?>
</main>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>