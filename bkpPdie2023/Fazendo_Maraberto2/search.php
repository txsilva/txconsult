<?php
get_header();

if (have_posts()) : ?>
<div class="container" style="margin-top: 50px;">
<h2>Resultados da busca por: <?php the_search_query(); ?></h2>

<?php
while (have_posts()) : the_post(); ?>
    <article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">
    	<table class="">
			<thead>
			    <tr>
			    	<th>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url();?>" width="180px" height="130px" border-radius: 5px 5px 5px 5px;><?php //the_post_thumbnail('thumbnail'); ?></a>
        </div>
        			</th>
        			<th>
        <h2 style="padding-left: 10px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div style="width: 70%; padding-left: 20px; text-align: left; "><?php the_excerpt(); ?></div>
        			</th>
        		</tr>
        	</thead>
        </table>
    </article>
    <br>

    <?php endwhile;
    else :
        ?>
        <div class="container" style="margin-top: 50px;"><h2>Resultados da busca por:  <?php the_search_query(); ?> </h2>
        <h5>Nenhum post encontrado</h5></div>
        <br>
        <?php
    endif;
get_footer();
?>
</div>