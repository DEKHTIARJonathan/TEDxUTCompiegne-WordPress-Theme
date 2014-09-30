<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * Please see /external/reflex-utilities.php for info on Reflex_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Reflex
 * @since 		Reflex 1.0.0
 */
?>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
<main>
  <header id="blog-header" class="page-header">
    <div class="container">
      <h1>News</h1>
    </div>
  </header>
  <section id="content">
  <ol class="article-list">
  <?php while ( have_posts() ) : the_post(); ?>
    <li>
        <a href="<?php esc_url( the_permalink() ); ?>" class="blog-block-link" title="Permalink to <?php the_title(); ?>" rel="bookmark">
        <div class="container">
          <article class="grid blog-post blog-preview">
            <div class="sidebar">
            <h2 class="article-preview-heading"><?php the_title(); ?></h2>
            <p class="article-byline">By <?php the_author(); ?><br><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time></p>
            </div>
            <div class="primary content">
              <?php the_excerpt(); ?>
            </div>
          </article>
          </div>
        </a>
    </li>
  <?php endwhile; ?>
  </ol>
  <?php else: ?>
  <h2>No posts to display</h2>
  <?php endif; ?>
  </section>
</main>

<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>