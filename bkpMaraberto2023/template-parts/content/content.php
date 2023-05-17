<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    if ( is_sticky() && is_home() && ! is_paged() ) {
      printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
    }
    if ( is_singular() ) :
      the_title( '<h1 class="entry-title">', '</h1>' );
    else :
      the_title( sprintf( '<h2 class="title main"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
    endif;
    ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
    the_content('Leia mais...', null);

    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
        'after'  => '</div>',
      )
    );
    ?>
  </div>

  <footer class="entry-footer">
  </footer>
</article>
