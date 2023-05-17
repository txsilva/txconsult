<?php
get_header();
?>

<section id="primary" class="_container _is-fluid">
<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      get_template_part( 'template-parts/content/content' );
    }
  } else {
    get_template_part( 'template-parts/content/content', 'none' );
  }
?>
</section>

<?php
get_footer();
