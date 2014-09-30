<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<main>

<div id="home-header" class="intro">
  <div class="intro-background">
    <div class="container">
      <div class="grid">

        <section id="intro-text" class="unit-1-2">
          <h1 class="intro-heading">Ideas Worth Watching</h1>
          <p class="intro-location">
            <?php
              $value = get_field('headerText', 87);
              if( $value )
                echo $value;
              else
                echo "error";
            ?>
          </p>
          <a class="button" href="<?php $value=get_field('viewAllTedxTalks', 87); if( $value ) echo $value; else echo 'error'; ?>" >View all TEDxTalks</a>
        </section>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="container">
      <div class="grid">
      <section class="unit-1-2">
        <h3>
          <?php
            $value = get_field('conferenceTitle', 87);
            if( $value )
              echo $value;
            else
              echo "error";

          ?>
        </h3>
        <p>
          <?php
            $value = get_field('conferenceDesc', 87);
            if( $value )
              echo $value;
            else
            {
              echo "error"."<br>";
              /*
              $fields = get_fields(78);
              foreach( $fields as $field_name => $value )
              {
                echo $field_name."<br>";
              }
              */
            }
          ?>
        </p>
      </section>
      <hr class="mobile-separator">
      <section class="unit-1-2">
        <h3>What is TEDx?</h3>
        <p>
          <?php
            $value = get_field('tedxDesc', 87);
            if( $value )
              echo $value;
            else
              echo "error";
          ?>
        </p>
      </section>
    </div>
  </div>
</div>

<div class="gray-row">
  <div class="container">
    <div class="grid">
      <section class="unit-1-2">
        <img src="<?php echo get_template_directory_uri(); ?>/img/headers/city-of-compiegne-top.png">
      </section>
      <section class="unit-1-2">
        <img src="<?php echo get_template_directory_uri(); ?>/img/headers/city-of-compiegne-bottom.png">
      </section>
    </div>
  </div>
</div>

<div class="red-row">
  <div class="container">
    <section id="mailing-list-promo" class="grid">
      <div class="unit-2-3">
        <p class="x-large-text">The latest TEDxUTCompiegne news straight to your email inbox</p>
      </div>
      <div class="unit-1-3">
        <span class="right-align">
          <a href="<?php $value=get_field('subscribeLink', 87); if( $value ) echo $value; else echo 'error'; ?>" target="_blank" class="button">
            Sign Me Up!
          </a>
        </span>
      </div>
    </section>
  </div>
</div>

<div class="black-row">
  <div id="facts" class="row">
    <img src="<?php echo get_template_directory_uri(); ?>/img/headers/numbers.png" style="display:block; margin: 0 auto">
  </div>
</div>

</main>
<?php Reflex_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>