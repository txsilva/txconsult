<?php /* Template Name: inserir_curso
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
global $wpdb;
		
		if(!empty($_POST['botao'])){
			if(!empty($_POST['endereco']) AND !empty($_POST['oferta']) AND !empty($_POST['tema']) AND !empty($_POST['curso']) AND !empty($_POST['responsavel']) AND !empty($_POST['areatecnica']) AND !empty($_POST['cargahoraria']) AND !empty($_POST['publicoalvo']) AND !empty($_POST['temporalidade']) AND !empty($_POST['mediacao'])){
				print_r($_POST);

				$tabela_nome = $wpdb->prefix.'wp_3_mapeamento'; 
				$endereco = sanitize_text_field($_POST['endereco']);
				$oferta = sanitize_text_field($_POST['oferta']);
				$tema = sanitize_text_field($_POST['tema']);
				$curso = sanitize_text_field($_POST['curso']);
				$responsavel = sanitize_text_field($_POST['responsavel']);
				$areatecnica = sanitize_text_field($_POST['areatecnica']);
				$cargahoraria = sanitize_text_field($_POST['cargahoraria']);
				$publicoalvo = sanitize_text_field($_POST['publicoalvo']);
				$temporalidade = sanitize_text_field($_POST['temporalidade']);
				$mediacao = sanitize_text_field($_POST['mediacao']);
				
				$inserido = $wpdb->insert($tabela_nome, array(
					'endereco' => $endereco,
					'oferta' => $oferta,
					'tema' => $tema,
					'tipo_oferta' => $curso,
					'responsavel' => $responsavel,
					'area_tecnica' => $areatecnica,
					'carga_horaria' => $cargahoraria,
					'publico_alvo' => $publicoalvo,
					'temporalidade' => $temporalidade,
					'mediacao' => $mediacao
				));
				
				if($inserido){
					echo "Inserido com sucesso";
				}else{
					echo "Ops,erro ao inserir o usuário";
				}
				
			}else{
				echo "Todos os campos são obrigatórios";
			}
		}
?>
<div style="background-image: url('https://brasilia.fiocruz.br/multisite/wp-content/themes/maraberto/SVG/fundo.svg');">
<div class="container">
<form method="post">
<p style="font: 36px Montserrat; padding: 30px; letter-spacing: 0.65px; color: #222222;">Inserir novo curso</p>
<div class="form-group"  style="background: #FAFAFA; box-shadow: 0px 3px 6px #0000001A; border-radius: 10px; padding: 30px;">
<p style="font: 20px Montserrat; letter-spacing: 0.33px; color: #222222;"><b>*</b>Preencha todos os campos obrigatórios.</p>
</br>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">Link do curso</label>
	<input class="form-control" type="url" name="endereco" id="link_opt" placeholder="Exemplo: https://link.curso" maxlength="2000" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #cccccc; margin-left:10%;">
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888; margin-top: 15px;">*Oferta</label></br>
    <textarea type="text" name="oferta" id="oferta_opt" placeholder="Digite o texto de apresentação da oferta." maxlength="2000" rows="5" style="width:80%; font: 18px Montserrat; letter-spacing: 1.3px; color: #cccccc; margin-left:10%;" required></textarea>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888; margin-top: 15px;">*Tema</label></br>
    <input type="text" name="tema" id="tema_opt" maxlength="2000" placeholder="Qual o tema do novo curso?" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #cccccc; margin-left:10%;" required>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888; margin-top: 15px;">*Tipo de Oferta</label></br>
    <input type="text" name="curso" id="curso_opt" placeholder="Qual o tipo da oferta do novo curso?" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #cccccc; margin-left:10%;" required>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888; margin-top: 15px;">*Instituição Responsável</label></br>
    <input name="responsavel" id="responsavel_opt" placeholder="Qual a instituição responsável pelo novo curso?" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #cccccc; margin-left:10%;" required>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888; margin-top: 15px;">*Área Técnica</label></br>
    <input name="areatecnica" id="areatecnica_opt" placeholder="Qual área área técnica do novo curso?" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #cccccc; margin-left:10%;" required>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888; margin-top: 15px;">*Carga Horária</label></br>
    <input type="number" name="cargahoraria" id="cargahoraria_opt" min="1" max="800" placeholder="Qual a carga horária mínima do novo curso?" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #cccccc; margin-left:10%;" required>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888; margin-top: 15px;">*Público Alvo</label></br>
    <input name="publicoalvo" id="publicoalvo_opt" placeholder="Qual área área técnica do novo curso?" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #cccccc; margin-left:10%;" required>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888; margin-top: 15px;">*Temporalidade</label></br>
    <input name="temporalidade" id="temporalidade_opt" placeholder="Qual área área técnica do novo curso?" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #cccccc; margin-left:10%;" required>
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888; margin-top: 15px;">*Mediação</label></br>
    <input type="text" name="mediacao" id="mediacao_opt" placeholder="Qual o tipo de mediação do novo curso?" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #cccccc; margin-left:10%;" required>
<div class="row">
	<div class="col-sm-3 col-md-3 col-xs-12">
	</div>
	<div class="col-sm-6 col-md-6 col-xs-12">
		<input type="submit" value="Inserir curso" style="width:420px; height: 50px; margin: 30px; font-size: 18px; color: #ffffff; background-color: #057BBA; border-radius: 5px; border: 1px solid #057BBA; box-shadow: 0px 3px 3px #00000026;">
	</div>
	<div class="col-sm-6 col-md-6 col-xs-12">
	</div>
</div>

</div>

</form>
</div>	 

</div>
<?php 
// Rodapé feito com o Theme Elementor
echo do_shortcode( '[elementor-template id="38"]' );
echo do_shortcode( '[elementor-template id="2436"]' );
get_footer();
?>