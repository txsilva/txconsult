<?php
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
  <aside class="widget-area" role="complementary" aria-label="Rodapé">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
      <div class="footer-widget-1">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
      </div>
    <?php
    }
    ?>
  </aside>
<?php endif; ?>
