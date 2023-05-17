<?php
// get_header();
wp_head();
?>

<section id="primary" class="_container _is-fluid">
<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      get_template_part( 'template-parts/content/content' );
    }
  }
?>
</section>

<?php
//get_footer();
wp_footer();
