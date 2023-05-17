<?php /* Template Name: filtro_modelo
		 Autor: NEAD/EGF
		 */ 
		 
		get_header();
		// header feito o Theme Elementor
		echo do_shortcode( '[elementor-template id="2434"]' );
		echo do_shortcode( '[elementor-template id="36"]' );
		// imagem leme da página inicial
echo '<img src="https://maraberto.brasilia.fiocruz.br/wp-content/uploads/2019/08/3.png" width="100%" height="508">';
?>
<p style="font: 36px Montserrat; padding: 30px; letter-spacing: 0.65px; color: #222222; margin-left: 10%;">Filtro</p>
<!-- <div style="background-image: url('https://brasilia.fiocruz.br/multisite/wp-content/themes/maraberto/SVG/fundo.svg');"> -->
	<div style="background-image: url('http://localhost/maraberto/wp-content/themes/maraberto/SVG/fundo.svg');">
<div class="container" style="background: #FAFAFA; box-shadow: 0px 3px 6px #0000001A; border-radius: 10px;">
<div class="row">
<div class="col-sm-6 col-md-6 col-xs-12">
	<form action="/maraberto/mapeamento/" method="GET">
	<div class="form-group"  style="padding: 5px;">
	<label style="margin-left: 10%; font-size: 18px; color: #888888;">Tema</label></br>
	<select name="tema" id="tema_opt" style="width:80%; height: 40px; font-size: 18px; color: #CCCCCC; margin-left:10%;">
                            <option value="nada">Qual tema procura?</option><option value="Assistência">Assistência</option><option value="Gestão">Gestão</option><option value="Vigilância">Vigilância</option><option value="N/A">N/A</option>
                         </select>
    </div>
    <div class="form-group"  style="padding: 5px;">
    <label style="margin-left: 10%; font-size: 18px; color: #888888;">Mediação</label></br>
                        <select name="mediacao" id="mediacao_opt" style="width:80%; height: 40px; font-size: 18px; color: #CCCCCC; margin-left:10%;">
                            <option value="nada">Que tipo de mediação do curso?</option><option value="Com coordenação">Com coordenação</option><option value="Com tutoria">Com tutoria</option><option value="Sem tutoria">Sem tutoria</option><option value="Não disponível">Não disponível</option><option value="Não se aplica">Não se aplica</option>
                         </select>
    </div>
    <div class="form-group"  style="padding: 5px;">
	<label style="margin-left: 10%; font-size: 18px; color: #888888;">Área Técnica</label></br>
                        <select name="areatecnica" id="areatecnica_opt" style="width:80%; height: 40px; font-size: 18px; color: #CCCCCC; margin-left:10%;">
                            <option value="nada">Qual área área técnica procura cursos?</option><option value="DAF">DAF</option><option value="DAHU">DAHU</option><option value="DATASUS">DATASUS</option><option value="DCIT">DCIT</option><option value="INCA">INCA</option><option value="MS">MS</option><option value="SAA">SAA</option><option value="SAES">SAES</option><option value="SAPS">SAPS</option><option value="SCTIE">SCTIE</option><option value="SE">SE</option><option value="SGTES">SGTES</option><option value="SVS">SVS</option>
                         </select>
	</div>
</div>
<div class="col-sm-6 col-md-6 col-xs-12">
<div class="form-group"  style="padding: 5px;">
	<label style="margin-left: 10%; font-size: 18px; color: #888888;">Tipo de Oferta</label></br>
                        <select name="curso" id="curso_opt" style="width:80%; height: 40px; font-size: 18px; color: #CCCCCC; margin-left:10%;">
                            <option value="nada">Qual o tipo de oferta procura?</option><option value="Acervo">Acervo</option><option value="Base de Dados">Base de Dados</option><option value="Curso online EAD">Curso online EAD</option><option value="Curso presencial">Curso presencial</option><option value="Curso Semi-presencial">Curso Semi-presencial</option><option value="Fórum">Fórum</option><option value="Mídia Social">Mídia Social</option><option value="Web Aula">Web Aula</option><option value="Web palestra">Web palestra</option><option value="Outros cursos">Outros cursos</option>
                         </select>
</div>
<div class="form-group"  style="padding: 5px;">
<label style="margin-left: 10%; font-size: 18px; color: #888888;">Instituição Responsável</label></br>
                        <select name="responsavel" id="responsavel_opt" style="width:80%; height: 40px; font-size: 18px; color: #CCCCCC; margin-left:10%;">
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
</div>
</br>
</br>
</div>
<div class="row">
	<div class="col-sm-3 col-md-3 col-xs-12">
	</div>
	<div class="col-sm-6 col-md-6 col-xs-12">
		<input type="submit" value="Filtrar curso" style="width: 100%; height: 50px; font-size: 18px; color: #ffffff; background-color: #057BBA; border-radius: 5px; border: 1px solid #057BBA; box-shadow: 0px 3px 3px #00000026;">
	</div>
	<div class="col-sm-3 col-md-3 col-xs-12">
	</div>
</div>
</br>
</form>

</div>
</div>

<?php 
// Rodapé feito com o Theme Elementor
echo do_shortcode( '[elementor-template id="38"]' );
echo do_shortcode( '[elementor-template id="2436"]' );
?>

<?php get_footer(); ?>