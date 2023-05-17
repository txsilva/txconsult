<?php /* Template Name: mostrar_mapeamento_modelo1
		 Autor: NEAD/EGF
		 */ 
		 
		get_header();
		
		// header feito o Theme Elementor
		echo do_shortcode( '[elementor-template id="2434"]' );
		echo do_shortcode( '[elementor-template id="36"]' );
		// imagem leme da página inicial
echo '<img src="https://maraberto.brasilia.fiocruz.br/wp-content/uploads/2019/08/3.png" width="100%" height="508">';

?>
<script>
function ativar(){
	//alert("oi");
	document.getElementById('form').style.display = '';
	document.getElementById('botao').style.display = '';
}
function desativar(){
	document.getElementById('form').style.display = 'none';
	document.getElementById('botao').style.display = 'none';
}
</script>
<div style="background-image: url('https://brasilia.fiocruz.br/multisite/wp-content/themes/maraberto/SVG/fundo.svg');">
<!-- <div style="background-image: url('http://localhost/maraberto/wp-content/themes/maraberto/SVG/fundo.svg');"> -->

<div class="container">

<p style="font: 36px Montserrat; padding: 10px; letter-spacing: 0.65px; color: #222222;">Lista de cursos</p>
<button class="btn btn-warning" value="Ativar Filtro" onclick="ativar()" style="margin-bottom: 10px;">Refazer Filtro</button>
</br>
<div id="form" style="width: 100%; display: none;">
<div class="container" style="background: #FAFAFA; box-shadow: 0px 3px 6px #0000001A; border-radius: 10px;">
<button id="botao" class="btn btn-danger" value="Ativar Filtro" onclick="desativar()" style="margin-left: 2px; margin-top: 10px; display: none;">X</button>
<div class="row">
<div class="col-sm-6 col-md-6 col-xs-12">
	<form action="/maraberto/mapeamento/" method="GET">
		<div class="form-group"  style="padding: 5px;">
		<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">Tema</label></br>
                        <select name="tema" id="tema_opt" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #CCCCCC; margin-left:10%;">
                        	<option value="nada">Qual tema procura?</option>
                        	<?php 
                        		if($_GET['tema'] == 'Assistência'){
                        			echo '<option value="Assistência" selected>Assistência</option>';
                        		}else{
                        			echo '<option value="Assistência">Assistência</option>';
                        		}

                        		if($_GET['tema'] == 'Gestão'){
                        			echo '<option value="Gestão" selected>Gestão</option>';
                        		}else{
                        			echo '<option value="Gestão">Gestão</option>';
                        		}

                        		if($_GET['tema'] == 'Vigilância'){
                        			echo '<option value="Vigilância" selected>Vigilância</option>';
                        		}else{
                        			echo '<option value="Vigilância">Vigilância</option>';
                        		}


                        		if($_GET['tema'] == 'N/A'){
                        			echo '<option value="N/A" selected>N/A</option>';
                        		}else{
                        			echo '<option value="N/A">N/A</option>';
                        		}

                        	?>                            
                         </select>
                     </div>
					 <div class="form-group" style="padding: 5px;">
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">Mediação</label></br>
                        <select name="mediacao" id="mediacao_opt" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #CCCCCC; margin-left:10%;">
                            <option value="nada">Que tipo de mediação do curso?</option>
                            <?php
                            	if($_GET['mediacao'] == 'Com coordenação'){
                        			echo '<option value="Com coordenação" selected>Com coordenação</option>';
                        		}else{
                        			echo '<option value="Com coordenação">Com coordenação</option>';
                        		}

                        		if($_GET['mediacao'] == 'Com tutoria'){
                        			echo '<option value="Com tutoria" selected>Com tutoria</option>';
                        		}else{
                        			echo '<option value="Com tutoria">Com tutoria</option>';
                        		}
                            ?>
                            <option value="Sem tutoria">Sem tutoria</option><option value="Não disponível">Não disponível</option><option value="Não se aplica">Não se aplica</option>
                         </select>
                     </div>
					 <div class="form-group"  style="padding: 5px;">
<label style="margin-left: 10%; font: 20px Montserrat; letter-spacing: 1.8px; text-transform: uppercase; color: #888888;">Área Técnica</label></br>
                        <select name="areatecnica" id="areatecnica_opt" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #CCCCCC; margin-left:10%;">
                            <option value="nada">Qual área área técnica procura cursos?</option><option value="DAF">DAF</option><option value="DAHU">DAHU</option><option value="DATASUS">DATASUS</option><option value="DCIT">DCIT</option><option value="INCA">INCA</option><option value="MS">MS</option><option value="SAA">SAA</option><option value="SAES">SAES</option><option value="SAPS">SAPS</option><option value="SCTIE">SCTIE</option><option value="SE">SE</option><option value="SGTES">SGTES</option><option value="SVS">SVS</option>
                         </select>
