<?php
/*
	Template Name: Página Inicial
*/
?>
<?php get_header();?>
 
  <div class="container" style="margin-top: 55px;">
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
                <div class="col-md-12" style="background-image: url('<?php echo the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-size: cover; width:100%; height: 550px; padding:0px; border-radius: 5px 5px 5px 5px; display:inline-block;">
                      <!--<img src="<?php //echo the_post_thumbnail_url();?>" alt="" width="100%"/> -->
                     <div style="width: 60%; margin-top: 225px; margin-left: 50px;">                       
                        <h4 style="background: ; opacity: 0.1; padding: 5px 2px 15px 2px; text-align: left; font: normal bold 40px; letter-spacing: 0px; color: #B50D0D; opacity: 1;"><?php the_title(); ?></h4>                    
                        <h6 style="background: ; opacity: 0.1; padding: 0px 2px 5px 2px; text-align: left; font: normal bold 40px; letter-spacing: 0px; color: #303030;; opacity: 1;"><?php the_content(); ?>                       
                        <a href="<?php echo get_page_link();?>">
                          <button type="button" class="btn btn-primary" style="font: normal bold Segoe Ui; font-size: 20px; text-align: center; letter-spacing: 0px; color: #fffff0; background: #0C4E80 0% 0% no-repeat padding-box; opacity: 1;">Leia mais</button></h6>
                        </a>                                                              
                     </div>
                </div>
                <?php
                //echo $card;
                $card++;
                if($card == 1){
                  ?>
                    </div>
                    <div class="row" style="margin-left: 20px;">
                  <?php
                  $card = 1;
                }

                    endwhile;
                }                
                ?>
                
            </div>
                
      </div>
			<div class="row">
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
                ?>
				        <div class="col-md-4" style="margin-left: 0px">
                  <div style="width:100%; height:375px; background: #ffffff; border: 1px #cccccc solid; border-radius: 5px 5px 5px 5px; display: inline-block; vertical-align: top;">
					           <div style="width: 100%; display: inline-block;">
						            <img src="<?php echo the_post_thumbnail_url();?>" alt="" style="width: 100%; height: 195px; border-radius: 5px 5px 0px 0px;"/>
					           </div>
					           <div style="width: 100%; height: 40px; border-bottom: 1px #000000 solid;">
							         <h4 style="padding: 5px 0px 0px 0px; text-align: center; font: normal bold 24px Segoe Ui; letter-spacing: 0px; color: #B50D0D; opacity: 1;"><?php the_title(); ?></h4>
					           </div>
                     <div style="width: 100%; height: 94px; border-bottom: 0px #000000 solid;">
                        <h6 style="padding: 5px 5px 5px 10px; text-align: left; font: normal bold 18px Segoe Ui; letter-spacing: 0px; color: #303030; opacity: 1;"><?php the_content(); ?></h6>
                     </div>
                     <div style="height: 25px;">
                      <a href="<?php echo get_page_link();?>">
                        <button type="button" class="btn btn-primary" style="width: 100%; font: normal bold Segoe Ui; font-size: 20px; text-align: center; letter-spacing: 0px; color: #ffffff; background: #0C4E80 0% 0% no-repeat padding-box; opacity: 1;">Leia mais</button>
                      </a>
                     </div>
				          </div>
                </div>
                <?php
                //echo $card;
                $card++;
                if($card == 4){
                  ?>
                    </div>
                    <div class="row" style="margin-left: 20px;">
                  <?php
                  $card = 1;
                }
                    endwhile;
                }    
                ?>
                
            </div>
                <a href="#"><h6 title="Acessar Página Nossos Cursos" style="padding:10px; margin-bottom:20px; font-weight: 400; color: #707070; text-align: right;">Ver mais +</h6></a>
		
    <div class="row" style="background: #332E2E 0% 0% no-repeat padding-box; height: 33px;">
      <div class="col-sm-4 col-md-4 col-xs-8" style="font-style: normal bold 25px; letter-spacing: 0; text-align: center; color: #ffffff;">
        Portal Fiocruz
      </div>
      <div class="col-sm-4 col-md-4 col-xs-8" style="font-style: normal bold 25px; letter-spacing: 0; text-align: center; color: #ffffff;">
        Campus Virtual
      </div>
      <div class="col-sm-4 col-md-4 col-xs-8" style="font-style: normal bold 25px; letter-spacing: 0; text-align: center; color: #ffffff;">
        CPA
      </div>
    </div>

</div>
    </div>
</div>


<!-- data end -->
<!-- /.blog-main -->
<?php get_footer(); ?>