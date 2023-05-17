<?php
get_header();
?>

<?php if ( have_posts() ) : while (  have_posts() ) : the_post(); ?>
	<div class="container" style="margin-top: 50px;">
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
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