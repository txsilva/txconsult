<?php /* Template Name: atualizar_curso
		 Autor: NEAD/EGF
		 */ 
		 
		get_header();

		// header feito o Theme Elementor
		echo do_shortcode( '[elementor-template id="2434"]' );
		echo do_shortcode( '[elementor-template id="36"]' );
		// imagem leme da página inicial
echo '<img src="https://maraberto.brasilia.fiocruz.br/wp-content/uploads/2019/08/3.png" width="100%" height="508">';

		//echo $_GET['id'];

		include($_SERVER['DOCUMENT_ROOT'].'\maraberto\wp-config.php');
	
		require_once('crud/funcoes.php');
	
		$link = DBConnect();
		$select = mysqli_query($link, "SELECT mapeamento_id, endereco, oferta, tema, tipo_oferta, responsavel, area_tecnica, carga_horaria, publico_alvo, temporalidade, mediacao FROM wp_3_mapeamento WHERE mapeamento_id=".$_GET['id']." ORDER BY oferta ASC") or die(mysqli_error($link));
		
		while ($linha = mysqli_fetch_array($select)){
			/*
			echo '<div style="width: 80%; border-width: 1px; border-style: solid; border-color: #E0FFFF; background: #F0FFF0; padding: 10px; margin: 5px; margin-left: 10%;\">';
			echo "Número Identificador: ".$linha['mapeamento_id']."</br>";
			echo $linha['oferta'] ."</br>";
			echo $linha['tema'] ."</br>";
			echo "Responsável: ". $linha['responsavel'] ."</br>";
			echo "</div>";
			*/
			$id = $linha['mapeamento_id'];
			$endereco = $linha['endereco'];
			$oferta = $linha['oferta'];
			$tema = $linha['tema'];
			$tipo_oferta = $linha['tipo_oferta'];
			$responsavel = $linha['responsavel'];
			$area_tecnica = $linha['area_tecnica'];
			$carga_horaria = $linha['carga_horaria'];
			$publico_alvo = $linha['publico_alvo'];
			$temporalidade = $linha['temporalidade'];
			$mediacao = $linha['mediacao'];
		}
		
		
?>
<p style="font: 36px Montserrat; padding: 30px; letter-spacing: 0.65px; color: #222222;">Dados para edição</p>
<!-- <div style="background-image: url('https://brasilia.fiocruz.br/multisite/wp-content/themes/maraberto/SVG/fundo.svg');"> -->
	<div style="background-image: url('http://localhost/maraberto/wp-content/themes/maraberto/SVG/fundo.svg');">

<div class="container" style="background: #FAFAFA; box-shadow: 0px 3px 6px #0000001A; border-radius: 10px; padding: 30px;">
<form method="get">
<div class="form-group">
<p style="font: 20px Montserrat; letter-spacing: 0.33px; color: #222222; padding: 10px;">*Preencha todos os campos obrigatórios.</p>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">Número Identificador: <?php echo $id; ?></label></br>
	<input class="form-control" type="text" name="id" value="<?php echo $id; ?>" id="id_opt" placeholder="Campo vazio no banco de dados" maxlength="2000" style="width:80%; height: 40px; font-size: 18px; color: #000; margin-left:10%;" hidden>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">Link do curso</label></br>
	<input class="form-control" type="url" name="endereco" value="<?php echo $endereco; ?>" id="link_opt" placeholder="Campo vazio no banco de dados" maxlength="2000" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #7A7A7A; margin-left:10%;">
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">*Oferta</label></br>
                        <textarea type="text" name="oferta" id="oferta_opt" placeholder="Campo vazio no banco de dados" maxlength="2000" rows="5" title="kkkkkkkk" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #7A7A7A; margin-left:10%;" required><?php echo $oferta; ?></textarea>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">*Tema</label></br>
                        <input type="text" name="tema" value="<?php echo $tema; ?>" id="tema_opt" maxlength="2000" placeholder="Campo vazio no banco de dados" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #7A7A7A; margin-left:10%;" required>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">*Tipo de Oferta</label></br>
                        <input type="text" name="curso" value="<?php echo $tipo_oferta; ?>" id="curso_opt" placeholder="Campo vazio no banco de dados" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #7A7A7A; margin-left:10%;" required>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">*Instituição Responsável</label></br>
                        <input name="responsavel" value="<?php echo $responsavel; ?>" id="responsavel_opt" placeholder="Campo vazio no banco de dados" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #7A7A7A; margin-left:10%;">
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">*Área Técnica</label></br>
                        <input name="areatecnica" value="<?php echo $area_tecnica; ?>" id="areatecnica_opt" placeholder="Campo vazio no banco de dados" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #7A7A7A; margin-left:10%;">
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">*Carga Horária</label></br>
                        <input type="number" name="cargahoraria" value="<?php echo $carga_horaria; ?>" id="cargahoraria_opt" min="0" max="800" placeholder="Campo vazio no banco de dados" style="width:80%; font: 18px Montserrat; letter-spacing: 1.3px; color: #7A7A7A; margin-left:10%;">
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">*Público Alvo</label></br>
                        <input name="publicoalvo" value="<?php echo $publico_alvo; ?>" id="publicoalvo_opt" placeholder="Campo vazio no banco de dados" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #7A7A7A; margin-left:10%;">
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">*Temporalidade</label></br>
                        <input name="temporalidade" value="<?php echo $temporalidade; ?>" id="temporalidade_opt" placeholder="Campo vazio no banco de dados" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #7A7A7A; margin-left:10%;">
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">*Mediação</label></br>
                        <input type="text" name="mediacao" value="<?php echo $mediacao; ?>" id="mediacao_opt" placeholder="Campo vazio no banco de dados" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #7A7A7A; margin-left:10%;">
</div>
<div class="row">
	<div class="col-sm-3 col-md-3 col-xs-12">
	</div>
	<div class="col-sm-6 col-md-6 col-xs-12">
		<input type="submit" value="Atualizar curso" style="width:420px; height: 50px; margin: 30px; font-size: 18px; color: #ffffff; background-color: #057BBA; border-radius: 5px; border: 1px solid #057BBA; box-shadow: 0px 3px 3px #00000026;">
	</div>
	<div class="col-sm-6 col-md-6 col-xs-12">
	</div>
</div>
</form>
</div>	 

<?php get_footer(); ?>