</div>
</div>
<div class="col-sm-6 col-md-6 col-xs-12">
					<div class="form-group"  style="padding: 5px;">
<label style="margin-left: 10%; font-size: 18px; color: #888888;">Tipo de Oferta</label></br>
                        <select name="curso" id="curso_opt" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #CCCCCC; margin-left:10%;">
                        	<option value="nada">Qual o tipo de oferta procura?</option>
                        	<?php
                        		if($_GET['curso'] == 'Acervo'){
                        			echo '<option value="Acervo" selected>Acervo</option>';
                        		}else{
                        			echo '<option value="Acervo">Acervo</option>';
                        		}

                        		if($_GET['curso'] == 'Base de Dados'){
                        			echo '<option value="Base de Dados" selected>Base de Dados</option>';
                        		}else{
                        			echo '<option value="Base de Dados">Base de Dados</option>';
                        		}

                        		if($_GET['curso'] == 'Curso online EAD'){
                        			echo '<option value="Curso online EAD" selected>Curso online EAD</option>';
                        		}else{
                        			echo '<option value="Curso online EAD">Curso online EAD</option>';
                        		}

                        		if($_GET['curso'] == 'Curso presencial'){
                        			echo '<option value="Curso presencial" selected>Curso presencial</option>';
                        		}else{
                        			echo '<option value="Curso presencial">Curso presencial</option>';
                        		}

                        		if($_GET['curso'] == 'Curso Semi-presencial'){
                        			echo '<option value="Curso Semi-presencial" selected>Curso Semi-presencial</option>';
                        		}else{
                        			echo '<option value="Curso Semi-presencial">Curso Semi-presencial</option>';
                        		}

                        		if($_GET['curso'] == 'Fórum'){
                        			echo '<option value="Fórum" selected>Fórum</option>';
                        		}else{
                        			echo '<option value="Fórum">Fórum</option>';
                        		}

                        		if($_GET['curso'] == 'Mídia Social'){
                        			echo '<option value="Mídia Social" selected>Mídia Social</option>';
                        		}else{
                        			echo '<option value="Mídia Social">Mídia Social</option>';
                        		}

                        		if($_GET['curso'] == 'Web Aula'){
                        			echo '<option value="Web Aula" selected>Web Aula</option>';
                        		}else{
                        			echo '<option value="Web Aula">Web Aula</option>';
                        		}

                        		if($_GET['curso'] == 'Mídia Social'){
                        			echo '<option value="Mídia Social" selected>Mídia Social</option>';
                        		}else{
                        			echo '<option value="Mídia Social">Mídia Social</option>';
                        		}

                        		if($_GET['curso'] == 'Web palestra'){
                        			echo '<option value="Web palestra">Web palestra</option>';
                        		}else{
                        			echo '<option value="Web palestra">Web palestra</option>';
                        		}

                        		if($_GET['curso'] == 'Outros cursos'){
                        			echo '<option value="Outros cursos" selected>Outros cursos</option>';
                        		}else{
                        			echo '<option value="Outros cursos">Outros cursos</option>';
                        		}
                        	?>
                            
                         </select>
