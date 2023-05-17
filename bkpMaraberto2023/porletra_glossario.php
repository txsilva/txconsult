<?php /* Template Name: porletra_glossario1
		 Autor: NEAD/EF
		 */ 
		 
		get_header();
?>

<style type="text/css">
		 a:link{
			text-decoration:none;
			color:#4d4242;
		}

		a:visited{
			text-decoration:none;
			color:#897A7A;
		}

		a:hover{
			text-decoration:underline;
			color:#000000;
		}

		a:active{
			text-decoration:none;
			color:#78B8E0;
		}
		</style>
		 
<?php 
// header feito com o Theme Elementor
echo do_shortcode( '[elementor-template id="2434"]' );
echo do_shortcode( '[elementor-template id="36"]' );

// imagem leme da página inicial
echo '<img src="https://brasilia.fiocruz.br/maraberto/wp-content/uploads/sites/3/2020/09/3.png" width="100%" height="508">';
?>
<style>
#custom{
	font-color: #897A7A;
	font-face: Semibold 31px, Segoe UI 41px;
	border-bottom-width: 3px;
	border-left-width: 0px;
	border-top-width: 0px;
	border-right-width: 0px;
	border-style: solid;
	border-bottom-color:#78B8E0;
	box-shadow: 0px 3px 6px #00000029;
}
#letra{
	font-color: #897A7A;
	font-face: Semibold 51px;
	font-size: 18px;
	text-align: center;
	letter-spacing: 0px;
	opacity: 1;
}
</style>
<script>
var chars = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'X', 'Y', 'W', 'Z'];

</script>	
<?php

echo "<div style='margin-left: 10%; margin-rigth: 10%; width: 80%; background: #F4F9FC 0% 0% no-repeat padding-box;
box-shadow: 0px 3px 6px #00000029; opacity: 1; border-radius: 20px 20px 20px 20px;'>";
//get all post IDs for posts beginning with cap ABCD, in title order,
//display posts
$first_char = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'X', 'Y', 'W', 'Z');

$i = 0;

//for($i=0; $i<26; $i++){
//    echo $first_char[$i]. ' ';
//}

echo "<p style='text-align: left; font-face: Open Sans; font-size: 40px; letter-spacing: 0px; color: #54595F; opacity: 1; margin-left: 42px; padding-top: 40px;'>Glossário
		<br><hr width='31px' style='margin-left: 42px; border-bottom-width: 3px; border-left-width: 0px; border-top-width: 0px; border-right-width: 0px; border-style: solid; border-bottom-color:#78B8E0; box-shadow: 0px 3px 6px #00000029;'><br></p>";

echo "<center>";
//for($i=0; $i<26; $i++){
//    echo $first_char[$i]. ' ';
//}
echo "</center>";

echo "<center><div id='letra'></div></center><br>";

$indice = 0;
$letra = '0';
echo '<section class="container">';
for($i=0; $i<26; $i++){
    $postids=$wpdb->get_col($wpdb->prepare("
    SELECT      ID
    FROM        $wpdb->posts
    WHERE       SUBSTR($wpdb->posts.post_title,1,1) = %s
    ORDER BY    $wpdb->posts.post_title",$first_char[$i])); 

if ($postids) {
$args=array(
  'category_name' => 'Glossario',
  'post__in' => $postids,
  'post_type' => 'post',
  'post_status' => 'publish',
  'order' => 'asc',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);

if (( $my_query->have_posts() )) {
		echo '<div class="row"><!-- INICIO NOVA LINHA background: #04B404;-->';
		echo '<div class="col-sm-16 col-md-16 col-xs-16" style="margin-left: 25px;">';
		echo '<script> chars['.$i.'] = "<a href=/maraberto/glossario-por-letra/?letra='.$first_char[$i].' id=custom>'.$first_char[$i].'</a>";</script>';
		if ($first_char[$i] == $_GET['letra']){
			$letra = $first_char[$i];
		echo '<p font-color: #897A7A; font-face: Semibold 31px, Segoe UI 41px; font-size: 18px;>&nbsp;'. $first_char[$i] . '</p><hr width="42px" style="border-bottom-width: 3px; border-left-width: 0px; border-top-width: 0px; border-right-width: 0px; border-style: solid; border-bottom-color:#78B8E0; box-shadow: 0px 3px 6px #00000029;"><br>';
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <p class="col-sm-16 col-md-16 col-xs-16"><a href="/maraberto/glossario-por-letra/?id=<?php the_id(); ?>&letra=<?php echo $first_char[$i]; ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
		<?php
		if($id == $_GET['id']){
			//echo "Mesmo ID". $id ."<br>";
			$titulo = get_the_title();
			//echo get_the_title() ."<br><br>";
			$conteudo = get_the_content();
			//echo get_the_content() ."<br>";
		}
		?></p>
		
        <?php
    endwhile;
	echo '<br></div>';
		}

	echo '<!-- FIM NOVA LINHA --></div>';	
	
	}
	$count = $count + 1;
}
wp_reset_query();  // Restore global post data stomped by the_post().
}

echo '</section>';
echo '<section class="container">';
echo '<hr>';
echo '<center><a href="/maraberto/glossario/">Ver Todos</a></center><br>';
echo '<div class="row" style="background: #FFFFFF 0% 0% no-repeat padding-box; border-radius: 50px; margin-left: 25px; margin-top: 5px; margin-right: 25px; margin-bottom: 10px; padding: 5px;">';
echo '<div class="col-sm-16 col-md-16 col-xs-16" style="text-align: left; font-face: Open Sans; font-size: 40px; letter-spacing: 0px; color: #54595F; opacity: 1; margin-left: 42px; padding-top: 40px;">'. $titulo .'</div>';
echo '<div class="col-sm-16 col-md-16 col-xs-16">'. $conteudo .'</div>';
if ($letra == '0'){
	echo '<p>Nada foi selecionado. <br>Clique&nbsp;<a href="/maraberto/glossario/"><b><u>aqui</u></b></a>&nbsp;e retorne para a seleção de verbetes.</p>';
}
echo '<br></div>';
echo "<br><br></div></div>";

// Rodapé feito com o Theme Elementor
echo do_shortcode( '[elementor-template id="38"]' );
echo do_shortcode( '[elementor-template id="2436"]' );
?>

<script>
document.getElementById("letra").innerHTML = chars[0] + ' ' + chars[1] + ' ' + chars[2] + ' ' + chars[3] + ' ' + chars[4] + ' ' + chars[5] + ' ' + chars[6] + ' ' + ' ' + chars[7] + ' ' + chars[8] + ' ' + chars[9] + ' ' + chars[10] + ' ' + chars[11] + ' ' + chars[12] + ' ' + chars[13] + ' ' + chars[14] + ' ' + chars[15] + ' ' + chars[16] + ' ' + chars[17] + ' ' + chars[18] + ' ' + chars[19] + ' ' + chars[20] + ' ' + chars[21] + ' ' + chars[22] + ' ' + chars[23] + ' ' + chars[24] + ' ' + chars[25];
</script>

            </div>
		</div>

<?php get_footer(); ?>