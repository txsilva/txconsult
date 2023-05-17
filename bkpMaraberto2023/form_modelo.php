<?php /* Template Name: form_modelo
		 Autor: NEAD/EF
		 */ 
		 
		get_header();

global $wpdb;

		
		if(!empty($_POST['botao'])){
			if(!empty($_POST['categoria']) AND !empty($_POST['classificacao']) AND !empty($_POST['coordenada']) AND !empty($_POST['nomeVia']) AND !empty($_POST['efeitoCausa']) AND !empty($_POST['horario'])){
				print_r($_POST);

				$tabela_nome = $wpdb->prefix.'alerta'; 
				$categoria = sanitize_text_field($_POST['categoria']);
				$classificacao = sanitize_text_field($_POST['classificacao']);
				$coordenada = sanitize_text_field($_POST['coordenada']);
				$nomeVia = sanitize_text_field($_POST['nomeVia']);
				$efeitoCausa = sanitize_text_field($_POST['efeitoCausa']);
				$horario = sanitize_text_field($_POST['horario']);
				
				$data = date('Y-m-d H:m:s');
				
				$inserido = $wpdb->insert($tabela_nome, array(
					'categoria' => $categoria,
					'classificacao' => $classificacao,
					'coordenada' => $coordenada,
					'nomeVia' => $nomeVia,
					'efeitoCausa' => $efeitoCausa,
					'horario' => $horario,
					'dataCadastro' => $data
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
<div class="container">
<form method="post">
<h3>Criação de Alertas pelo Administrador</h3>
<h6>Serviço Base - Google Maps ao Vivo: <a href="https://www.google.com/maps/place/Taguatinga,+Bras%C3%ADlia+-+DF/@-15.8076275,-48.1197166,12z/data=!4m5!3m4!1s0x935a330dea076069:0x7f6433e22e87f312!8m2!3d-15.8107481!4d-48.065751!5m1!1e1" target="new_blank"> https://www.google.com/maps/place/</a></h6>
<br>
<center><h6>1. Identificação.</h6></center>
<hr>
<fieldset>1A) Categoria*:
<select class="form-control" name="categoria">
	<option value="nada">Selecione a categoria do alerta</option>
	<option value="transito">Trânsito</option>
</select>
<p>A categoria deve ser escolhido de acordo com o tipo do alerta no google maps ao vivo.</p>
</fieldset>
<br><br>
<fieldset>1B) Classificação*:
<select class="form-control" name="classificacao">
	<option value="nada">Selecione a classificação por cor</option>
	<option value="amarelo">Amarelo</option>
	<option value="vermelho">Vermelho</option>
</select>
<p>A classificação é a cor mostrada no google maps ao vivo para o alerta.</p>
</fieldset>
<br><br>
<center><h6>2. Geolocalização.</h6></center>
<hr>
<fieldset>2A) Coordenada*:
<input class="form-control" type="text" name="coordenada">
</fieldset>
<p>A coordenada pode ser obtida por meio de uma consulta do <a href="https://nominatim.openstreetmap.org/search.php?q=Estrada+Parque+N%C3%BAcleo+Bandeirante&street=&city=&county=&state=&country=&postalcode=&polygon_geojson=1&viewbox=" target="new_blank">nominatim</a>.</p>
<br><br>
<fieldset>2B) Nome da via*:
<select class="form-control" name="nomeVia">
	<option value="nada">Selecione o nome da via</option>
	<option value="amarelo">EPTG - Estrada Parque Taguatinga</option>
	<option value="vermelho">EPNB - Estrada Parque Núcleo Bandeirante</option>
	<option value="vermelho">BR - 020</option>
</select>
<p>A classificação é a cor mostrada no google maps ao vivo para o alerta.</p>
</fieldset>
<br><br>
<center><h6>3. Causa e horário.</h6></center>
<hr>
<fieldset>3A) Efeito que irá causar:
<br><br>
<div class="radios">
  <label>
    <input type="radio" name="efeitoCausa" id="optionsRadios1" value="option1">
    Congestionamento<br>
	<input type="radio" name="efeitoCausa" id="optionsRadios2" value="option1">
    Obra e lentidão<br>
	<input type="radio" name="efeitoCausa" id="optionsRadios3" value="option1">
    Obra, desvio e lentidão
  </label>
</div>
</fieldset>
<br><br>
<fieldset>3B) Horário:
<br><br>
<div class="radios">
  <label>
    <input type="radio" name="horario" id="optionsRadios1" value="option1">
    Dia todo<br>
    <!-- <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    06:00 -->
	<input type="radio" name="horario" id="optionsRadios3" value="option3">
    08:00<br>
	<!-- <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
    10:00 -->
	<input type="radio" name="horario" id="optionsRadios5" value="option5">
    12:00<br>
	<input type="radio" name="horario" id="optionsRadios6" value="option6">
    14:00<br>
	<!-- <input type="radio" name="optionsRadios" id="optionsRadios7" value="option7">
    16:00<br> -->
	<input type="radio" name="horario" id="optionsRadios8" value="option8">
    18:00
	<!-- <input type="radio" name="optionsRadios" id="optionsRadios9" value="option9">
    22:00<br><br> -->
  </label>
  <input type="submit" name="botao" value="Cadastrar" class="form-control btn btn-danger"><br><br>
</div>
</form>
</div>	 

<?php get_footer(); ?>