</div>
<div class="form-group"  style="padding: 5px;">
<label style="margin-left: 10%; font-size: 18px; color: #7A7A7A;">Instituição Responsável</label></br>
                        <select name="responsavel" id="responsavel_opt" style="width:80%; height: 40px; font: 18px Montserrat; letter-spacing: 1.3px; color: #CCCCCC; margin-left:10%;">
                            <option value="nenhum">Qual a instituição responsável procura?</option><option value="ABIMO">ABIMO</option><option value="ABRASCO">ABRASCO</option><option value="AOL">AOL</option><option value="AU">AU</option><option value="BIREME">BIREME</option><option value="CAPES">CAPES</option><option value="CdP">CdP</option><option value="CEFOPE">CEFOPE</option><option value="Centro de Simulação Realística do Ensino Einstein">Centro de Simulação Realística do Ensino Einstein</option><option value="COENS">COENS</option><option value="COMMUNITAS">COMMUNITAS</option><option value="Comunidade de Práticas / Ministério da Saúde">Comunidade de Práticas / Ministério da Saúde</option><option value="CONASEMS">CONASEMS</option><option value="COSEMS">COSEMS</option><option value="CTHCUFMG">CTHCUFMG</option><option value="DAHU">DAHU</option><option value="DEB">DEB</option><option value="DEGES">DEGES</option><option value="depfono">depfono</option><option value="EBSERH">EBSERH</option><option value="ESUFRN">ESUFRN</option><option value="EVIPNET">EVIPNET</option><option value="FECS">FECS</option><option value="Fiocruz">Fiocruz</option><option value="Fiocruz Brasília">Fiocruz Brasília</option><option value="FIOCRUZ MS">FIOCRUZ MS</option><option value="FUNCERN">FUNCERN</option><option value="Fundação Oswaldo Cruz - Brasília">Fundação Oswaldo Cruz - Brasília</option><option value="Fundação Oswaldo Cruz - Mato Grosso do Sul">Fundação Oswaldo Cruz - Mato Grosso do Sul</option><option value="FUNESA">FUNESA</option><option value="FUNPEC">FUNPEC</option><option value="GHC">GHC</option><option value="HAOC">HAOC</option><option value="HC">HC</option><option value="Hcor">Hcor</option><option value="HCOR SP">HCOR SP</option><option value="HCPA">HCPA</option><option value="HMV">HMV</option><option value="HMV">HMV</option><option value="HUOL">HUOL</option><option value="ICDE">ICDE</option><option value="IFES">IFES</option><option value="IMIP">IMIP</option><option value="INCA">INCA</option><option value="Instituto Aggeu Magalhães">Instituto Aggeu Magalhães</option><option value="INTO">INTO</option><option value="Jovens com">Jovens com</option><option value="LAIS">LAIS</option><option value="LAIS">LAIS</option><option value="MEC">MEC</option><option value="MEJC">MEJC</option><option value="MPES">MPES</option><option value="MS">MS</option><option value="NAVI">NAVI</option><option value="NESC">NESC</option><option value="NESCON">NESCON</option><option value="NUTEDS">NUTEDS</option><option value="NUTTS">NUTTS</option><option value="OMS">OMS</option><option value="OPAS">OPAS</option><option value="OPSAN">OPSAN</option><option value="PEPSUS">PEPSUS</option><option value="PNPIC">PNPIC</option><option value="PPGFON">PPGFON</option><option value="Proadi-SUS">Proadi-SUS</option><option value="PROMUNDO">PROMUNDO</option><option value="PSNP">PSNP</option><option value="REDE">REDE</option><option value="REIP">REIP</option><option value="RETiSFito">RETiSFito</option><option value="RET-SUS">RET-SUS</option><option value="RJ">RJ</option><option value="RTMG">RTMG</option><option value="SAA">SAA</option><option value="SABER">SABER</option><option value="SAES">SAES</option><option value="SAMU">SAMU</option><option value="SAPS">SAPS</option><option value="SE">SE</option><option value="SEDIS">SEDIS</option><option value="SESAI">SESAI</option><option value="SES-MS">SES-MS</option><option value="SES-MT">SES-MT</option><option value="SES-PE">SES-PE</option><option value="SGTES">SGTES</option><option value="SífilisNão">SífilisNão</option><option value="SMS-SP">SMS-SP</option><option value="SUS">SUS</option><option value="SVS">SVS</option><option value="TeleRS">TeleRS</option><option value="Telessaúde Estadual da Bahia">Telessaúde Estadual da Bahia</option><option value="Telessaúde Estadual do Acre">Telessaúde Estadual do Acre</option><option value="Teles-SC">Teles-SC</option><option value="UaB-PT">UaB-PT</option><option value="UERJ">UERJ</option><option value="UFC">UFC</option><option value="UFCSPA">UFCSPA</option><option value="UFG">UFG</option><option value="UFMA">UFMA</option><option value="UFMG">UFMG</option><option value="UFMS">UFMS</option><option value="UFMT">UFMT</option><option value="UFPA">UFPA</option><option value="UFPE">UFPE</option><option value="UFRGS">UFRGS</option><option value="UFRN">UFRN</option><option value="UFRN">UFRN</option><option value="UFSC">UFSC</option><option value="UL">UL</option><option value="UNASUS">UNASUS</option><option value="UNA-SUS">UNA-SUS</option><option value="UnB">UnB</option><option value="Universidade de Brasília">Universidade de Brasília</option><option value="Universidade Federal de Ciências da Saúde de Porto Alegre">Universidade Federal de Ciências da Saúde de Porto Alegre</option><option value="Universidade Federal de Minas Gerais">Universidade Federal de Minas Gerais</option><option value="Universidade Federal de Pelotas">Universidade Federal de Pelotas</option><option value="Universidade Federal de Pernambuco">Universidade Federal de Pernambuco</option><option value="Universidade Federal de Santa Catarina">Universidade Federal de Santa Catarina</option><option value="Universidade Federal de São Paulo">Universidade Federal de São Paulo</option><option value="Universidade Federal do Maranhão">Universidade Federal do Maranhão</option><option value="Universidade Federal do Rio Grande do Norte Ministério da Saúde">Universidade Federal do Rio Grande do Norte Ministério da Saúde</option>
                    </select>
