<?php /* Template Name: lista_curso
		 Autor: NEAD/EGF
		 */ 
		 
		get_header();
		
		// header feito o Theme Elementor
		echo do_shortcode( '[elementor-template id="2434"]' );
		echo do_shortcode( '[elementor-template id="36"]' );
		// imagem leme da página inicial
echo '<img src="https://maraberto.brasilia.fiocruz.br/wp-content/uploads/2019/08/3.png" width="100%" height="508">';

?>

<?php
$limit = $_GET['limit'];
if($limit == null) $limit = 0;
$text = $_GET['s'];
$start_date = $_GET['filter-start_date'];
$end_date = $_GET['filter-end_date'];

$type = "default";
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$itens_por_pagina = 10;
$pagina = intval($_GET['pagina']);
?>

<p style="font: 36px Montserrat; padding: 10px; letter-spacing: 0.65px; color: #222222;">LISTA</p>

<div style="background-image: url('https://brasilia.fiocruz.br/multisite/wp-content/themes/maraberto/SVG/fundo.svg');">
<!-- <div style="background-image: url('http://localhost/maraberto/wp-content/themes/maraberto/SVG/fundo.svg');"> -->

<?php	
	include($_SERVER['DOCUMENT_ROOT'].'\maraberto\wp-config.php');
	
	require_once('crud/funcoes.php');
	
	$link = DBConnect();
	$select = mysqli_query($link, "SELECT mapeamento_id, endereco, oferta, tema, responsavel FROM wp_3_mapeamento LIMIT  $limit, $itens_por_pagina") or die(mysqli_error($link));
	$row = mysqli_num_rows($select);

	$select_total = mysqli_query($link, "SELECT mapeamento_id, endereco, oferta, tema, responsavel FROM wp_3_mapeamento") or die(mysqli_error($link));
	$row_total = mysqli_num_rows($select_total);

	$num_paginas = (ceil($row_total/$itens_por_pagina)-1);
	//echo $num_paginas;

//SELECT * FROM marabertlive_mapeamento where endereco is null or oferta is null or tema is null or tipo_oferta is null or responsavel is null or area_tecnica is null or carga_horaria is null or publico_alvo is null or temporalidade is null or mediacao is null
//SELECT * FROM marabertlive_mapeamento where endereco=null or oferta-null or tema=null or tipo_oferta=null or responsavel=null or area_tecnica=null or carga_horaria=null or publico_alvo=null or temporalidade=null or mediacao=null
//SELECT * FROM marabertlive_mapeamento where endereco LIKE '%;%' or oferta LIKE '%;%' or tema LIKE '%;%' or tipo_oferta LIKE '%;%' or responsavel LIKE '%;%' or area_tecnica LIKE '%;%' or carga_horaria LIKE '%;%' or publico_alvo LIKE '%;%' or temporalidade LIKE '%;%' or mediacao LIKE '%;%'
//SELECT DISTINCT area_tecnica FROM marabertlive_mapeamento
//SELECT DISTINCT responsavel FROM marabertlive_mapeamento ORDER BY responsavel ASC
//SELECT * FROM marabertlive_mapeamento where carga_horaria=0 and mapeamento_id>=326
//SELECT * FROM marabertlive_mapeamento where endereco LIKE '%;%'

//echo "<pre>";
//print_r($select);

$tam = 0;
$cor = 0;
echo '<div style="width: 80%; border-width: 1px; border-style: solid; border-color: #FAFAFA; background: #FAFAFA; padding: 10px; margin: 5px; margin-left: 10%;\">';
echo "<p style=\"font: 24px Montserrat; letter-spacing: 2px; color: #888888;\"><img src=\"https://brasilia.fiocruz.br/multisite/wp-content/themes/maraberto/SVG/notes.svg\" width=\"25px\" height=\"25px\"> Cursos</p>";

if($row > 0){
		echo "<center><p style=\"font: 18px Montserrat; letter-spacing: 1.3px; margin-bottom: 10px;\">Esses são os resultados encontrados os critérios selecionados.</p></center>";
	}else{
		echo "<center><pstyle=\"font: 18px Montserrat; letter-spacing: 1.3px; color: #BA0505;\">Nenhum resultado encontrado com estes critérios.</p></center>";
	}
	
while ($linha = mysqli_fetch_array($select)){
		echo '<hr>';
		echo "<p style=\"font: 18px Wavehaus; letter-spacing: 1.4px; color: #222222;\">Número Identificador: ".$linha['mapeamento_id']."</br></br>";		
		echo "&nbsp;&nbsp;&nbsp;&nbsp;".$linha['oferta'] ."</br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;Tema: ".$linha['tema']."</br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;Responsável: ". $linha['responsavel'] ."</p>";
		echo "<p style=\"position: relative; left: 90%;\"><a href=\"/maraberto/atualiza-curso/?id=". $linha['mapeamento_id']."\" \"><img src=\"https://brasilia.fiocruz.br/multisite/wp-content/themes/maraberto/SVG/Icon feather-edit.svg\" width=\"20px\" height=\"20px\"></a></p></br>";
	$tam++;
}

DBclose($link);
if($tam > 0){
	echo "No total são ". $row_total ." cursos - ";
	echo "carregados do ". $limit ." ao ". ($limit+$tam) ." nesta página.</br></br>";
}

$qtd = 0;
?>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="maraberto/lista-de-cursos/?pagina=0&&limite=0">Início</a></li>
	<?php for($i=0;$i<$num_paginas;$i++){ 
		$estilo = "";
		if($pagina-1 == $i){
			$estilo = "active";
			//echo "Página: ". $pagina ."</br>";
		}
		$diferenca = ($pagina - $i);
		if(($diferenca > 0) && ($diferenca <= 4)){
			?>
			<li class="page-item <?php echo $estilo; ?>"><a class="page-link" href="maraberto/lista-de-cursos/?pagina=<?php echo $i+1; ?>&&limit=<?php echo ($i+1)*10; ?>"><?php echo $i+1; ?></a></li>
			<?php
		}
		
		if((($diferenca) == 0)){
			?>
			<li class="page-item <?php echo $estilo; ?>"><a class="page-link" href="maraberto/lista-de-cursos/?pagina=<?php echo $i+1; ?>&&limit=<?php echo ($i+1)*10; ?>"><?php echo $i+1; ?></a></li>
			<?php
		}
		
		if(($diferenca < 0) && ($diferenca >= -2)){
			?>
			<li class="page-item <?php echo $estilo; ?>"><a class="page-link" href="maraberto/lista-de-cursos/?pagina=<?php echo $i+1; ?>&&limit=<?php echo ($i+1)*10; ?>"><?php echo $i+1; ?></a></li>
			<?php
		}
		$qtd = $qtd+1;
	?>
    
	<?php } ?>
    <li class="page-item"><a class="page-link" href="maraberto/lista-de-cursos/?pagina=<?php echo $num_paginas; ?>&&limit=<?php echo $num_paginas*10; ?>">Final</a></li>
  </ul>
</nav>

</div>

<?php get_footer(); ?>