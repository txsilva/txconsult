<?php
get_header();

if (have_posts()) : ?>
<div class="container" style="margin-top: 50px;">
<h2 style="font-family: Segoe Ui; font-weight: bold; letter-spacing: 0px; text-align: left; color: #1C1717; opacity: 1;">Resultados da busca por: <?php the_search_query(); ?></h2>

<?php
while (have_posts()) : the_post(); ?>
    <div class="row" style="margin-left: 0px;">
		<div class="col-md-4 col-sm-15 col-xs-15" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; margin-top: 10px; margin-right: 5px; border-radius: 10px 10px 10px 10px;">
							<div style="width:100%; height:270px; display:inline-block; vertical-align: top;">
							</div>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-15" style="padding: 5px; display: inline;">
					<h4 style="text-align: left; font: normal normal bold 28px Open Sans; letter-spacing: 0px; color: #B50D0D; opacity: 1;"><?php echo the_title(); ?></h4>
						<?php 
                        	$_the_excerpt = get_the_excerpt();
                        	$the_excerpt = mb_substr( $_the_excerpt, 0, 400, 'UTF-8');
                        ?>
						<p style="text-align: left; font-family: Open Sans; font-size: 14px; color: #7D7D7D;">por: <span style="color: #7A0803; font-size: 14px; font-weight: bold;"><?php the_author() ?></span></p>
						<p style=" text-align: left; font-family: Open Sans; font-size: 14px; color: #7D7D7D;"><?php echo $the_excerpt; ?></p>
						<div width="100%" height="50px">
							<a href="<?php echo get_page_link();?>" style="position:  absolute; right:  0px; font: normal normal 600 14px Open Sans; letter-spacing: 0px; color: #7A0803; opacity: 1; margin-right: 20px;">
								VER MAIS <i class="fas fa-arrow-right"></i>
								</a>
						</div>
						<br><br>
        		</div>
			</div>
	<!-- <article class="post <?php //if ( has_post_thumbnail() ) { ?>has-thumbnail <?php //} ?>">
    	<table class="">
			<thead>
			    <tr>
			    	<th>
        <div class="post-thumbnail">
            <a href="<?php //the_permalink(); ?>"><img src="<?php //echo the_post_thumbnail_url();?>" width="180px" height="130px" border-radius: 5px 5px 5px 5px;><?php //the_post_thumbnail('thumbnail'); ?></a>
        </div>
        			</th>
        			<th>
        <h2 style="padding-left: 10px;"><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h2>
        <div style="width: 70%; padding-left: 20px; text-align: left; "><?php //the_excerpt(); ?></div>
        			</th>
        		</tr>
        	</thead>
        </table>
    </article> -->
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