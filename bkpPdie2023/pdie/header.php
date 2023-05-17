<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="cache-control" content="public">
	<meta http-equiv="content-language" content="pt-br">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="robots" content="follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description') ?>">
	<meta name="keywords" content="Site, Fiocruz, Plano de Educação, PDI, PDIE">
	<title><?php wp_title( '| PDIE', true, 'right' ); ?></title>
	
	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/a859c43faf.js" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?>>
		<header>
		<div class="barra-topo"></div>
		<div class="area-menu container">
		<style>
		@media only screen and (min-width: 1200px) {
				.logo-mq {
					width: 100px;
					height: auto;
					position: relative;
					top: 15px;
				}
			}
			
		@media only screen and (max-width: 1199px) {
				.logo-mq {
					width: 100px;
					height: auto;					
					position: relative;
					top: 15px;
				}
			}
		@media only screen and (max-width: 767px) {
				.logo-mq {
					height: auto;
				}
			}
		</style>
			<table>
			  <thead>
			    <tr>
			      	<th scope="col">
					<div>
						<center>
							<a href="http://pdie.fiocruz.br/"><img class="logo-mq" src="<?php header_image(); ?>"  alt=""/></a>
						</center>
					</div>
					</th>
			      <th scope="col" width="100%">
				  <div >
			      	<style>
						@import url('https://fonts.googleapis.com/css2?family=Alata&display=swap');
						.divbloginfo{
								font-family: Segoe Ui;
								font-weight: bold;
								letter-spacing: 0px;
								text-align: left;
								color: #1C1717;
								opacity: 1;
								position: relative;
								right: 0px;	
								top: 25px;
								width: 650px;
								display: inline-block;
							}
						.texto {
								padding: 5px;
								font-size: 24px;
								font-weight: bold;
								line-height: 24px;
								text-align: left;
							}
						
						.corrige{
								width: 300px;
								position: relative;
								left: 800px;
								top: -50px;
						}
						
						.area-menu{
								height: 150px;
								background-image: url(https://pdie.fiocruz.br/wp-content/themes/pdie/SVG/background-h1pdie.png);
								background-size: 100% 150px;
								background-repeat: no-repeat;
							}
							
						@media only screen and (max-width: 1249px) {
							.divbloginfo{
								right: 0px;
								top: 25px;
							}
						}
							
						@media only screen and (max-width: 1199px) {
							.divbloginfo{
								right: 0px;
								top: 25px;
								color: #1C1717;
								width: 450px;
								display: inline-block;
							}
							.texto {
								padding: 10px;
								margin: auto;
								z-index: 2;
								font-family: 'Alata', sans-serif;
								font-size: 20px;
								font-weight: bold;
								text-align: center;
								line-height: 1.5;								
								max-width: 600px;
							}
							
							.corrige{
								width: 280px;
								left: 660px;
								top: -50px;
							}
							
							.area-menu{
								height: 150px;
								background-image: url(https://pdie.fiocruz.br/wp-content/themes/pdie/SVG/background-h1pdie.png);
								background-size: 100% 150px;
								background-repeat: no-repeat;
							}
						}
						
						@media only screen and (max-width: 1119px) {
							.divbloginfo{
								right: 0px;
								top: 25px;
							}
						}
						
						@media only screen and (max-width: 991px) {
							.divbloginfo{
								right: 0px;
								top: 25px;
								color: #1C1717;
								width: 550px;
							}
							
							.texto {
								font-size: 20px;
								font-weight: bold;
								line-height: 24px;
								text-align: left;
							}
							
							.corrige{
								width: 300px;
								position: relative;
								left: 400px;
								top: 55px;
								z-index: 1;
							}
							
							.area-menu{
								height: 150px;
								background-image: url(https://pdie.fiocruz.br/wp-content/themes/pdie/SVG/banner-cabecalho.png);
								background-size: 100% 150px;
								background-repeat: no-repeat;
							}
						}					
						
						@media only screen and (max-width: 767px) {
							.divbloginfo{
								right: 0px;
								top: 15px;
								width: 400px;
							}
							
							.texto {								
								font-size: 18px;
							}
							
							.corrige{
								width: 280px;
								position: relative;
								left: 240px;
								top: 25px;
								z-index: 1;
							}
							
							.area-menu{
								height: 120px;
								background-image: url(https://pdie.fiocruz.br/wp-content/themes/pdie/SVG/banner-cabecalho.png);
								background-size: 100% 120px;
								background-repeat: no-repeat;
							}
						}
						
						@media only screen and (max-width: 575px) {
							.logo-mq {
								width: 90px;
								top: 15px;
							}
							
							.corrige{
								width: 280px;
								position: relative;
								left: 260px;
								top: 35px;
								z-index: 1;
							}
						}
						
						@media only screen and (max-width: 545px) {
							.logo-mq {
								width: 90px;
								top: 15px;
							}
							
							.corrige{
								width: 250px;
								position: relative;
								left: 260px;
								top: 35px;
								z-index: 1;
							}
						}
						
						@media only screen and (max-width: 512px) {							
							.corrige{
								width: 230px;
								position: relative;
								left: 250px;
								top: 35px;
								z-index: 1;
							}
						}
						
						@media only screen and (max-width: 485px) {							
							.divbloginfo{
								right: 0px;
								top: 15px;
								width: 350px;
							}
							
							.corrige{
								position: relative;
								left: 220px;
								top: 35px;
								z-index: 1;
							}
						}
						
						@media only screen and (max-width: 455px) {							
							.corrige{
								position: relative;
								left: 190px;
								top: 35px;
								z-index: 1;
							}
						}
						
						@media only screen and (max-width: 425px) {
							.divbloginfo{
								right: 0px;
								top: 20px;
								width: 250px;
							}
							
							.texto {								
								font-size: 16px;
							}
							
							.corrige{
								position: relative;
								left: 160px;
								top: 35px;
								z-index: 1;
							}
						}
						
						@media only screen and (max-width: 395px) {
							.corrige{
								position: relative;
								left: 130px;
								top: 35px;
								z-index: 1;
							}
						}
						
						@media only screen and (max-width: 365px) {
							.corrige{
								width: 210px;
								position: relative;
								left: 130px;
								top: 35px;
								z-index: 1;
							}
						}
						
						@media only screen and (max-width: 349px) {
							.logo-mq {
								width: 80px;
								top: 10px;
							}
							.divbloginfo{
								right: 0px;
								top: 30px;
								width: 200px;
							}
							
							.texto {								
								font-size: 16px;
							}
						}
						
						@media only screen and (max-width: 349px) {
							.logo-mq {
								width: 80px;
								top: 10px;
							}
							.divbloginfo{
								right: 0px;
								top: 20px;
								width: 200px;
							}
						}
						
						@media only screen and (max-width: 289px) {
							.logo-mq {
								width: 70px;
								top: 0px;
							}
							.divbloginfo{
								right: -85px;
								top: 0px;
								width: 200px;
							}
						}
			      	</style>
					<div class="divbloginfo">
						<p class="texto"><?php bloginfo('name'); ?></p>						
					</div>					
				</div></th>	
			    </tr>
			  </thead>
			</table>
<div class="corrige">
<form role="search" method="get" class="posicao-form" id="searchform" action="<?php echo home_url( '/' ); ?>">
						<div class="col-auto">
							<div class="input-group">
								<input type="search" class="form-control" id="inlineFormInputGroup" value="" name="s" id="s" placeholder="Pesquisar <?php //the_search_query(); ?>">
								<div class="input-group-prepend">
									<button type="submit" id="searchsubmit" class="btn btn-danger" value="Search"><i class="fas fa-search"></i></button>
								</div>
							</div>
						</div>
					</form>			
</div>
		</div>
</header>
			
			
			<style>
			.altura {
				background: #7A0803 0% 0% no-repeat padding-box;
				height: 59px;
			}
			
			/*a.linkheader:visited {
					text-decoration: none;
					color: #DCDCDC;
				}
				a.linkheader { 
					color: #ffffff;
				}
				a.linkheader:hover {
					text-decoration: none; color: #B0C4DE;
				}
				.linkheader {
					padding: 13px;
				} */
				.bg-light { 
					background-color: #7A0803!important;
				}
			#navbarNavDropdown {
					list-style: none;
				    float: left;
				    padding:0px;
				    margin: 0px;
				    background-color: #7A0803;
				}
			#navbarNavDropdown li { 
					list-style: none;
					display: block;
					position: relative;
					float: left;
					text-align: left;
					font-family: Segoe UI;
					font-weight: bold;
					font-size: 18px;
					letter-spacing: 0px;
					color: #FFFFFF;
					opacity: 1;
					
				}
			#navbarNavDropdown li a {
					text-align: left;
					font-family: Segoe UI;
					font-weight: bold;
					font-size: 18px;
					letter-spacing: 0px;
					color: #FFFFFF;
					opacity: 1;
					text-decoration: none;
					padding: 8px 5px;
				}
			#navbarNavDropdown li a:hover{
					border-bottom: #990A04 solid 2px;
					color: #FEE1E0;
					padding: 6px 4px;
				}
			.dropdown-menu{
					background-color: #493A34;
					padding-left: 10px;
					padding-right: 10px;
				}
			.dropdown-item{
					background: #493A39 !important;
					color: #FEE1E0;					
				}
			.dropdown-menu a:hover{
					border-bottom: #332E2E solid 2px !important;
					color:#332E2E !important;
					background: #FAFAFA !important;					
				}
			</style>
			<div class="altura container">	
				<div class="menu-principal">				
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
						  <li class="nav-item active">
							<a class="nav-link" href="https://pdie.fiocruz.br/">Início</a>
						  </li>
						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="https://pdie.fiocruz.br/pdie/" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Pdie
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							  <a class="dropdown-item" href="https://pdie.fiocruz.br/pdie/apresentacao/">Apresentação</a>
							  <a class="dropdown-item" href="https://pdie.fiocruz.br/pdie-historico/">Histórico</a>
							  <a class="dropdown-item" href="https://pdie.fiocruz.br/pdi-anterior/">PDI 2016-2020</a>
							  <a class="dropdown-item" href="https://pdie.fiocruz.br/legislacao/">Legislação</a>
							  <a class="dropdown-item" href="https://pdie.fiocruz.br/pdie/documentos-orientados/">Documentos Referência</a>
							</div>
						  </li> 
						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="https://pdie.fiocruz.br/acompanhamento/" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Acompanhamento
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							  <a class="dropdown-item" href="https://pdie.fiocruz.br/acompanhamento/geral/">Geral</a>
							  <a class="dropdown-item" href="https://pdie.fiocruz.br/acompanhamento/programas-stricto-sensu/">Programas Stricto Sensu</a>
							  <a class="dropdown-item" href="https://pdie.fiocruz.br/acompanhamento/especializacoes-lato-sensu/">Especializações</a>
							  <a class="dropdown-item" href="https://portal.fiocruz.br/sites/portal.fiocruz.br/files/documentos/pdi-fiocruz_07abr16.pdf" target="new_blank">Residências</a>
							  <a class="dropdown-item" href="https://pdie.fiocruz.br/acompanhamento/educcao-tecnica/">Educação Técnica</a>
							  <a class="dropdown-item" href="https://pdie.fiocruz.br/acompanhamento/cursos-de-qualificacao/">Cursos de Qualificação</a>
							</div>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="https://pdie.fiocruz.br/equipe/">Equipe</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="https://pdie.fiocruz.br/contato/">Contato</a>
						  </li>
						</ul>
					  </div>
					</nav>
				</div>
			</div>