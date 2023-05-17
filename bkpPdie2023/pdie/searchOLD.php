<?php get_header(); ?>
<div class="conteudo">
	<div class="container">

		<?php if (is_search()) { 
			//echo 'Mostrando resultados';
			?>
			<?php while ( have_posts() ) : the_post() ?>
			<div class="row">
				<div class="col-sm-4 col-md-4 col-xs-8">
					<div id="post-<?php the_ID(); ?>"  >
						<a href="<?php echo get_page_link();?>"><img src="<?php echo the_post_thumbnail_url();?>" width="200px">
					</div>
		           <div class="col-sm-4 col-md-12 col-xs-8" style="background: #000; width: 600px; border-bottom: 1px solid #ddd;">
		           	<h1 class="entry-title">
		           		<?php the_title(); ?></h1></a>
		               	<?php the_content(); ?>
		           </div>
		           <div class="entry-content">
		      			<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'seu-template' ) . '&after=</div>') ?>
		      			<?php edit_post_link( __( 'Edit', 'seu-template' ), '<span class="edit-link">', '</span>' ) ?>
		           	</div><!– .entry-content –>
	        	</div><!– #post-<?php the_ID(); ?> –> 
			</div>
	      <?php endwhile; ?>
	      <?php
		}?>

	</div>
</div>
<?php get_footer(); ?>