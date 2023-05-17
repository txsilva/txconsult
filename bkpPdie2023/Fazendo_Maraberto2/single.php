<?php
get_header();
?>

<?php if ( have_posts() ) : while (  have_posts() ) : the_post(); ?>
	<div class="container" style="margin-top: 40px;">
		<div style="text-align: left; margin-left: 5%; font-family: 'Titillium Web', Sans-serif; font-weight: 400; color: #54595f; padding-top: 50px;">
			<?php if(function_exists('do_shortcode') && !is_home())
				{
					echo do_shortcode( '[breadcrumb]' );
				}
			?>
		</div>
		<div style="text-align: left; margin-left: 5%; max-width: 800px; padding-top:  20px;">
			<h3 style="color: #54595f; font-size: 40px; font-family: 'Titillium Web', Sans-serif; font-size: 2.5em; font-weight: 800; line-height: 1.5em; letter-spacing: 0px;"><?php the_title(); ?></h3>
			<?php
				// check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) {
					//the_post_thumbnail();
					//the_post_thumbnail('thumbnail');       // Tamanho em miniatura (default 150px x 150px max)
					//the_post_thumbnail('medium');          // Tamanho médio (default 300px x 300px max)
					//the_post_thumbnail('large');           // Tamanho médio algo acima de (default 640px x 640px max)
				} 
			?>
			<!-- <p style="margin: 0; font-family: 'Titillium Web', sans-serif; font-size: 0.8em; font-weight: 300; line-height: 1.5em; color: #54595f; text-align: left; padding-bottom: 50px;"><i class="fas fa-calendar-week"></i> <?php //the_date('F j, Y'); ?> <i class="far fa-clock"  style="padding-left: 10px;"></i></i> <?php //the_time(); ?></p> -->
			<?php the_content(); ?>
		</div>		
			<p style="margin: 0; font-family: 'Titillium Web', sans-serif; font-size: 0.8em; font-weight: 300; line-height: 1.5em; color: #54595f; text-align: left;">
				<!-- <i class="far fa-user-circle"></i> <?php //the_author(); ?> -->
				<i class="fas fa-calendar-week" style="padding-left: 10px;"></i> <?php the_time('Y'); ?> 
				<!-- <i class="far fa-clock"  style="padding-left: 10px;"></i> <?php //the_time( ); ?> -->
			</p>
		<hr>
		
		<!-- INÍCIO ÁREA REDE SOCIAL -->
		<!-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5fd90d8042dfd1001192edef&product=inline-share-buttons" async="async"></script>
		<div class="sharethis-inline-share-buttons"></div> -->
		<!-- FIM ÁREA REDE SOCIAL -->
		<div>
		<br>
		<div class="row">
			<div class="col-md-6">
				<div class="arrowLeft" style="font-family: Titillium Web, Sans-serif; font-size: 1.2em; font-weight: 400; letter-spacing: 0px;">
					<?php previous_post_link('%link', '<p style="text-align: left; color: #7A7A7A; font-size: 17.6px; font-family: \'Titillium Web\', Sans-serif; font-weight: 400;"><img src="https://brasilia.fiocruz.br/maraberto/wp-content/uploads/sites/3/2021/02/next.png"> ANTERIOR</br> <span style="color: #7A7A7A73; margin-left: 20px;">%title</span></p>', TRUE); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="arrowRight">					
					<?php next_post_link('%link', '<p style="text-align: right; color: #7A7A7A; font-size: 17.6px; font-family: \'Titillium Web\', Sans-serif; font-weight: 400;">POSTERIOR <img src="https://brasilia.fiocruz.br/maraberto/wp-content/uploads/sites/3/2021/02/previous.png"><br> <span style="color: #7A7A7A73; margin-left: 20px;">%title</span></p>', TRUE); ?>
				</div>
			</div>
		</div>
		<br>
		<style>
		#comment{width: 100%;}
		#author{width: 100%;}
		#email{width: 100%;}
		#url{width: 100%;}
		#submit{
			width: ;
			background: #818a91;
			color: #ffffff;
			font-size: 20px;
			font-family: "Tauri", Sans-serif;
			border-radius: 62px 62px 62px 62px;
			text-align: center;
			padding-left: 20px;
			padding-top: 10px;
			padding-right: 20px;
			padding-bottom: 10px;
		}
		p label{
			display: block;
			text-align: left;
		}
		</style>
		<?php
	// If comments are open or we have at least one comment, load up the comment template.
 //if ( comments_open() || get_comments_number() ) :
     ?>
	<!-- <div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<center><?php //comments_template(); ?></center>
		</div>
		<div class="col-md-2"></div>
	</div> -->
		<?php
 //endif;
 ?>
 </div>
	</div>
<?php endWhile; else: ?>
	<div class="artigo">
		<h2>Nada Encontrado</h2>
		<p>Erro 4004</p>
		<p>Página não encontrada</p>
	</div>
<?php endif; ?>
<?php
get_footer();