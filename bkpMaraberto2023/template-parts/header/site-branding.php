<div class="site-branding has-text-centered">
<?php if ( has_custom_logo() ) : ?>
  <div class="site-logo"><?php the_custom_logo(); ?></div>
<?php endif; ?>

<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
  <nav class="main-menu navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <button class="button navbar-burger" data-target="primary-menu">
          <span></span>
          <span></span>
          <span></span>
      </button>
    </div>

<?php
wp_nav_menu([
  'theme_location' => 'menu-1',
  'depth'             => 2,
  'container'         => false,
  'menu_class'        => 'navbar-menu-main',
  'menu_id'           => 'primary-menu',
  'after'             => '',
  'items_wrap'        => '<div id="%1$s" class="navbar-start %2$s">%3$s</div>',
  'walker'            => new Navwalker()
]);
?>
  </nav>
<?php endif; ?>

  <div class="banner"></div>
</div>
