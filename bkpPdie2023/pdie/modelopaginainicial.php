<?php
/*
	Template Name: Página Inicial
*/
?>
<?php get_header();?>
 

<style>
.espaco-texto{
	width: 60%;
	margin-top: 220px;
	margin-left: 100px;
}
.titulo-banner{
	opacity: 0.1;
	padding: 5px 2px 15px 2px;
	text-align: left;
	font-size: 40px;
	letter-spacing: 0px;
	color: #B50D0D;
	opacity: 1;
}
.texto-banner{
	opacity: 0.1;
	padding: 0px 2px 5px 2px;
	margin-top:  10px;
	text-align: left;
	font-size: 15px;
	letter-spacing: 0px;
	color: #303030;
	opacity: 1;
}
@media only screen and (min-width: 768px) {
           .menorque {
                margin-top: 10px;
            }
}

@media only screen and (max-width: 767px) {
           .menorque {
                margin-top: 10px;
            }
}
@media only screen and (max-width: 521px) {
			.titulo-banner{
				font-size: 35px;
			}
           .texto-banner {
			   margin-top: 5px;
                font-size: 14px;
            }
}
@media only screen and (max-width: 475px) {
			.espaco-texto{
				margin-top: 100px;
			}
			.titulo-banner{
				font-size: 32px;
			}
           .texto-banner {
			   margin-top: 5px;
			   padding: 0px 2px 0px 2px;
               font-size: 14px;
            }
}
@media only screen and (max-width: 475px) {
			.espaco-texto{
				margin-top: 100px;
			}
			.titulo-banner{
				font-size: 30px;
			}
           .texto-banner {
			   margin-top: 5px;
			   padding: 0px 2px 0px 2px;
               font-size: 14px;
            }
}
@media only screen and (max-width: 392px) {
			.espaco-texto{
				margin-top: 100px;
			}
			.titulo-banner{
				font-size: 28px;
			}
           .texto-banner {
			   margin-top: 0px;
               font-size: 14px;
            }
}
</style>


  <div class="container menorque">
          <!-- CURSOS //Category => 'Cursos EAD'
          <div class="row"> -->
			<div>
        <div class="row">
                  <?php
                  //'category_name' => 'Cursos EAD',
                  $args2 = array(
                'category_name' => 'banner-destaque',
                'post_type' => 'post',
                'posts_per_page' => 1
                );
                $query2 = new WP_Query( $args2 );
                $card = 1;
                $count = 0;

                if ( $query2->have_posts() ) {
                    while ( $query2->have_posts() ) : $query2->the_post();
                      $count++;              
                ?>
                <div class="col-md-15 col-sm-15 col-xs-15" style="background-image: url('<?php echo the_post_thumbnail_url();?>'); background-size:  100%; background-repeat: no-repeat; background-size: cover; width:100%; height: 550px; padding:0px; border-radius: 5px 5px 5px 5px; display:inline-block;">
                    <div class="espaco-texto">                       
                        <h1 class="titulo-banner"><?php the_title(); ?></h1>
                        <?php 
                          $_the_excerpt = get_the_excerpt();
                          $the_excerpt = mb_substr( $_the_excerpt, 0, 300, 'UTF-8');
                        ?>
                        <h6 class="texto-banner"><?php if(strlen($_the_excerpt) > 300){ echo $the_excerpt. '...'; }else{ echo $the_excerpt; } ?>
                        </h6>
						<div style="width: 60%; margin-top: 30px; margin-left: 0px; ">
							<a href="<?php echo get_page_link();?>">
							<button type="button" class="btn btn-primary" style="font: normal bold Segoe Ui; font-size: 19px; text-align: center; letter-spacing: 0px; color: #fffff0; background: #0C4E80 0% 0% no-repeat padding-box; opacity: 1;">Leia mais</button>
							</a>                                                              
						</div>
					</div>
				</div>
                <?php
                //echo $card;
                $card++;
                

                    endwhile;
                }                
                ?>
                
            
                
      </div>
	  <style>
			#titulo-noticia h4{ 
				color: #4D4D4D; 
				padding-top: 0px;
				width: 100%;
				height: 40px;
				padding: 5px 0px 0px 0px;
				text-align: center;
				font: normal bold 24px Segoe Ui;
				letter-spacing: 0px;
				color: #B50D0D;
				opacity: 1;
			}
			#texto h6{
				padding: 5px 5px 5px 10px;
				text-align: left;
				font: normal bold 17px Segoe Ui;
				letter-spacing: 0px;
				color: #303030;
				opacity: 1;
				width: 100%;
				height: 94px;
				border-bottom: 0px #000000 solid;
			}	
			#botao{
				width: 100%;
				font: normal bold Segoe Ui;				
				font-size: 19px;
				text-align: center;
				letter-spacing: 0px;
				color: #ffffff;
				background: #0C4E80 0% 0% no-repeat padding-box; opacity: 1;
			}
			#vermais{
				padding: 10px;
				margin-top: 45px;
				margin-bottom: 10px;
				font-weight: 600;
				color: #707070;
				text-align: right;
			}
			@media only screen and (max-width: 991px) {
				#titulo-noticia h4{ 
				color: #4D4D4D; 
				padding-top: 0px;
				width: 100%;
				height: 38px;
				padding: 5px 0px 0px 0px;
				text-align: center;
				font: normal bold 23px Segoe Ui;
				letter-spacing: 0px;
				color: #B50D0D;
				opacity: 1;
			}
				
				#texto h6{
				padding: 20px 5px 5px 10px;
				text-align: left;
				font: normal bold 15px Segoe Ui;
				letter-spacing: 0px;
				color: #303030;
				opacity: 1;
				width: 100%;
				height: 94px;
				border-bottom: 0px #000000 solid;
			}
				
				#botao{
				width: 100%;
				font: normal bold Segoe Ui;
				font-size: 17px;
				text-align: center;
				letter-spacing: 0px;
				color: #ffffff;
				background: #0C4E80 0% 0% no-repeat padding-box; opacity: 1;
			}
				#vermais{
				margin-top: 20px;
				margin-bottom: 10px;
			}
			
			.card1{
				position: relative;
				margin-left: 0px;
				margin-top: 5px;
				margin-bottom: 30px;
			}
				
			.card2{
				position: relative;
				margin-left: 0px;
				margin-top: 5px;
				margin-bottom: 25px;
			}
			}
			@media only screen and (max-width: 767px) {
				#titulo-noticia h4{ 
				color: #4D4D4D; 
				padding-top: 0px;
				width: 100%;
				height: 40px;
				padding: 5px 0px 0px 0px;
				text-align: center;
				font: normal bold 24px Segoe Ui;
				letter-spacing: 0px;
				color: #B50D0D;
				opacity: 1;
			}
				
				.card1{
					position: relative;
					margin-left: 0px;
					margin-top: 15px;
					margin-bottom: 40px;
				}
				
				.card2{
					position: relative;
					margin-left: 0px;
					margin-top: 5px;
					margin-bottom: 40px;
				}
			}
			</style>
			<div class="row" style="position: relative; top: 10px;">
                  <?php
                  //'category_name' => 'Cursos EAD',
                  $args2 = array(
             		'category_name' => 'noticia',
             		'post_type' => 'post',
                'posts_per_page' => 3
            		);
            		$query2 = new WP_Query( $args2 );
                $card = 1;
                $count = 0;

            		if ( $query2->have_posts() ) {
                		while ( $query2->have_posts() ) : $query2->the_post();
                      $count++;							
                
                if($count == 1){
                  ?>
				<div class="col-md-4 col-sm-16 col-xs-16 card1">
					<div style="background: #ffffff;  display: inline-block; vertical-align: top;">
					    <div style="width: 100%; display: inline-block;">
					        <img src="<?php echo the_post_thumbnail_url();?>" alt="" style="width: 100%; height: 195px;"/>
					    </div>
					    <div id="titulo-noticia">
					        <h4><?php the_title(); ?></h4>
					    </div>
						<div id="texto">
							<?php 
								$_the_excerpt = get_the_excerpt();
								$the_excerpt = mb_substr( $_the_excerpt, 0, 80, 'UTF-8');
							?>
							<h6><?php if(strlen($_the_excerpt) < 80){ echo $the_excerpt;}else{ echo $the_excerpt."...";} ?></h6>
						</div>
						<div style="height: 25px; padding-top: 20px;">
							<a href="<?php echo get_page_link();?>">
								<button type="button" class="btn btn-primary" id="botao">Leia mais</button>
							</a>
						</div>
				    </div>
                </div>
              
                <?php
                }
                if(($count == 2) || ($count == 3)){
                  ?>

                <div class="col-md-4 col-sm-16 col-xs-16 card2">
                  <div style="background: #ffffff;  display: inline-block; vertical-align: top;">
                     <div style="width: 100%; display: inline-block;">
					        <img src="<?php echo the_post_thumbnail_url();?>" alt="" style="width: 100%; height: 195px;"/>
					    </div>
					    <div id="titulo-noticia">
					        <h4><?php the_title(); ?></h4>
					    </div>
						<div id="texto">
							<?php 
								$_the_excerpt = get_the_excerpt();
								$the_excerpt = mb_substr( $_the_excerpt, 0, 80, 'UTF-8');
							?>
							<h6><?php if(strlen($_the_excerpt) < 80){ echo $the_excerpt;}else{ echo $the_excerpt."...";} ?></h6>
						</div>
						<div style="height: 25px; padding-top: 20px;">
							<a href="<?php echo get_page_link();?>">
								<button type="button" class="btn btn-primary" id="botao">Leia mais</button>
							</a>
						</div>
                  </div>
                </div>

                <?php
                }

                //echo $card;
                $card++;
                if($card == 4){
                  ?>
                    </div>
                    <div class="row" style="margin-left: -15px;">
                  <?php
                  $card = 1;
                }
                    endwhile;
                }    
                ?>
                
            </div>
                <a href="#"><h6 id="vermais" title="Acessar página ver mais">Ver mais <i class="far fa-plus-square"></i></h6></a>

    <style>
      .rw a:visited, a.linkfooter:link {text-decoration: none; color: #CCCCCC;}
      .rw a:link { color: #CCCCCC; }
      .rw a:hover {text-decoration: none; color: #FFFFCC;}
	  .barra_widgets { background: #332E2E 0% 0% no-repeat padding-box; height: 35px; padding: 5px; }
	  @media only screen and (max-width: 767px) {
			.rw a {
				font-size: 17px;
			}
		}
	  @media only screen and (max-width: 575px) {
           .barra_widgets {
                height: 80px;
            }
		}
    </style>

    <div class="row barra_widgets">
      <div class="col-sm-4 col-md-4 col-xs-8 rw" style="font-style: normal bold 25px; letter-spacing: 0; text-align: center; color: #ffffff;">
        <?php if ( dynamic_sidebar('barra_widgets4') ) : else : endif; ?>
      </div>
      <div class="col-sm-4 col-md-4 col-xs-8 rw" style="font-style: normal bold 25px; letter-spacing: 0; text-align: center; color: #ffffff;">
        <?php if ( dynamic_sidebar('barra_widgets5') ) : else : endif; ?>
      </div>
      <div class="col-sm-4 col-md-4 col-xs-8 rw" style="font-style: normal bold 25px; letter-spacing: 0; text-align: center; color: #ffffff;">
        <?php if ( dynamic_sidebar('barra_widgets6') ) : else : endif; ?>
      </div>
    </div>

</div>
    </div>
</div>


<!-- data end -->
<!-- /.blog-main -->
<?php get_footer(); ?>