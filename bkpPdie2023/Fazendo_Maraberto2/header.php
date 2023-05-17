<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<!-- <title><?php wp_title( '|', true, 'right' ); ?></title> -->
	
	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/a859c43faf.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="barra-topo"></div>
		<div class="area-menu container">
			<table class="">
			  <thead>
			    <tr>
			      	<th scope="col"><div class="logo">
						<center><a href="http://pdie.fiocruz.br/"><img src="https://pdie.fiocruz.br/wp-content/uploads/2021/05/logo-fiocruz.png" width="68px" height="74px"></a></center>
					</div>
					</th>
			      <th scope="col"><div style="font: normal bold Segoe Ui; letter-spacing: 0px; text-align: left; font-size: 25px; color: #1C1717; opacity: 1; padding-left: 10px; padding-right: 100px;">
					<p>ACOMPANHAMENTO DO DESENVOlVIMENTO INSTITUCIONAL DA EDUCAÇÃO NA FIOCRUZ</p>
				</div></th>
			      <th scope="col"><?php //get_search_form(); ?>
			      	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" style="background: #EBEBEB 0% 0% no-repeat padding-box; padding: 10px;">
     <div>
          <input type="search" value="" name="s" id="s" placeholder="Pesquisar <?php //the_search_query(); ?>">
          <button type="submit" id="searchsubmit" class="btn btn-danger" value="Search"><i class="fas fa-search"></i></button>
     </div>
</form>
			      </th>
			    </tr>
			  </thead>
			</table>
			<!-- <div class="row">
					<div class="logo">
						<center><a href="http://pdie.fiocruz.br/"><img src="http://localhost/pdie/wp-content/uploads/2021/05/logo-fiocruz.png" width="68px" height="74px"></a></center>
					</div>
				<div style="font-family: normal bold Segoe Ui; letter-spacing: 0px; text-align: left; font-size: 25px; color: #1C1717; opacity: 1;">
					<p>ACOMPANHAMENTO DO DESENVOlVIMENTO INSTITUCIONAL DA EDUCAÇÃO NA FIOCRUZ</p>
				</div>					
					<form style="background: #EBEBEB 0% 0% no-repeat padding-box; padding: 10px; margin-top: 50px;">
						<input  type="search" class="input-pesquisa" placeholder="Pesquisar" value="<?php 
		//echo get_search_query() ?>" name="s" required><button type="button" class="btn btn-danger"></button>
					</form>
					<?php //get_search_form(); ?>
			</div> -->
			<div class="row" style="background: #7A0803 0% 0% no-repeat padding-box; height: 58px;">	
				<div class="menu-principal">
				<style>
				/*a.linkheader:visited {text-decoration: none; color: #DCDCDC;}
				a.linkheader { color: #ffffff; }
				a.linkheader:hover {text-decoration: none; color: #B0C4DE;}
				.linkheader { padding: 13px;} */
				.bg-light { background-color: #7A0803!important; }
				#conteudoNavbarSuportado {
					list-style: none;
				    float: left;
				    padding:0px;
				    margin:0px;
				    background-color: #7A0803;
				}
				#conteudoNavbarSuportado li { 
					list-style: none;
					position:relative;
					float:left;

					text-align: left;
					font: normal normal bold 18px/24px Segoe UI;
					letter-spacing: 0px;
					color: #FFFFFF;
					opacity: 1;
					
				}
				#conteudoNavbarSuportado li a {
					text-align: left;font: normal normal bold 18px/24px Segoe UI;
					letter-spacing: 0px;
					color: #FFFFFF;
					opacity: 1;
					text-decoration:none; 
					padding:8px 5px; 
					display:block;
				}
				#conteudoNavbarSuportado li ul a:hover{
					background:#332E2E;
					color:#fff;
				}
				#conteudoNavbarSuportado li  ul{
					/*Faz parte do menu dropdown*/
					display:none;
					position:absolute;
					top:40px;
					z-index: 1;
					/*Faz parte do design do site*/					
					text-align: left;
					letter-spacing: 0px;
					font: normal normal bold 18px/20px Segoe UI;
					opacity: 1;
					background-color:#332E2E;
					
				}
				#conteudoNavbarSuportado li:hover ul, .conteudoNavbarSuportado li.over ul{display:block;}
				#conteudoNavbarSuportado li ul li{
					display:block;
					width:150px;
				}
				</style>				
				<nav class="navbar navbar-expand-md navbar-light bg-light">
					<div class="mx-auto order-0">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
							<?php wp_nav_menu( array('theme_location', 'menu_1') ); ?>
							<!-- <ul class="navbar-nav mr-auto">
								<li style="display: inline;"><a class="linkheader" href="/maraberto/">Início</a></li>
								<li style="display: inline;"><a class="linkheader" href="/maraberto/astrolabio/">PDIE</a></li>
								<li style="display: inline;"><a class="linkheader" href="/maraberto/farois/">Acompanhamento</a></li>
								<li style="display: inline;"><a class="linkheader" href="/maraberto/bons-ventos/">Equipe</a></li>
								<li style="display: inline;"><a class="linkheader" href="/maraberto/a-bordo/">Contato</a></li>
							</ul> -->
						</div>						
					</div>
				</nav>
				</div>
			</div>
		</div>
	</header>