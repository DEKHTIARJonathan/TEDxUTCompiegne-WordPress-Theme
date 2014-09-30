<?php
/*
 * Template Name: Event
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
  <div class="post-metadata">
    <div class="">
    </div>
  </div>
  <section id="content" class="wrapper container">
    <div class="grid">
      <div class="unit-full"><p class="large-text">Our next TEDxGlasgow event takes place on Sunday June 8th at The Royal Conservatoire of Scotland and our theme for the day will be ‘The Common Wealth.’</p></div>

      <div class="unit-1-2">
      <p>A word play on this summer’s sporting event, the theme will see over 10 speakers share their wealth of knowledge and experience on a wide variety of subjects; all of which we hope will inspire those attending the event to make positive changes within their own communities and businesses and create a common wealth in Glasgow.</p>

      <p>In keeping with the TED mantra, ‘ideas worth spreading’, the event will also offer TEDxGlasgow labs; workshops that individuals can attend to discuss in smaller groups issues that affect our city. Engaging and thought provoking, these labs will occur throughout the day, during speaker breaks, so that your mind can always be active and engaged throughout our 8-hour event.</p>
      </div>

      <div class="unit-1-2">
      <p>No TEDx event would be complete though without entertainment, so we’ve made our way through impressive applications to select a wide variety of artists and performers who will put on a great show throughout the day. From a variety of professional, volunteer and community backgrounds, these entertainers have been chosen with our theme in mind and will enhance your experience of this one-day event.</p>

      <p>The event would not be possible without the volunteers who have worked tirelessly and the partners who have offered us support through not just funds, but through time and resources. Being a not-for-profit event, the support of our volunteers and partners is absolutely essential and very much appreciated.</p>
      </div>
      </div>
      <div class="sidebar">
      </div>
    </div>
  </section>
  <? if (comments_open()){
    comments_template( '', true );
  } ?>
</main>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>