</div>
<div class="form-group row"  style="padding: 5px; color: #888888;">
	<div class="col-sm-6 col-md-6 col-xs-6">
<label style="margin-left: 20%; font-size: 18px;">Carga Horária (Mín)</label></br>
                        <select name="cargamin" id="cargamin_opt" style="width:80%; height: 40px; font-size: 18px; color: #CCCCCC; margin-left:20%;">
<option value="0">MÍNIMA</option><option value="1">1</option><option value="5">5</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="60">60</option><option value="70">70</option><option value="80">80</option><option value="90">90</option><option value="100">100</option><option value="110">110</option><option value="120">120</option><option value="130">130</option><option value="140">140</option><option value="150">150</option><option value="160">160</option><option value="170">170</option><option value="180">180</option><option value="190">190</option><option value="200">200</option><option value="220">220</option><option value="240">240</option><option value="260">260</option><option value="280">280</option><option value="300">300</option>
                         </select>
    </div>
    <div class="col-sm-6 col-md-6 col-xs-6">
<label style="font-size: 18px; color: #7A7A7A;">Carga Horária (Máx)</label></br>
                        <select name="cargamax" id="cargamax_opt" style="width:80%; height: 40px; font-size: 18px; color: #CCCCCC;">
<option value="800">MÁXIMA</option><option value="301">301</option><option value="320">320</option><option value="340">340</option><option value="360">360</option><option value="380">380</option><option value="400">400</option><option value="420">420</option><option value="440">440</option><option value="460">460</option><option value="480">480</option><option value="500">500</option><option value="550">550</option><option value="600">600</option><option value="650">650</option><option value="750">750</option><option value="800">800</option>
                         </select>
    </div>
