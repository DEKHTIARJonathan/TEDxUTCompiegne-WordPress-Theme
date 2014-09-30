<?php
/*
 * Template Name: Home
 * @package WordPress
 * @subpackage Reflex
 * @since Reflex 1.0.0
 */
?>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main>
  <header id="home-header" class="page-header">
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </header>
  <section id="content" class="wrapper container">
    <div class="grid">
      <div class="unit-1-2">
        <h2>John Doe</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </section>
  <? if (comments_open()){
    comments_template( '', true );
  } ?>
</main>

<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
