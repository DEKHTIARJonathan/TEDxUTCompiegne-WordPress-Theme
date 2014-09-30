<header role="banner">
  <div class="container">
  	<a href="<?php echo home_url(); ?>" id="brand">
      <img src="<?php bloginfo('template_directory');?>/img/logo.jpg" src="<?php bloginfo( 'name' ); ?>" class="logo" height="68">
    </a>
    <?php
      wp_nav_menu( array(
      'theme_location' => 'primary',
      'menu'            => '',
      'container'       => 'nav',
      'container_class' => 'menu-primary-navigation-container nav-collapse nav-collapse-0 closed',
      'container_id'    => 'primary-navigation',
      'menu_class'      => '',
      'menu_id'         => 'menu-primary-navigation',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'           => 0,
      'walker'          => ''
      )
    ); 
  ?>
  </div>
</header>