</div>
<div class="form-group">
<input type="submit" value="Filtrar curso" style="width:80%; height: 40px; font-size: 18px; color: #ffffff; background-color: #61CE70; margin-left:10%; border-radius: 5px; border: 1px solid #61CE70;">
</div>
</form>
</div>
</div>
</div>
</div>
<?php
	//INÍCIO Checando o recebido pelo formulário
	if(isset($_GET['tema'])){
		$tema = $_GET['tema'];
	}else{
		$tema = 'nada';
	}
	
	//echo "Form Tema: ". $_GET['tema'];

	if(isset($_GET['curso'])){
		$curso = $_GET['curso'];		
	}else{
		$curso = 'nada';
	}

	//echo "<br>Form Curso: ". $_GET['curso'];
	
	if(isset($_GET['mediacao'])){
		$mediacao = $_GET['mediacao'];		
	}else{
		$mediacao = 'nada';
	}

	//echo "<br>Form Mediacao: ". $_GET['mediacao'];
	
	if(isset($_GET['responsavel'])){
		$responsavel = $_GET['responsavel'];		
	}else{
		$responsavel = 'nenhum';
	}

	//echo "<br>Form Responsável: ". $_GET['responsavel'];
	
	if(isset($_GET['areatecnica'])){
		$areatecnica = $_GET['areatecnica'];		
	}else{
		$areatecnica = 'nenhum';
	}

	//echo "<br>Form Área Técnica: ". $_GET['areatecnica'];
	
	if(isset($_GET['cargamin'])){
		$cargamin = $_GET['cargamin'];
	}else{
			$cargamin = '0';
			//echo "<br>Final Carga Min: ". $cargamin;
	}

	//echo "<br>Form Carga Min: ". $_GET['cargamin'];
	
	if(isset($_GET['cargamax'])){
		$cargamax = $_GET['cargamax'];		
	}else{
			$cargamax = '800';
			//echo "<br>Final Carga Max: ". $cargamax;
	}

	//echo "<br>Form Carga Max: ". $_GET['cargamax'];
	//FIM checagem
	
	include($_SERVER['DOCUMENT_ROOT'].'\maraberto\wp-config.php');
	
	require_once('crud/funcoes.php');
	
	$link = DBConnect();
	if(($tema == 'nada') && ($curso == 'nada') && ($mediacao == 'nada') && ($responsavel == 'nenhum') && ($areatecnica == 'nada')){
		$select = mysqli_query($link, "SELECT endereco, oferta, tema, responsavel FROM wp_3_mapeamento WHERE tema LIKE '%".$tema."%' and tipo_oferta LIKE '%".$curso."%' and mediacao LIKE '%".$mediacao."%' and responsavel LIKE '%".$responsavel."%' and area_tecnica LIKE '%".$areatecnica."%' or carga_horaria BETWEEN ".$cargamin." and ".$cargamax." ORDER BY oferta ASC") or die(mysqli_error($link));
		//echo "Cláusula 1";
	}
	if(($tema != 'nada') || ($curso != 'nada') || ($mediacao != 'nada') || ($responsavel != 'nenhum') || ($areatecnica != 'nada')){
		$select = mysqli_query($link, "SELECT endereco, oferta, tema, responsavel FROM wp_3_mapeamento WHERE tema LIKE '%".$tema."%' or tipo_oferta LIKE '%".$curso."%' or mediacao LIKE '%".$mediacao."%' or responsavel LIKE '%".$responsavel."%' or area_tecnica LIKE '%".$areatecnica."%' and carga_horaria BETWEEN ".$cargamin." and ".$cargamax." ORDER BY oferta ASC") or die(mysqli_error($link));
		//echo "Cláusula 2";
	}
	$row = mysqli_num_rows($select);

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
echo "<div style=\"width: 80%; border-width: 1px; border-style: solid; border-color: #E0FFFF; background: #F0FFF0; padding: 10px; margin: 5px; margin-left: 10%;\">";
echo "<p style=\"font: 24px Montserrat; letter-spacing: 2px; color: #888888;\"><img src=\"https://brasilia.fiocruz.br/multisite/wp-content/themes/maraberto/SVG/notes.svg\" width=\"25px\" height=\"25px\"> Cursos</p>";

if($row > 0){
		echo "<center><p style=\"font: 18px Montserrat; letter-spacing: 1.3px; margin-bottom: 10px;\">Esses são os resultados encontrados os critérios selecionados.</p></center>";
	}else{
		echo "<center><p style=\"font: 18px Montserrat; letter-spacing: 1.3px; color: #BA0505;\">Nenhum resultado encontrado com estes critérios.</p></center>";
	}
	
while ($linha = mysqli_fetch_array($select)){
	if($cor == 0){
		echo '<hr>';
		//echo "<p style=\"font: 18px Wavehaus; letter-spacing: 1.4px; color: #222222;\">Número Identificador: ".$linha['mapeamento_id']."</br></br>";		
		echo "</br>&nbsp;&nbsp;&nbsp;&nbsp;".$linha['oferta'] ."</br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;Tema: ".$linha['tema']."</br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;Responsável: ". $linha['responsavel'] ."</p>";
		echo "<p style=\"position: relative; left: 85%;\"><a href=\"". $linha['endereco']."\" target=\"new_blank\"\"><img src=\"https://brasilia.fiocruz.br/multisite/wp-content/themes/maraberto/SVG/file.svg\" width=\"20px\" height=\"20px\">Ver Oferta</a></p></br>";
	$cor = 1;
	}else{
		echo '<hr>';
		//echo "<p style=\"font: 18px Wavehaus; letter-spacing: 1.4px; color: #222222;\">Número Identificador: ".$linha['mapeamento_id']."</br></br>";		
		echo "</br>&nbsp;&nbsp;&nbsp;&nbsp;".$linha['oferta'] ."</br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;Tema: ".$linha['tema']."</br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;Responsável: ". $linha['responsavel'] ."</p>";
		echo "<p style=\"position: relative; left: 85%;\"><a href=\"". $linha['endereco']."\" target=\"new_blank\"\"><img src=\"https://brasilia.fiocruz.br/multisite/wp-content/themes/maraberto/SVG/file.svg\" width=\"20px\" height=\"20px\">Ver Oferta</a></p></br>";
	$cor = 0;
	}
	$tam++;
}

echo "</div>";

DBclose($link);
if($tam > 0){
	echo "Cursos encontrados: ". $tam;
}

?>
</div>

<?php get_footer(); ?>