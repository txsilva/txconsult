	<footer>
		<div class="rodape container">
			<div class="row">
				<div class="col-md-4 col-md-2 col-xs-8">
					<!-- <h5 style="padding: 5px 5px 5px 10px; text-align: left; font-family: normal bold 40px Segoe Ui; letter-spacing: 0px; color: #303030; opacity: 1;"><center>Sobre o PDIE<br></center></h5> -->
					<?php if ( dynamic_sidebar('rodape_widgets') ) : else : endif; ?>
				</div>
				<div class="col-md-4 col-md-2 col-xs-8">
					<style>
						.rw2 .menu{list-style: none; margin-left: 25%;}
						.rw2 a.menu-item:visited, a.linkfooter:link {text-decoration: none; color: #A9A9A9;}
						.rw2 a.menu: { color: #7A0803; }
						.rw2 a.menu:hover {text-decoration: none; color: #303030;}
					</style>
					<!-- <p style="margin-left: 30%;">
						<h5 style="padding: 5px 5px 5px 10px; text-align: left; font-family: normal bold 40px Segoe Ui; letter-spacing: 0px; color: #303030; opacity: 1;"><center>Links do site<br></center></h5> -->
							<?php //wp_nav_menu( array('theme_location', 'menu_2') ); ?>
							<?php if ( dynamic_sidebar('rodape_widgets1') ) : else : endif; ?>
						<!-- </center>
					</p> -->
				</div>
				<div class="col-md-4 col-md-2 col-xs-8"><!-- <h5 style="padding: 5px 5px 5px 10px; text-align: left; font-family: normal bold 40px Segoe Ui; letter-spacing: 0px; color: #303030; opacity: 1;"> -->
					<style>
						.rw3{list-style: none; margin-left: 30%;}
					</style>					
					<!-- <center>Contato</center></h5>
					<ul>
						<li class="list_item">Fiocruz Brasília</li>
						<li class="list_item">61 3352-2332</li>
						<li class="list_item">Asa Norte</li>
					</ul> -->
					<?php if ( dynamic_sidebar('rodape_widgets3') ) : else : endif; ?>				
			</div>		
		</div>
	</div>
		<center><p class="desenvrodape">© 2021 PDIE. Desenvolvido por Núcleo de Educação a Distância da Escola de Governo da Fiocruz Brasília</p></center>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>